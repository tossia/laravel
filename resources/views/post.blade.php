<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="../css/style1.css">
    <meta charset="UTF-8">
    <title>My first blog Laravel</title>
</head>
<html>

    <body mx-4>
        <article>
            <h1>{!! $post->title; !!}</h1>
            <p>
                By <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> in 
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a>
            </p>
            <p>{!! $post->body; !!}</p>

            <a href = "/">Back to Posts page</a>
        </article>

    </body>
</html>
