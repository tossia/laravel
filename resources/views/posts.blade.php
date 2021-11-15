<x-layout>
    <h1 class="text-center">My First Blog on Laravel</h1>
    @foreach ($posts as $post) : 
    <article>
        <h1><?= $post->title; ?></h1>
        <p>
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a>
        </p>
        <p>Created : {{ $post->created_at}}</p>
        <p>{{$post->excerpt; }}  <a href="/posts/{{ $post->slug; }}">Read suite..</a></p>
        <hr size="3" color="#0000dd" />
    </article>

    @endforeach; 

</x-layout>