@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Join Request</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $all)
                            <tr>
                                <td>{{$all->course_type}}</td>
                                <td>{{$all->start_time}}</td>
                                <td>{{$all->student_id}}</td>
                                <td>{{$all->name}}</td>
                                <td>{{$all->email}}</td>
                                <td>{{$all->pt_title}}</td>
                                <td>
                                    <form method="post" action="/join_request_with_team" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="course_type" value="{{$all->course_type}}" hidden>
                                        <input type="text" name="start_time" value="{{$all->start_time}}" hidden>
                                        <input type="text" name="student_id" value="{{$all->student_id}}" hidden>
                                        <input type="text" name="name" value="{{$all->name}}" hidden>
                                        <input type="text" name="email" value="{{$all->email}}" hidden>
                                        <input type="text" name="pt_title" value="{{$all->pt_title}}" hidden>
                                        <input type="text" name="id" value="{{$all->id}}" hidden>
                                        <input type="submit" class="btn btn-outline-primary" value="Approve">
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="/join_request_with_team/{{$all->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Decline">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><br>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif

    </div>
@endsection
