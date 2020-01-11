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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Recent Thesis & Project</h4></center><br>
                    <form action="/recent_thesis_project" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="type" value="Project"> Project
                        </label> <br>
                        <label class="radio-inline">
                            <input class="form-control" required type="radio" name="type" value="Thesis"> Thesis
                        </label> <br>
                        <label>Start Date: </label>
                        <input class="form-control" style="display: block; padding: 0.5rem 1rem;" type="date" name="start_time" value="2020-01-01" placeholder="Start Date">
                        <label>Finish Date: </label>
                        <input class="form-control" style="display: block; padding: 0.5rem 1rem;" type="date" name="finish_time" value="2020-01-01" placeholder="Finish Date">
                        <input class="form-control" type="text" name="name" placeholder="Thesis or Project Name" required>
                        <input class="form-control" type="text" name="members" placeholder="Author name; Author name2..." required>
                        <textarea class="form-control" rows="5" type="text" name="description" placeholder="Description"></textarea><br>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Thesis</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Start Date</th>
                            {{--<th scope="col">Finish Date</th>--}}
                            <th scope="col">Name</th>
                            <th scope="col">Authors</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $thesis)
                            <tr>
                                @if($thesis->type == "Thesis")
                                    <td>{{$thesis->start_time}}</td>
                                    {{--<td>{{$thesis->finish_time}}</td>--}}
                                    <td>{{$thesis->name}}</td>
                                    <td>{{$thesis->members}}</td>
                                    <td>{{$thesis->description}}</td>
                                    <td>
                                        <form class="" action="/recent_thesis_project/{{$thesis->id}}" method="post">
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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Project</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Start Date</th>
                            {{--<th scope="col">Finish Date</th>--}}
                            <th scope="col">Name</th>
                            <th scope="col">Authors</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $project)
                            <tr>
                                @if($project->type == "Project")
                                    <td>{{$project->start_time}}</td>
                                    {{--<td>{{$project->finish_time}}</td>--}}
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->members}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>
                                        <form class="" action="/recent_thesis_project/{{$project->id}}" method="post">
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
