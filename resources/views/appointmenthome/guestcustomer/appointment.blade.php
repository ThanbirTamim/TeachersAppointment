<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    {{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @include('appointmenthome.layouts.head')
    <style>
        body {
            background-image: url("https://www.cisomag.com/wp-content/uploads/2019/04/Cyber-Security-Wallpaper-CISOMAG.jpg");
            background-repeat:repeat-y;
            background-size:cover;
        }
        td{
            text-align: left;
            color: black;
            font-weight: 300;
            font-family: "fantasy";
            border: 5px solid midnightblue;
            border-radius: 15px;
        }
        th{
            text-align: left;
            color: black;
            font-weight: bolder;
            font-family: "fantasy";
            border: 5px solid midnightblue;

        }
        table{
            overflow-x:auto;
            background: white;
            border-radius: 10px;
            font-size: 18px;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        tr:nth-child(even){
            background-color: #f2f2f2
        }
    </style>
</head>
<body class="landing">

<!-- Header -->
@include('appointmenthome.layouts.header')

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12" style="background:white; margin: 30px; padding: 20px; border-radius: 15px">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                {{--<img src="/storage/photogallery/{{ Session::get('image') }}">--}}
            @endif
                @if ($message = Session::get('alert'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                {{--<img src="/storage/photogallery/{{ Session::get('image') }}">--}}
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <b><h3 class="my-4" style="text-align: center; font-family: 'Times New Roman'; text-transform: capitalize; font-size: 28px">Today is <b style="color: Red;">"{{$today}}"</b></h3></b>
                <b><h3 class="my-4" style="text-align: center; font-family: 'Times New Roman'; text-transform: capitalize; font-size: 28px">{{$t}} <b style="color: Red;">"{{$day}}"</b></h3></b>
            <form action="/appointment" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">1. Student ID:</b><input class="form-control" type="text" name="std_id" required>
                </div>
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">1. Name:</b><input class="form-control" type="text" name="name" required>
                </div>
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">2. Phone:</b> <input class="form-control" type="text" name="phone" required>
                </div>

                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">3. Email:</b> <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">4. Problem Statement:</b>
                    <textarea class="form-control" name="problem" required></textarea>
                </div>
                <div class="form-group">
                    <b style="font-family: 'Times New Roman'; font-size: 16px">4. Select a slot for : {{$day}}</b>
                    <select class="form-control" name="slot" multiple required>
                        <option selected>Select a slot</option>

                        @foreach($foo as $s)
                            <option value="{{$s}}">{{$s}}</option>
                        @endforeach
                        {{--@foreach($slot as $value)--}}
                        {{--@if($value != null)--}}
                            {{--@if($value->slot1 != null)--}}
                                {{--<option value="{{$value->slot1}}">{{$value->slot1}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot2 != null)--}}
                                {{--<option value="{{$value->slot2}}">{{$value->slot2}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot3 != null)--}}
                                {{--<option value="{{$value->slot3}}">{{$value->slot3}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot4 != null)--}}
                                {{--<option value="{{$value->slot4}}">{{$value->slot4}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot5 != null)--}}
                                {{--<option value="{{$value->slot5}}">{{$value->slot5}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot6 != null)--}}
                                {{--<option value="{{$value->slot6}}">{{$value->slot6}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot7 != null)--}}
                                {{--<option value="{{$value->slot7}}">{{$value->slot7}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot8 != null)--}}
                                {{--<option value="{{$value->slot8}}">{{$value->slot8}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot9 != null)--}}
                                {{--<option value="{{$value->slot9}}">{{$value->slot9}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot10 != null)--}}
                                {{--<option value="{{$value->slot10}}">{{$value->slot10}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot11 != null)--}}
                                {{--<option value="{{$value->slot12}}">{{$value->slot12}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot12 != null)--}}
                                {{--<option value="{{$value->slot12}}">{{$value->slot12}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot13 != null)--}}
                                {{--<option value="{{$value->slot13}}">{{$value->slot13}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot14 != null)--}}
                                {{--<option value="{{$value->slot14}}">{{$value->slot14}} AM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot15 != null)--}}
                                {{--<option value="{{$value->slot15}}">{{$value->slot15}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot16 != null)--}}
                                {{--<option value="{{$value->slot16}}">{{$value->slot16}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot17 != null)--}}
                                {{--<option value="{{$value->slot17}}">{{$value->slot17}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot18 != null)--}}
                                {{--<option value="{{$value->slot18}}">{{$value->slot18}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot19 != null)--}}
                                {{--<option value="{{$value->slot19}}">{{$value->slot19}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot20 != null)--}}
                                {{--<option value="{{$value->slot20}}">{{$value->slot20}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot21 != null)--}}
                                {{--<option value="{{$value->slot21}}">{{$value->slot21}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot22 != null)--}}
                                {{--<option value="{{$value->slot22}}">{{$value->slot22}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot23 != null)--}}
                                {{--<option value="{{$value->slot23}}">{{$value->slot23}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot24 != null)--}}
                                {{--<option value="{{$value->slot24}}">{{$value->slot24}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot25 != null)--}}
                                {{--<option value="{{$value->slot25}}">{{$value->slot25}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot26 != null)--}}
                                {{--<option value="{{$value->slot26}}">{{$value->slot26}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot27 != null)--}}
                                {{--<option value="{{$value->slot27}}">{{$value->slot27}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot28 != null)--}}
                                {{--<option value="{{$value->slot28}}">{{$value->slot28}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot29 != null)--}}
                                {{--<option value="{{$value->slot29}}">{{$value->slot29}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot30 != null)--}}
                                {{--<option value="{{$value->slot30}}">{{$value->slot30}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot31 != null)--}}
                                {{--<option value="{{$value->slot31}}">{{$value->slot31}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot32 != null)--}}
                                {{--<option value="{{$value->slot32}}">{{$value->slot32}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot33 != null)--}}
                                {{--<option value="{{$value->slot33}}">{{$value->slot33}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot34 != null)--}}
                                {{--<option value="{{$value->slot34}}">{{$value->slot34}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot35 != null)--}}
                                {{--<option value="{{$value->slot35}}">{{$value->slot35}} PM</option>--}}
                            {{--@endif--}}
                            {{--@if($value->slot36 != null)--}}
                                {{--<option value="{{$value->slot36}}">{{$value->slot36}} PM</option>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<option value="">Routine is updating, Try again later</option>--}}
                        {{--@endif--}}


                        {{--@endforeach--}}
                    </select><br>
                </div>
                @if($allslots != null)
                    <div class="form-group" style="text-align: center">
                        <b>These Slots are under waiting </b>(
                        @foreach($waiting as $w)
                            <b style="color: red">{{$w->slot}},</b>
                        @endforeach
                        <b>)Select another instead of those</b>
                    </div>
                @elseif($allslots == null)
                    <div class="form-group" style="text-align: center">
                        <b>There have no any slots for appointment</b>
                    </div>
                @else

                @endif



                @if($allslots != null)
                    <div class="form-group" style="text-align: center">
                        <input type="submit" value="Submit">
                    </div>
                @elseif($allslots == null)
                    <div class="form-group" style="text-align: center">
                        <input value="Submit" hidden>
                    </div>
                @else
                    <div class="form-group" style="text-align: center">
                        <b>Routine is updating now, try again later</b>
                    </div>
                @endif


            </form>
        </div>
    </div>
</div>



</body>
</html>
