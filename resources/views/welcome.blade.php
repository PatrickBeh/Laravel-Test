Vamos imprimir os meus posts:

{{ $posts }}

@foreach($posts as $item)
<p>{{$item['title']}}</p><br>
<p>{{$item['subtitle']}}</p><br>
<p>{{$item['content']}}</p><br>
<p>{{$item['title']}}</p><br>


@endforeach