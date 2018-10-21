<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articulos = Article::Search($request->title)->OrderBy('id', 'DESC')->paginate(3);
        $articulos->each(function ($articulos) {
            $articulos->category;
            $articulos->images;
            $articulos->user;
        });

        return view('/front/index')
            ->with('articulos', $articulos);
    }

    public function BuscarCategoria($name)
    {
        $categoria = Category::BuscarCategoria($name)->first();
        $articulos = $categoria->articles()->paginate(4);

        $articulos->each(function ($articulos) {
            $articulos->category;
            $articulos->images;
            $articulos->user;
        });

        return view('/front/index')
            ->with('articulos', $articulos);
    }

    public function BuscarTag($name)
    {
        $tag       = Tag::BuscarTag($name)->first();
        $articulos = $tag->articles()->paginate(4);

        $articulos->each(function ($articulos) {
            $articulos->category;
            $articulos->images;
            $articulos->user;
        });

        return view('/front/index')
            ->with('articulos', $articulos);

    }

    public function VerArticulo($id)
    {
        $articulo = Article::find($id);

        $articulo->category;
        $articulo->images;
        $articulo->user;

        return view('/front/articuloSeleccionado')
            ->with('articulo', $articulo);
    }

}
