@extends('front.componentes.main');


@section('contenido')

<div class="row">


    <div class="col-md-9">
        
        <div class="row">
            <div class="col-md-12">
                @include('front/componentes/carrussel')
            </div>
                
            @foreach ($articulos as $article)
            <div class="col-md-4">

                <div class="panel panel-success">
                    <div class="panel-body">
                        <a href="/front/ver/articulo/{{ $article->id }}" class="img-thumbnail">

                            @foreach ($article->images as $image)

                            <img class="img-responsive img-article" src="/imagenes/articulos/{{ $image->name }}" alt="...">
                            @endforeach
                        </a>
                        <hr class="box box-info">
                        <h3 class="text-center">{{$article->title}}</h3>
                        <hr>
                        <i class="fa fa-folder-open-o"></i> <a href="/front/buscar/categoria/{{ $article->category->name }}">{{ $article->category->name }}</a>
                            <div class="pull-right">
                                <i class="fa fa-clock-o">{{ " " . $article->created_at->diffForHumans() }}</i>
                            </div>
                    </div>
                </div>
        
            </div>
            @endforeach

        </div>
        <hr class="box box-info">
        {!! $articulos -> render() !!}
    </div>

    <div class="col-md-3 aside">
    @include('front.componentes.aside')
    </div>


</div>

    
@endsection
