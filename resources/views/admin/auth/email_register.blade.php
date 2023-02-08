@section('title')
تسجيل حساب جديد
@endsection
@include('layouts.head')
<body id="home">


    <div>
        <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-md-4">

                اسم المستخدم<input type="text" class="form-control" name="name" value="{{old('name')}}">

            </div>
            <br><br>
            {{-- Error name --}}
            @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            <div class="col-md-4">
                الايميل الخاص بك
                <input type="email" class="form-control" name="email" value="{{old('email')}}">


            </div>
            <br><br>
             {{-- Error Email --}}
             @error('email')
             <div class="alert alert-danger" role="alert">
                 {{$message}}
             </div>
             @enderror
            <div class="col-md-4">
                رقم الهاتف
                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">


            </div>
            <br><br>
             {{-- Error phone --}}
             @error('phone')
             <div class="alert alert-danger" role="alert">
                 {{$message}}
             </div>
             @enderror
            <div class="col-md-4">

                السن<input type="number" class="form-control" name="age" value="{{ old('age') }}">

            </div>
            {{-- Error Age --}}
            @error('age')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            <br><br>
            <div class="col-md-4">
                كلمة السر
                <input type="password" class="form-control" name="password">
            </div>
            {{-- Error Password --}}
            @error('password')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror

            <br><br>
            <div class="col-md-4">
                تأكيد كلمة السر
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            <br><br>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">ارسال</button>
            </div>


        </form>
    </div>

</body>

</html>
