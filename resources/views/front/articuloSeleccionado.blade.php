@extends('front.componentes.main');


@section('contenido')

<div class="row">

    <div class="col-md-9">
        <h3 class="title-fron left">{{ $articulo->title . " | Publicado por " . $articulo->user->name }}</h3>
		{!! $articulo->content !!}

        @foreach ($articulo->tags as $tag)
        {{ $tag->name." |" }}
        @endforeach

    <h3>Comentarios</h3>
    

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://mcvblog.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>


<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script id="dsq-count-scr" src="//mcvblog.disqus.com/count.js" async></script>


</div>

    <div class="col-md-3 aside">

		<div class="panel panel-success">       
            	<div class="panel-body">
                	@foreach ($articulo->images as $image)
                   <img class="img-responsive img-article" src="/imagenes/articulos/{{ $image->name }}" alt="...">
                	@endforeach      
            	</div>
       	</div>

    @include('front.componentes.aside')

    </div>

</div>
@endsection