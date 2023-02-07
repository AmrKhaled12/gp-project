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

    <div class="col-md-4">
        الايميل الخاص بك
        <input type="email" class="form-control" name="email" value="{{old('email')}}"  >


    </div>
    <br><br>
    <div class="col-md-4">
        رقم الهاتف
        <input type="tel" class="form-control" name="phone"  >


    </div>
    <div class="col-md-4">

        السن<input type="number" class="form-control" name="age">

    </div>
    <br><br>
    <div class="col-md-4">

        كلمة السر
        <input type="password" class="form-control"  name="password">
    </div>
    <br><br>
    <div class="col-md-4">
        تأكيد كلمة السر
        <input type="password" class="form-control" >
    </div>
    <br><br>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">ارسال</button>
    </div>


</form>
</div>

</body>
</html>
