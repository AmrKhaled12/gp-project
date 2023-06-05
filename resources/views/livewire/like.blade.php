
<div>
    <div class="reaction__container">
        {{-- @include('admin.Dashboard.Timeline.assets-timeline.like') --}}
        <div class="likes">
            <i class='bx bxs-like'></i> {{ $counter_like }}
            <div class="likes-container" style="display: none;">
                <ul>
                    {{-- @foreach ($user_names as $name )
                    <li>
                        <p class="user__name"></p>
                    </li>
                    @endforeach --}}
                </ul>
            </div>
        </div>

        <div class="comments">
            <p>{{ $counter_comment }} Comment </p>
            <div class="comments-container" style="display: none;">
                <ul>
                    {{-- <li>
                        <p class="user__name">Amr Khaled</p> gamd
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="thinking__line"></div>
    {{-- ################################################################################### --}}
    <div class="posts__reaction">

        @if ($like_btn==1)
        <div wire:click="insert_like" class="like" style="color: red" id="like-reaction">
            <i class="ri-thumb-up-fill"></i>
            <p class="like">like</p>
        </div>
        @endif

        @if ($like_btn==null)
        <div wire:click="insert_like" class="like" id="like-reaction">
            <i class="ri-thumb-up-fill"></i>
            <p class="like">like</p>
        </div>
        @endif
        {{-- ################################################################################### --}}
        <div class="post comment-box">
            <i class="ri-chat-3-line"></i>
            {{-- <a class="post comment-box" href="{{route('getComments',$post->id)}}">Comment</a> --}}
            <p>Comment</p>
        </div>
    </div>
    {{-- ################################################################################### --}}
    <div class="thinking__line"></div>
 
    <div class="comment__section">
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('assets/img/perfil.png')}}" alt="">
            </div>

            <form wire:submit.prevent="insert_comment">

                <div class="thinking">
                    <input wire:model.defer="comment" type="text" class="thinking__input comment__input"
                        placeholder="Write a public comment...">
                    <div id="div_btn" type="submit" wire:click="insert_comment" class="comment__sender">
                        <i class="ri-send-plane-2-fill"></i>
                    </div>

                </div>


            </form>

        </div>
    </div>
</div>
