@extends('layouts.Layout')
@section('style-user_profile')
<link rel="stylesheet" href="{{asset('assets/css/stylesProfile.css')}}">
<link href="{{ asset('assets/lightbox2-2.11.4/dist/css/lightbox.min.css') }}" rel="stylesheet" />
@endsection

@section('user_profile')
<section class="section section__height container" id="home">
    <!-- here i will put post and create post  -->
    <div class="page__container">
        <div class="post__maker">
            <div class="profile__container">
                <div class="profile__mask">
                    <a href="{{ asset('assets/img/perfil.png') }}" data-lightbox="image-1" data-title="Profile Picture">
                        <img class="profile__img" src="{{asset('assets/img/perfil.png')}}" alt="">
                    </a>
                </div>
                {{-- ############################################## --}}
                <div class="profile__name">
                    <h1 class="nav__name">
                        <p class="user__name">Abdelrahman <br> Mahmoud</p>
                    </h1>

                    <button class="follow__button" onclick="window.location.href = '{{ route('add-follow') }}';">
                        Follow
                    </button>

                    <button style="display: none;" class="following__button">
                        Following
                    </button>

                </div>
                {{-- #################################################### --}}
            </div>

            <div class="thinking__line"></div>

            <div class="follow__section">
                <a class="posts__count counter" href="">
                    <h1>{{ $posts->count() }}</h1>
                    <h2>posts</h2>
                </a>
                <a class="followers__count counter" href="">
                    @if (!isset($data['num_followers']))
                    <h1>0</h1>
                    @else
                    <h1>{{ $data['num_followers'] }}</h1>
                    @endif
                    <h2>followers</h2>
                </a>
                <a class="following__count counter" href="">
                    @if (!isset($data['num_following']))
                    <h1>0</h1>
                    @else
                    <h1>{{ $data['num_following'] }}</h1>
                    @endif
                    <h2>following</h2>
                </a>
            </div>

            <div class="thinking__line"></div>

        </div>

        @include('admin.Dashboard.Timeline.assets-timeline.create-post')
        @include('admin.Dashboard.Timeline.assets-timeline.posts-timeline')
    </div>
</section>
@endsection

@section('script-user_profile')
<script src="{{ asset('assets/js/timeline.js')}}"></script>
<script src="{{ asset('assets/lightbox2-2.11.4/dist/js/lightbox-plus-jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

  var pusher = new Pusher('3a50f7c38a677530c253', {
    cluster: 'mt1'
  });
  var channel = pusher.subscribe("notification");
  channel.bind("PushNotification", function (data) {
    Livewire.emit('notify')
  });

 
</script>


@livewireScripts
@endsection