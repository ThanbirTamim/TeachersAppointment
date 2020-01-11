<section id="four" class="wrapper style3 special parallax-section">
    <div class="container">
        <header class="major">
            <h2><marquee>Up Coming Events</marquee></h2>
            <p></p>
        </header>
        <ul class="actions">

            @foreach($value9 as $item)
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem; border-radius: 30px; padding: 30px">
                    <div class="card-header"><h3>{{$item->name}}</h3></div>
                    <div class="card-body">
                        <h5 class="card-title">Published: {{$item->created_at->toDateString()}}</h5>
                        <p class="card-text"><a style="color: red" class="btn btn-outline-success" href="{{'/'.$item->id.'/event_detail'}}">See More</a></p>
                    </div>
                </div>
            @endforeach

            {{--<li>--}}
                {{--<div class="card text-white bg-success mb-3" style="max-width: 18rem;">--}}
                    {{--<div class="card-header">Header</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">Success card title</h5>--}}
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>
</section>
