@foreach ($posts as $post)
<div class="post__maker main-post post-maker">
    <div class="owner__container">
        <div class="owner__info">
            <div class="post__img">
                <img src="{{asset('assets/img/favicon.png')}}" alt="">
            </div>
            <div class="owner__name">
                <h1 class="user__name">{{$post->user->name}}</h1>
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

{{-- <div class="post__maker post-maker">
    <div class="owner__container">
        <div class="owner__info">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="owner__name">
                <h1 class="user__name">Abdelrahman Mahmoud</h1>
                <p class="time">April 20 at 7:25 PM </p>
            </div>
        </div>
        <div class="posts__icons">
            <!-- <i class='bx bx-x delete-post'></i> -->
        </div>
    </div>
    <div class="posts__content">
        <p>اهلا ، انا عندي 23 سنه وكنت حابب انزل الجيم وكدا ، وانا حابب الموضوع الصراحه بس محتاج نصايح
            ياريت</p>
    </div>
    <div class="reaction__container">
        <div class="likes">
            <i class='bx bxs-like'></i> 98
            <div class="likes-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="comments">
            <p>7 comments</p>
            <div class="comments-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="thinking__line"></div>
    <div class="posts__reaction">
        <div class="like" id="like-reaction">
            <i class="ri-thumb-up-fill"></i>
            <p>Like</p>
        </div>
        <div class="post comment-box">
            <i class="ri-chat-3-line"></i>
            <p>Comment</p>
        </div>
    </div>

    <div class="thinking__line"></div>

    <div class="comment__section">
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="thinking">
                <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                <div class="comment__sender">
                    <i class="ri-send-plane-2-fill"></i>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="post__maker post-maker">
    <div class="owner__container">
        <div class="owner__info">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="owner__name">
                <h1 class="user__name">Abdelrahman Mahmoud</h1>
                <p class="time">April 21 at 9:75 AM </p>
            </div>
        </div>
        <div class="posts__icons">
            <!-- <i class='bx bx-x delete-post'></i> -->
        </div>
    </div>
    <div class="posts__content">
        <p>مرحبا , هل التمرين دا كويس للجسم وهل ليه اضرار</p>
    </div>
    <div class="posts__img">
        <img src="{{asset('assets/img/gymman.jpg')}}" alt="">
    </div>
    <div class="reaction__container">
        <div class="likes">
            <i class='bx bxs-like'></i> 98
            <div class="likes-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="comments">
            <p>7 comments</p>
            <div class="comments-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="thinking__line"></div>
    <div class="posts__reaction">
        <div class="like" id="like-reaction">
            <i class="ri-thumb-up-fill"></i>
            <p>Like</p>
        </div>
        <div class="post comment-box">
            <i class="ri-chat-3-line"></i>
            <p>Comment</p>
        </div>
    </div>

    <div class="thinking__line"></div>

    <div class="comment__section">
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="thinking">
                <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                <div class="comment__sender">
                    <i class="ri-send-plane-2-fill"></i>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="post__maker post-maker">
    <div class="owner__container">
        <div class="owner__info">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="owner__name">
                <h1 class="user__name">Abdelrahman Mahmoud</h1>
                <p class="time">April 21 at 9:75 AM </p>
            </div>
        </div>
        <div class="posts__icons">
            <!-- <i class='bx bx-x delete-post'></i> -->
        </div>
    </div>
    <div class="posts__content">
        <p>مرحبا , هل التمرين دا كويس للجسم وهل ليه اضرار</p>
    </div>
    <div class="posts__img">
        <video controls src="{{asset('assets/img/videocrossfit.mp4')}}" alt=""></video>
    </div>
    <div class="reaction__container">
        <div class="likes">
            <i class='bx bxs-like'></i> 98
            <div class="likes-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p>
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p>
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="comments">
            <p>7 comments</p>
            <div class="comments-container" style="display: none;">
                <ul>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                    <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li>
                    <li>
                        <p class="user__name">Fouad Mahmoud</p> you doing well
                    </li>
                    <li>
                        <p class="user__name">Omar Hesham</p> nice
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="thinking__line"></div>
    <div class="posts__reaction">
        <div class="like" id="like-reaction">
            <i class="ri-thumb-up-fill"></i>
            <p>Like</p>
        </div>
        <div class="post comment-box">
            <i class="ri-chat-3-line"></i>
            <p>Comment</p>
        </div>
    </div>

    <div class="thinking__line"></div>

    <div class="comment__section">
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>
            <div class="thinking">
                <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                <div class="comment__sender">
                    <i class="ri-send-plane-2-fill"></i>
                </div>

            </div>
        </div>
    </div>
</div> --}}