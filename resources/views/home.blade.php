@extends('layouts.app')

@section('content')
<div class="container">
    @include('teacher.layouts.teachersidebar')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <div>
                        <h3><b style="border: 5px solid red; background: red;border-radius: 100px;padding: 5px; color: white">{{$i}}</b> thesis students you have.</h3>
                    </div>
                    <br><br>
                    <div>
                        <h3><b style="border: 5px solid red; background: red;border-radius: 100px;padding: 5px; color: white">{{$j}}</b> project students you have.</h3>
                    </div>
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
</div>
@endsection
