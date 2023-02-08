@section('title')
    تسجيل حساب جديد
@endsection
@include('layouts.head')
<body id="home">


<div>
    <form action="{{route('nutrition',$id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $id }}" name="id_of_user">

        <label for="goal">Goal:</label>
        <select name="goal" class="form-control" style="width:200px;">
            <option  selected="">Lose Fat</option>
            <option >Maintain weight</option>
            <option >Build muscle</option>
        </select>


        <br>

        <label for="food">nutrition system:</label>
        <select name="food" class="form-control" style="width:200px;">
            <option  selected="">None</option>
            <option >Vegeterian</option>
            <option >Low Carb</option>
            <option >Keto</option>
        </select>
        <br>

        <label for="allergy">exercise level:</label>
        <select name="allergy[]" multiple="multiple" class="form-control" style="width:200px;">
            <option  selected="">Dairy</option>
            <option>Egg</option>
            <option>Peanut</option>
            <option>Fish</option>
        </select>

        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>


    </form>
</div>

</body>
</html>

