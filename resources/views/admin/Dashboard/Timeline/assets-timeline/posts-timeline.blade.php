@foreach ($posts as $post)
<div class="post__maker main-post post-maker">
    <div class="owner__container">
        <div class="owner__info">
            <div class="post__img" onclick="window.location.href = '{{ route('Profile-follow',$post->user->id) }}' ;">
                <img src="{{asset('assets/img/favicon.png')}}" alt="">
            </div>
            <div class="owner__name">
                <h1 class="user__name"
                    onclick="window.location.href = '{{ route('Profile-follow',$post->user->id) }}' ;">
                    {{$post->user->name}}</h1>
                <p class="time">{{$post->created_at}} </p>
            </div>
        </div>
        <div class="posts__icons">
            <!-- <i class='bx bx-x delete-post'></i> -->
        </div>
    </div>
    <div class="posts__content">
        <p>{{$post->text}}</p>
    </div>
    <div class="posts__img">
        <img src="{{asset('assets/img/gymman.jpg')}}" alt="">
    </div>

    @livewire('like',['post_id'=>$post->id])
    @livewire('input-comment',['post_id'=>$post->id])

</div>

@endforeach