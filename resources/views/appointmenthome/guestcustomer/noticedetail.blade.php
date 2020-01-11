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
<div class="container" style="float: contour">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12" style="">

            <div class="col-md-8 col-md-offset-2" style="text-align: center; background: white; border-radius: 8px; padding: 15px; margin-top: 30px">
                <h3 style="font-family: 'Times New Roman';background: #000033; border-radius: 09px; color: white; margin: 8px;">{{$value->title}}</h3>
                <p style="font-family: 'Times New Roman';   ;background: #98cbe8; border-radius: 10px; color: black; margin: 8px;">
                    {{$value->description}}
                </p>
            </div>

        </div>
    </div>
</div>



</body>
</html>
