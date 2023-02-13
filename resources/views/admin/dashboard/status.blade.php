<html>
@include('layouts.bootstrap')
<body>
<table class="table">
    <thead>

    <tr>
        <th scope="col">Weight</th>
        <th scope="col">Height</th>
        <th scope="col">age</th>
        <th scope="col">bodyfat</th>
        <th scope="col">gender</th>
        <th scope="col">nutrition_system</th>
        <th scope="col">allergy</th>
        <th scope="col">goal</th>
        <th scope="col">Bmr</th>
        <th scope="col">Bmi</th>
        <th scope="col">Your calories</th>

    </tr>
    </thead>
    <tbody>

        <tr>
            <th >{{$data->weight}}</th>
            <th >{{$data->height}}</th>
            <th >{{$data->users->age}}</th>
            <th >{{$data->body_fat}}</th>
            <th >@if($data->gender==1) Male @else Female @endif</th>
@foreach($nit_data as $val)
            <th >{{$val->nutrition_system}}</th>
            <th >{{$val->allergy}}</th>
              <th >{{$val->goal}}</th>
            @endforeach
            <th >{{$status['bmr']}}</th>
            <th>{{$status['bmi']}}</th>
            <th >{{$status['activity']}}</th>
            <td>
                <a class="btn btn-primary" href="" role="button">Edit</a>
                <a class="btn btn-primary" href="" role="button">Delet</a>
            </td>
        </tr>

    </tbody>
</table>
<h1> Macronutrients </h1>
<table class="table">
    <thead>

    <tr>
        <th scope="col">Protein</th>
        <th scope="col">Carbs</th>
        <th scope="col">Fats</th>


    </tr>
    </thead>
    <tbody>
    <th > {{$macros['protein']}} g</th>
    <th > {{$macros['carbs']}} g</th>
    <th > {{$macros['fats']}} g</th>
    </tbody>
</table>
</body>

</html>
