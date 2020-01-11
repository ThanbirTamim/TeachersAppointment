<section id="three" class="wrapper style1 parallax-section">
    <div class="container">
        <header class="major special">
            <h3 style="text-transform: capitalize; font-family: 'Times New Roman'">EXECUTIVE COMMITTEE</h3>
            <p>(2017-2018)</p>
        </header>



        <div class="feature-grid" style="text-transform: capitalize; font-family: 'Times New Roman'">
            @foreach($value1 as $item)
            <div class="feature">
                <div class="image rounded"><img height="150px" width="150px" src="{{'/storage/committee/'.$item->pic}}" alt="" /></div>
                <div class="content">
                    <header>
                        <h4>{{$item->name}}</h4>
                        <p>{{$item->title}}</p>
                    </header>
                    <p>{{$item->organization}}</p>
                </div>
            </div>
            @endforeach
            {{--<div class="feature">--}}
                {{--<div class="image rounded"><img src="/assets/css/images/5.jpg" alt="" /></div>--}}
                {{--<div class="content">--}}
                    {{--<header>--}}
                        {{--<h4>Recusandae nemo</h4>--}}
                        {{--<p>Ratione maiores a, commodi</p>--}}
                    {{--</header>--}}
                    {{--<p>Animi mollitia optio culpa expedita. Dolorem alias minima culpa repellat. Dolores, fuga maiores ut obcaecati blanditiis, at aperiam doloremque.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="feature">--}}
                {{--<div class="image rounded"><img src="/assets/css/images/5.jpg" alt="" /></div>--}}
                {{--<div class="content">--}}
                    {{--<header>--}}
                        {{--<h4>Laudantium fugit</h4>--}}
                        {{--<p>Possimus ex reprehenderit eaque</p>--}}
                    {{--</header>--}}
                    {{--<p>Maiores iusto inventore fugit architecto est iste expedita commodi sed, quasi feugiat nam neque mollitia vitae omnis, ea natus facere.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="feature">--}}
                {{--<div class="image rounded"><img src="/assets/css/images/5.jpg" alt="" /></div>--}}
                {{--<div class="content">--}}
                    {{--<header>--}}
                        {{--<h4>Porro aliquam</h4>--}}
                        {{--<p>Quaerat, excepturi eveniet laboriosam</p>--}}
                    {{--</header>--}}
                    {{--<p>Vitae earum unde, autem labore voluptas ex, iste dolorum inventore natus consequatur iure similique obcaecati aut corporis hic in! Porro sed.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
