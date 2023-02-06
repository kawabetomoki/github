<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!--         <link href="https://app.diagrams.net/#G1Mi5nSzK-3830EMWIX6IAJ4038p6EjzrZ">-->
    
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.body') }}</textarea>
                <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="store">
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>