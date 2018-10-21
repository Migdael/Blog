 <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Categorias| Seleccione para filtrar</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach ($categorias as $category)
                <li class="list-group-item">
                    <i class="fa fa-thumb-tack"></i>
                    <a href="/front/buscar/categoria/{{ $category->name }}">
                    {{ $category->name }}
                    </a>
                    <span class="label label-primary pull-right">{{ $category->articles->count() }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Tags| Seleccione para filtrar</h3>
    </div>
    <div class="panel-body" style="">
        @foreach ($tags as $tag)

            <span class="lebel lebel-default"> 
                <i class="fa fa-tag text-green"></i>
                 <a href="/front/buscar/tag/{{ $tag->name }}">
                    {{ $tag->name }}
                </a>
            </span>
        @endforeach   
    </div>
</div>


