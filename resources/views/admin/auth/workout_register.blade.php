@section('title')
    تسجيل حساب جديد
@endsection
@include('layouts.head')
<body id="home">


<div>
    <form action="{{route('workout',$id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $id }}" name="id_of_user">
        <label for="gender">Gender:</label>
        <select name="gender" >
            <option value="male">male</option>
            <option value="female">female</option>
        </select>

        <br>
        <div class="col-md-4">
            height
            <input type="text" class="form-control" name="height"   >
        </div>
        <br>

        <div class="col-md-4">
            weight
            <input type="text" class="form-control" name="weight"   >
        </div>
        <br>

        <label for="activity">activity rate:</label>
        <select name="activity" class="form-control" style="width:200px;">
            <option value="1.2" selected="">Sedentary (office job)</option>
            <option value="1.375">Light Exercise (1-2 days/week)</option>
            <option value="1.55">Moderate Exercise (3-5 days/week)</option>
            <option value="1.725">Heavy Exercise (6-7 days/week)</option>
            <option value="1.9">Athlete (2x per day) </option>
        </select>
        <br>

        <label for="exercise level">exercise level:</label>
        <select name="exercise_level" class="form-control" style="width:200px;">
            <option  selected="">Beginner</option>
            <option>advanced (more than 6 months)</option>

        </select>
        <br>

        <div id="bfmetric">
            <input type="text" name="bodyfat" class="form-control"  style="width:46px;display:inline-block;" maxlength="2" placeholder="15">
            <span id="bodyfatpercentage-metric" data-original-title="" title="" aria-describedby="popover193025">%</span>
            <a class="btn-btn-success" href="">to calculate </a>
        </div>
        <br>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>


    </form>
</div>

</body>
</html>

