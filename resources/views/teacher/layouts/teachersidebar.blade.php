<div class="sidenav">
    {{--teacher der naam show er jonno side bar e Controller theke user naam ansi who login--}}
    <h4 style="color:white;font-family: 'Times New Roman'">{{ Auth::user()->name }}</h4>
    <a style="font-family: 'Times New Roman'" href="/">Visit Site</a>
    <a style="font-family: 'Times New Roman'" href="/appointment_request">Appointment Request</a>
    <a style="font-family: 'Times New Roman'" href="/join_request_with_team">Join Request</a>
    <a style="font-family: 'Times New Roman'" href="/photoslides">Slide Show Img</a>
    <a style="font-family: 'Times New Roman'" href="/teachermessage">Your Formal Message</a>
    <a style="font-family: 'Times New Roman'" href="/event">Event</a>
    <a style="font-family: 'Times New Roman'" href="/takencourse">Taken Courses</a>
    <a style="font-family: 'Times New Roman'" href="/achievements">Achivements</a>
    <a style="font-family: 'Times New Roman'" href="/recent_thesis_project">Recent Project/Thesis</a>
    <a style="font-family: 'Times New Roman'" href="/project_and_thesis_students">Project/Thesis Students</a>
    <a style="font-family: 'Times New Roman'" href="/notice_board">Notice Board</a>
    <a style="font-family: 'Times New Roman'" href="/professional_experience ">Professional Experience</a>
    <a style="font-family: 'Times New Roman'" href="/membership">Membership</a>
    <a style="font-family: 'Times New Roman'" href="/my_routine">Routine</a>

    {{--for logout--}}
    <a style="color: red; font-family: 'Times New Roman'" href="{{ route('logout') }}"
       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>




</div>
