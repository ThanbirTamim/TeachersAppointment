
<!DOCTYPE HTML>
<html>
<head>
@include('appointmenthome.layouts.head')
</head>
<body class="landing" id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section loading sign ekn e kaj korbe jokon scrool korbo-->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section home-bg-slideshow2 -->
<section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container" style="">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12" style="background: transparent; color: black; border-radius: 100px; padding: 16px; font-family: 'Times New Roman'">
                <a href="/appointment" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.2s">Appointment</a><br>
                <a href="/join_with_project_thesis" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.4s">Join with my team</a><br>
                <a href="/teacher_notice_board" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.6s" >
                    <marquee>
                        New Notice!!!!!
                        @foreach($notice as $n)
                            {{$n->title}}
                        @endforeach
                    </marquee>
                </a><br>



            </div>

        </div>
    </div>
</section>

<!-- Header -->
@include('appointmenthome.layouts.header')

<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major" style="font-family: 'Times New Roman'; text-transform: capitalize">
                    <img class="responsive" src="{{'/storage/teacher/'.$value10->file}}" height="200px" width="200px" style="border-radius: 100px;
                    border-bottom: 6px solid black;border-top: 6px solid red; border-left: 6px solid darkgreen; border-right: 6px solid blueviolet;">
                    <div style="font-size: 22px">
                        <br> {{$value10->name}} <br>{{$value10->designation}}  <br> {{$value10->department}} <br> {{$value10->university}}
                    </div>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>
                    {{$value10->message}}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- event -->
@include('appointmenthome.layouts.events')
<!-- Footer -->
<!-- Footer section -->
@include('appointmenthome.layouts.footer')



<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/skel.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


<script src="{{asset('theme/js/jquery.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>

<script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('theme/js/jquery.sticky.js')}}"></script>
<script src="{{asset('theme/js/jquery.backstretch.min.js')}}"></script>

<script src="{{asset('theme/js/isotope.js')}}"></script>
<script src="{{asset('theme/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('theme/js/nivo-lightbox.min.js')}}"></script>

<script src="{{asset('theme/js/jquery.flexslider-min.js')}}"></script>

<script src="{{asset('theme/js/jquery.parallax.js')}}"></script>
<script src="{{asset('theme/js/smoothscroll.js')}}"></script>
<script src="{{asset('theme/js/wow.min.js')}}"></script>

<script src="{{asset('theme/js/custom.js')}}"></script>




<script>

    try {
        $(function(){
            var value = '{!! json_encode($value1->toArray()) !!}';
            var newvalue = JSON.parse(value);
            // console.log(newvalue[0].file);
            var i =0;
            jQuery(document).ready(function() {
                $('#home').backstretch([
                    "/storage/slideshow/" + newvalue[i].file,
                    "/storage/slideshow/" + newvalue[i+1].file,
                    "/storage/slideshow/" + newvalue[i+2].file,
                    "/storage/slideshow/" + newvalue[i+3].file,

                ],  {duration: 2000, fade: 2000});
            });
        });
    }catch (err){

    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>



</body>
</html>
