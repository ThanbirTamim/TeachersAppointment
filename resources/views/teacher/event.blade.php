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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Event</h4></center><br>
                    <form action="/event" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="Name" required><br>
                        <textarea placeholder="Description" required class="form-control" rows="5" type="text" name="description" ></textarea><br>
                        <input type="text" name="link" placeholder="Event Link" required><br>
                        <center><input type="submit" name="submit"></center>
                    </form>
                </div>
            </div>

        </div>
        <br>



        <div class="container">
            <center><h5 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Events</h5></center>
            <div class="row">
                @foreach($value as $item)
                <div class="col-sm-3" style="padding: 16px; margin: 10px; background: darkslateblue ;color: white; border-radius: 20px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Event Name: {{$item->name}}</div>
                        <div class="panel-body">
                            Description:{{$item->description}}<br>
                            <a href="{{$item->link}}">Link</a>

                        </div>
                        <div class="panel-footer">
                            <form class="" action="/event/{{$item->id}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Delete">
                            </form>


                        </div>
                    </div>
                </div><br>
                @endforeach
            </div>
        </div><br>


    </div>
@endsection
