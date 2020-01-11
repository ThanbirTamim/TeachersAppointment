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
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Add Your Routine</h4></center><br>
                    <form action="/my_routine" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Day: </label>
                        <select class="form-control" name="day" required>
                            <option selected>Select a day</option>
                            <option value="1">Saturday</option>
                            <option value="2">Sunday</option>
                            <option value="3">Monday</option>
                            <option value="4">Tuesday</option>
                            <option value="5">Wednesday</option>
                            <option value="6">Thursday</option>
                            <option value="7">Friday</option>
                        </select><br>
                        <label>Time: 8:30 - 10:00 AM</label>
                        <input class="form-control" type="text" name="period1" placeholder="Example: SWE111D;505AB or Counselling" >
                        <label>Time: 10:00 - 11:30 AM</label>
                        <input class="form-control" type="text" name="period2" placeholder="Example: SWE111D;505AB or Counselling" >
                        <label>Time: 11:30 - 1:00 PM</label>
                        <input class="form-control" type="text" name="period3" placeholder="Example: SWE111D;505AB or Counselling" >
                        <label>Time: 1:00 - 2:30 PM</label>
                        <input class="form-control" type="text" name="period4" placeholder="Example: SWE111D;505AB or Counselling" >
                        <label>Time: 2:30 - 4:00 PM</label>
                        <input class="form-control" type="text" name="period5" placeholder="Example: SWE111D;505AB or Counselling" >
                        <label>Time: 4:00 - 5:30 PM</label>
                        <input class="form-control" type="text" name="period6" placeholder="Example: SWE111D;505AB or Counselling" >
                        <center><input type="submit" name="submit" ><br></center>

                    </form>
                </div>
            </div>

        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h4 style="border: 5px solid midnightblue; border-radius: 15px; background: midnightblue; color: white">Your Class Routine</h4></center>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">8:30 - 10:00</th>
                            <th scope="col">10:00 - 11:30</th>
                            <th scope="col">11:30 - 1:00</th>
                            <th scope="col">1:00 - 2:30</th>
                            <th scope="col">2:30 - 4:00</th>
                            <th scope="col">4:00 - 5:30</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($value as $routine)
                            <tr>
                                @if($routine->day == 1)
                                    <td>Saturday</td>
                                @elseif($routine->day == 2)
                                    <td>Sunday</td>
                                @elseif($routine->day == 3)
                                    <td>Monday</td>
                                @elseif($routine->day == 4)
                                    <td>Tuesday</td>
                                @elseif($routine->day == 5)
                                    <td>Wednesday</td>
                                @elseif($routine->day == 6)
                                    <td>Thursday</td>
                                @elseif($routine->day == 7)
                                    <td>Friday</td>
                                @endif

                                    <td>{{$routine->period1}}</td>
                                    <td>{{$routine->period2}}</td>
                                    <td>{{$routine->period3}}</td>
                                    <td>{{$routine->period4}}</td>
                                    <td>{{$routine->period5}}</td>
                                    <td>{{$routine->period6}}</td>

                                    <td>
                                        <form class="" action="/my_routine/{{$routine->day}}" method="post">
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
