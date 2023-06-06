<div>
    <div class="search-bar">
        <input type="text" wire:model="name" wire:keydown.enter="search" placeholder="Search...">
    </div>
    @if($isfound==false)
    <h1 class="handle">
        Please enter the username you are looking for
    </h1>
    @else
    <main>
        @foreach($users as $user)
        <section class="user" onclick="window.location.href = '{{ route('Profile-follow',$user->id) }}' ;">
            <img src="{{asset('assets/img/gymman.jpg')}}">
            <h2>{{$user->name}}</h2>
            <p>Web Developer</p>
            <button>Follow</button>
        </section>
        @endforeach
        @endif
    </main>
    <footer>
        <p>&copy; 2023 User Search Results</p>
    </footer>
</div>