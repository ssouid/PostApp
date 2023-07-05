<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h3>{{ __($title) }}</h3>
    <ul>
        <li> <a href="{{url('/')}}">{{ __('home') }}</a></li>
        <li> <a href="{{route('posts.index')}}">{{ __('posts') }}</a></li>
      
    </ul>

    @foreach ( $posts as $post )
        <div style="border: 1px solid #1b ; margin:5px">
            <h1><a href="{{route('posts.show', ['post'=>$post['id']])}}"> {{$post['title']}} </a></h1>
            <p>{{ data_get($post,'desc') }}</p>

        </div>
      
    @endforeach
    {{$posts->links()}}
</body>

</html>
