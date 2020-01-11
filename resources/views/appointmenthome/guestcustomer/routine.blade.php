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
            background-image: url("https://www.cyberscoop.com/wp-content/uploads/2019/05/Synack_Trust-Report_cybersecurity_image.png");
            background-repeat:no-repeat;
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

<!-- Page Content -->
<div class="container" style="overflow-x:auto;">
    <div class="row">
        <div class="col-md-12">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">My Class Routine</h4></center>
            <table class="table" style="">
                <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">8:30 - 10:00</th>
                    <th scope="col">10:00 - 11:30</th>
                    <th scope="col">11:30 - 1:00</th>
                    <th scope="col">1:00 - 2:30</th>
                    <th scope="col">2:30 - 4:00</th>
                    <th scope="col">4:00 - 5:30</th>
                </tr>
                </thead>
                <tbody>
                @foreach($value as $routine)
                    <tr>
                        @if($routine->day == 1)
                            <td>Saturday</td>
                        @elseif($routine->day == 2)
                            <td>Sunday</td>
                        @elseif($routine->day == 3)
                            <td>Monday</td>
                        @elseif($routine->day == 4)
                            <td>Tuesday</td>
                        @elseif($routine->day == 5)
                            <td>Wednesday</td>
                        @elseif($routine->day == 6)
                            <td>Thursday</td>
                        @elseif($routine->day == 7)
                            <td>Friday</td>
                        @endif


                        <td>{{$routine->period1}}</td>
                        <td>{{$routine->period2}}</td>
                        <td>{{$routine->period3}}</td>
                        <td>{{$routine->period4}}</td>
                        <td>{{$routine->period5}}</td>
                        <td>{{$routine->period6}}</td>
                        <td>{{$routine->period7}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div><br>
</body>
</html>
