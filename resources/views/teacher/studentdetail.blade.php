@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" style="text-align: left; font-family: 'Times New Roman'; margin-top: 5px; background: darkslategrey; border-radius: 30px">
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
                    <div style=" margin: 50px; padding: 10px; color: white">
                        <h4 style="">Student: {{$item->std_id}}</h4>
                        <h4 style="">Name: {{$item->name}}</h4>
                        <h4>Email: {{$item->email}}</h4>
                        <h4>Phone: {{$item->phone}}</h4>
                        <h4>Problem: {{$item->problem}}</h4>
                        <h4>Slot Chose: {{$item->slot}}</h4>
                        <br>
                        <a href="/appointment_request" class="btn btn-success" style="text-align: center">Back</a>
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
                    <h3 style="margin: 8px; padding: 5px; color: #040505; font-family: 'Times New Roman'">Resedule time</h3>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" style="text-align: left; font-family: 'Times New Roman'; margin-top: 5px; background: #2b0000; border-radius: 30px">
                    <div style="text-align: center; margin: 50px; padding: 10px; color: white">
                        <form action="/appointment" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" value="{{$item->id}}" type="text" name="id" hidden>
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="{{$item->std_id}}" type="text" name="std_id" hidden>
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="{{$item->name}}" type="text" name="name" hidden>
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="{{$item->phone}}" type="text" name="phone" hidden>
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="{{$item->email}}" type="email" name="email" hidden>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="problem" value="{{$item->problem}}" hidden>
                            </div>
                            <div class="form-group">
                                <b style="font-family: 'Times New Roman'; font-size: 16px">Select a slot for : {{$day}}</b>
                                <select class="form-control" name="slot" multiple required>
                                    <option selected>Select a slot</option>
                                    @foreach($foo as $s)
                                        <option value="{{$s}}">{{$s}}</option>
                                    @endforeach
                                </select><br>
                            </div>
                            <div class="form-group" style="text-align: center">
                                <b>These Slots are under waiting </b>(
                                @foreach($waiting as $w)
                                    <b style="color: red">{{$w->slot}},</b>
                                @endforeach
                                <b>)Select another instead of those</b>
                            </div>

                            @if($value != null)
                                <div class="form-group" style="text-align: center">
                                    <input type="submit" value="Submit">
                                </div>
                            @else
                                <div class="form-group" style="text-align: center">
                                    <b>Routine is updating now, try again later</b>
                                </div>
                            @endif


                        </form>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
@endsection
