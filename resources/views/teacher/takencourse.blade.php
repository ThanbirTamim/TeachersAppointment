@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Your Courses Which You Teach</h4></center><br>
                    <form action="/takencourse" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="course_type" value="Undergraduate"> Undergraduate
                        </label>
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="course_type" value="Graduate"> Graduate
                        </label><br>
                        <input type="text" name="course_code" placeholder="Course Code" required><br>
                        <input type="text" name="course_title" placeholder="Course Title" required><br>
                        <textarea class="form-control" rows="5" type="text" name="course_description" placeholder="Course Description"></textarea><br>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Undergraduate Courses</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $undergraduate)
                            <tr>
                                @if($undergraduate->course_type == "Undergraduate")
                                    <td>{{$undergraduate->course_code}}</td>
                                    <td>{{$undergraduate->course_title}}</td>
                                    <td>
                                    <form class="" action="/takencourse/{{$undergraduate->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete">
                                    </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Graduate Courses</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $graduate)
                            <tr>
                                @if($graduate->course_type == "Graduate")
                                    <td>{{$graduate->course_code}}</td>
                                    <td>{{$graduate->course_title}}</td>
                                    <td>
                                    <form class="" action="/takencourse/{{$graduate->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete">
                                    </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div><br>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif

    </div>
@endsection
