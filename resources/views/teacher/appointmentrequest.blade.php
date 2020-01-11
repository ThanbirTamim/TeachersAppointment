@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <table class="table">
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
                    <thead>
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Problem</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($value as $item)
                    <tr>
                        <td>{{$item->std_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->problem}}</td>
                        <td>{{$item->slot}}</td>
                        <td>
                            <a href="{{'/appointment_request/'.$item->id}}"><button class="btn btn-outline-primary">Details</button></a>
                        </td>
                        <td>
                            {{--this portion is for approve request...after click this value of this will store in occupy_slot data table and selnding a mail to this email address--}}
                            <form action="/appointment_request_approve" method="post" enctype="multipart/form-data">
                                @csrf
                                <input class="form-control" type="text" name="std_id" value="{{$item->std_id}}" hidden>
                                <input class="form-control" type="text" name="id" value="{{$item->id}}" hidden>
                                <input class="form-control" type="text" name="name" value="{{$item->name}}" hidden>
                                <input class="form-control" type="text" name="phone" value="{{$item->phone}}" hidden>
                                <input class="form-control" type="email" name="email" value="{{$item->email}}" hidden>
                                <input class="form-control" type="text" name="problem" value="{{$item->problem}}" hidden>
                                <input class="form-control" type="text" name="slot" value="{{$item->slot}}" hidden>
                                <button type="submit" class="btn btn-outline-success">Approve</button>
                            </form>
                        </td>
                        <td>
                            <form action="/appointment_request_decline" method="post" enctype="multipart/form-data">
                                @csrf
                                <input class="form-control" type="text" name="std_id" value="{{$item->std_id}}" hidden>
                                <input class="form-control" type="text" name="id" value="{{$item->id}}" hidden>
                                <input class="form-control" type="text" name="name" value="{{$item->name}}" hidden>
                                <input class="form-control" type="text" name="phone" value="{{$item->phone}}" hidden>
                                <input class="form-control" type="email" name="email" value="{{$item->email}}" hidden>
                                <input class="form-control" type="text" name="problem" value="{{$item->problem}}" hidden>
                                <input class="form-control" type="text" name="slot" value="{{$item->slot}}" hidden>

                                <textarea class="form-control" type="text" name="decline" placeholder="Decline Reason" required></textarea>
                                <button type="submit" class="btn btn-outline-danger">Decline</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
