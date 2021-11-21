<x-layout>
    <h1 class="text-center">My First Blog on Laravel</h1>
    @foreach ($posts as $post) : 
    <article>
        <h1><?= $post->title; ?></h1>
        <p>
            Created by <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> in 
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a>
        </p>
        <p>Created at : {{ $post->created_at; }}</p>
        <p>{{$post->excerpt; }}
            <a href="/posts/{{ $post->slug; }}"><i>Read suite..</i></a>
        </p>
        <hr size="3" color="#0000dd" />
    </article>

    @endforeach; 

</x-layout>