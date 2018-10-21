<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articulos = Article::Search($request->title)->paginate(5);
        $articulos->each(function ($articulos) {
            $articulos->category;
            $articulos->user;
        });

        return view('admin.articles.index')->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin/articles/create')
            ->with('categorias', $categorias)
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        //manipulacion de imagenes
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/imagenes/articulos/';
            $file->move($path, $name);
        }

        $articulo          = new Article($request->all());
        $articulo->user_id = \Auth::user()->id;
        $articulo->save();

        $articulo->tags()->sync($request->tags);

        $image       = new Image();
        $image->name = $name;
        $image->article()->associate($articulo);
        $image->save();

        Flash::success("Se ha creado un nuevo Articulo: " . $articulo->title);
        return redirect('admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Article::find($id);
        $articulo->Category;
        $categorias = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $misTags    = $articulo->tags->pluck('id')->ToArray();

        return view('admin.articles.edit')
            ->with('articulo', $articulo)
            ->with('categorias', $categorias)
            ->with('tags', $tags)
            ->with('misTags', $misTags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Article::find($id);
        $articulo->fill($request->all());
        $articulo->save();

        $articulo->tags()->sync($request->tags);

        Flash::warning("El Articulo " . $articulo->title . " fuen modificado de forma exitosa");
        return redirect('/admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Article::find($id);
        $articulo->delete();
        Flash::error("El Articulo " . $articulo->title . " fuen borrado de forma exitosa");
        return redirect('/admin/articles');
    }
}
