<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/css/create-post.css')}}" rel="stylesheet">
</head>
<body>
<div class="post__maker">
    <form action="{{route('storePost')}}" method="post"enctype="multipart/form-data">
        @csrf
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="thinking">
                <input type="text" name="text" class="thinking__input" placeholder="What's on your mind ?">
            </div>
        </div>

        <div class="thinking__line"></div>

        <div class="thinking__share">
            <div class="photo">
                <i class="ri-image-add-fill"></i>
                <input class="photo-input" type="file" name="media">
            </div>

            <div class="post">
                <i class="ri-share-forward-fill"></i>
                <button class="post-button" type="submit">Post</button>
            </div>
        </div>
    </form>
</div>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
    @endforeach
@endif
</body>
</html>
