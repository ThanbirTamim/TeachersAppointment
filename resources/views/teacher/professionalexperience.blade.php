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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Your Skill</h4></center><br>
                    <form action="/professional_experience" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="text" name="skill" placeholder="skill's Name" required>
                        <textarea required class="form-control" rows="5" type="text" name="description" placeholder="Skill's Description"></textarea><br>
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Your All Skills</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Skills</th>
                            <th scope="col">Description</th>
                            {{--<th scope="col">Descriptiomn</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $item)
                            <tr>

                                <td>{{$item->skill}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                <form class="" action="/professional_experience/{{$item->id}}" method="post">
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
