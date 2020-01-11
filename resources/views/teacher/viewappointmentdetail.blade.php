@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
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
                </div>
                <div class="col-md-6" style="text-align: center; background: #6574cd; border-radius: 30px; margin-top: 90px">
                    <img src="{{'/storage/profilepicture/'.$item->file1}}" style="width:200px;height: 200px; margin-top: -90px; border-radius: 100px; border: 5px solid black" class="img-responsive">
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" style="text-align: left; font-family: 'Times New Roman'; margin-top: 5px; background: darkslategrey; border-radius: 30px">
                    <div style=" margin: 50px; padding: 10px; color: white">
                        <h4 style="">Name: {{$item->name}}</h4>
                        <h4>Email: {{$item->email}}</h4>
                        <h4>Phone: {{$item->phone}}</h4>
                        <h4>Problem: {{$item->problem}}</h4>
                        <br>
                        <a href="/memberrequestadmin" class="btn btn-success" style="text-align: center">Back</a>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>

            {{--appointment secdule section--}}
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" style="text-align: center; background: darkkhaki; border-radius: 30px; margin-top: 90px">
                    <h3 style="margin: 8px; padding: 5px; color: #040505; font-family: 'Times New Roman'">Appointment time</h3>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" style="text-align: left; font-family: 'Times New Roman'; margin-top: 5px; background: lightblue; border-radius: 30px">
                    <div style="text-align: center; margin: 50px; padding: 10px; color: white">
                        <form action="/mailsending" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <b style="font-family: 'Times New Roman'; font-size: 16px;color: #040505"></b><input class="form-control" type="email" name="email" value="{{$item->email}}" HIDDEN>
                            </div>
                            <div class="form-group">
                                <b style="font-family: 'Times New Roman'; font-size: 16px;color: #040505">Date:</b><input class="form-control" type="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <b style="font-family: 'Times New Roman'; font-size: 16px; color: #040505">Time:</b> <input class="form-control" type="time" name="time" required>
                            </div>

                            <div class="form-group">
                                <b style="font-family: 'Times New Roman'; font-size: 16px; color: #040505">Comment:</b> <input class="form-control" type="text" name="comment">
                            </div>
                            <div class="form-group" style="text-align: center">
                                <input type="submit" class="btn btn-outline-success" name="member_btn" value="Send Mail">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
@endsection
