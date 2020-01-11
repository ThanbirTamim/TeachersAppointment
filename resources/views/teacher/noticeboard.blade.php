@extends('layouts.app')

@section('content')
    @include('teacher.layouts.teachersidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Your Notice</h4></center><br>
                    <form action="/notice_board" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="text" name="title" placeholder="Notice title" required>
                        <textarea required class="form-control" rows="5" type="text" name="description" placeholder="Notice Description"></textarea><br>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Your All Notice</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Published Date</th>
                            <th scope="col">Title</th>
                            {{--<th scope="col">Descriptiomn</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $notice)
                            <tr>

                                <td>{{$notice->created_at->toDateString()}}</td>
                                <td>{{$notice->title}}</td>
                                {{--<td>{{$notice->description}}</td>--}}
                                <td>
                                <form class="" action="/notice_board/{{$notice->id}}" method="post">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="Delete">
                                </form>
                                </td>
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
