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

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">Thesis Students</h4></center>
            <table class="table" style="background: white; border-radius: 10px; font-size: 18px">
                <thead>
                <tr>
                    <th scope="col">Join Date</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thesis Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($value as $thesis)
                    <tr>
                        @if($thesis->course_type == "Thesis")
                            <td>{{$thesis->start_time}}</td>
                            <td>{{$thesis->student_id}}</td>
                            <td>{{$thesis->name}}</td>
                            <td>{{$thesis->email}}</td>
                            <td>{{$thesis->pt_title}}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">Project Students</h4></center>
            <table class="table" style="background: white; border-radius: 10px; font-size: 18px">
                <thead>
                <tr>
                    <th scope="col">Join Date</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thesis Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($value as $project)
                    <tr>
                        @if($project->course_type == "Project")
                            <td>{{$project->start_time}}</td>
                            <td>{{$project->student_id}}</td>
                            <td>{{$project->name}}</td>
                            <td>{{$project->email}}</td>
                            <td>{{$project->pt_title}}</td>
                        @endif
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
