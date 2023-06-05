<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesTimeline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesComment.css')}}">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICON ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <title>FitnessFuelX</title>
    @livewireStyles
</head>

<body>
    @method('post')
    @csrf

    <!--=============== NAVBAR ===============-->
    <nav class="nav" id="nav">
        <div class="nav__menu container" id="nav-menu">
            <div class="nav__shape"></div>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>

            <div class="nav__data">
                <div class="nav__mask">

                    <img src="{{asset('assets/img/perfil.png')}}" alt="" class="nav__img">
                </div>

                <span class="nav__greeting">Hi,</span>
                <h1 class="nav__name">
                    <p class="user__name">Abdelrahman <br> Mahmoud</p>
                </h1>
            </div>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link active-link">
                        <i class="ri-home-4-line"></i> Home
                    </a>
                </li>
                <li class="nav__item">
                    <a href="Profile.html" class="nav__link">
                        <i class="ri-user-line"></i> Profile
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('plan_workout')}}" class="nav__link">
                        <i class='bx bx-dumbbell'></i> Workout
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('nut_show')}}" class="nav__link">
                        <i class='bx bx-bowl-hot'></i> Nutrition
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--=============== MAIN ===============-->
    <main class="main" id="main">
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="header__nav container">
                {{-- <ul class="navbar-nav">--}}
                    {{-- <li class="nav-item">--}}
                        {{-- <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>--}}
                        {{-- </li>--}}
                    {{-- <li class="nav-item d-none d-sm-inline-block">--}}
                        {{-- <a href="index3.html" class="nav-link">Home</a>--}}
                        {{-- </li>--}}
                     <li class="nav-item d-none d-sm-inline-block">
                         <a href="{{route('logout')}}" class="nav-link">Logout</a>
                         </li>
                     </ul>
                <a href="#" class="header__logo">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="logo">
                    <p>FitnessFuelX</p>
                </a>

                @include('admin.Dashboard.Timeline.assets-timeline.search-bar')

                <div class="icons">

                    {{-- @include('admin.Dashboard.Timeline.assets-timeline.notification') --}}
                    @livewire('notification')

                    <!-- Toggle button -->
                    <div class="header__toggle" id="header-toggle">
                        <i class='bx bx-grid-alt'></i>
                    </div>
                </div>
            </nav>
        </header>
        <!--=============== HOME ===============-->
        <section class="section section__height container" id="home">
            <!-- here i will put post and create post  -->
            <div class="page__container">

                @include('admin.Dashboard.Timeline.assets-timeline.create-post')
                @include('admin.Dashboard.Timeline.assets-timeline.posts-timeline')

            </div>
        </section>


    </main>

    <!--=============== MAIN JS ===============-->

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
        Livewire.emit('notify',data[2])
      });
  
     
    </script>
    <script src="{{asset('assets/js/timeline.js')}}"></script>

    @livewireScripts
</body>

</html>
