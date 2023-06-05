<a href="#">
    <i class='bx bxs-bell-ring notification'></i>
    <div class="notifications-container" style="display: none;">
        <ul>
            <li class="dropdown-notifications">
                @if (isset($notifications))

                @foreach ($notifications as $notification)

                <h1 class="user__name">{{ $notification->user->name }}</h1>
                <p class="user__name">{{ $notification->data }}</p>

                @if (isset($notification->comment_id))
                <small class="user__name">{{ $notification->comment->text }}</small><br>
                @endif

                @if (isset($info->replay_id))
                <small class="user__name">{{ $notification->replay->text }}</small><br>
                @endif

                <small class="user__name">{{ $notification->created_at }}</small>
                @endforeach
                @endif
                @if (!isset($notification))
                <h1 class="user__name">Not Found Notification</h1>
                @endif

            </li>
        </ul>
    </div>
</a>