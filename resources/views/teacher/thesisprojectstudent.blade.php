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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Student of Thesis/Project</h4></center><br>
                    <form action="/project_and_thesis_students" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="course_type" value="Project"> Project
                        </label> <br>
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="course_type" value="Thesis"> Thesis
                        </label> <br>
                        <label>Start Date: </label>
                        <input class="form-control" style="display: block; padding: 0.5rem 1rem;" type="date" name="start_time" value="2020-01-01" placeholder="Starting Date">
                        <input class="form-control" type="text" name="name" placeholder="Student Name" required>
                        <input class="form-control" type="text" name="student_id" placeholder="Student ID" required>
                        <input class="form-control" type="email" name="email" placeholder="Student Email" required>
                        <input class="form-control" type="text" name="pt_title" placeholder="Project or Thesis Title" required>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Thesis</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Start Date</th>
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
                                    <td>
                                        {{--<form method="post" action="/mailing" enctype="multipart/form-data">--}}
                                            {{--@csrf--}}
                                            {{--<input type="text" name="email" value="{{$thesis->email}}" hidden>--}}
                                            {{--<input type="submit" class="btn btn-outline-primary" value="Call">--}}
                                        {{--</form>--}}
                                    </td>
                                    <td>
                                        <form class="" action="/project_and_thesis_students/{{$thesis->id}}" method="post">
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
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Project</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Start Date</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Project Title</th>
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
                                    <td>
                                        {{--<form method="post" action="/mailing" enctype="multipart/form-data">--}}
                                            {{--@csrf--}}
                                            {{--<input type="text" name="email" value="{{$project->email}}" hidden>--}}
                                            {{--<input type="submit" class="btn btn-outline-primary" value="Call">--}}
                                        {{--</form>--}}
                                    </td>
                                    <td>
                                        <form class="" action="/project_and_thesis_students/{{$project->id}}" method="post">
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
