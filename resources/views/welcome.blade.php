@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
<div class="content">
    <h1 class="heading">Please choose your city</h1>
    <p class="description">We will introduce the best home to you!</p><a class="card" href="{{route('propertiesContent')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x401)">
            <p>Johor Bahru</p>
        </div>
        <div class="back">
            <div>
                <p>Johor Bahru is a place that contain different kind of facilities nearby</p>
                <p>Education of the children will not cause you much problems because there exist from kindergarden to University schools for you choose!</p>
                <p>Interested in this area?<br>Click the button bellow to find out more!</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('larkin')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x402)">
            <p> Larkin</p>
        </div>
        <div class="back">
            <div>
                <p>No need to worry about daily food because it has a lot of food stalls for you to choose</p>
                <p>Children's education can be choosed without going out from this taman!</p><p>It also includes gas station, bank, and much more facilities for making the resident more easier through their daily life <br>Click the button below to find out more!
                </p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('tampoi')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x403)">
            <p>Tampoi</p>
        </div>
        <div class="back">
            <div>
                <p>It was the most nearest places to Singapore. Workers that would need to go Singapore can save much more time by staying here!</p>
                <p>Resident at here can spending their weekend by going to the shopping center that are located in this area</p><p>Find out more about this area!</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('kempas')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x404)">
            <p>Kempas</p>
        </div>
        <div class="back">
            <div>
                <p>Paradigm mall and Sutera Mall is the nearest shopping mall in this area</p>
                <p>It is convenient for the resident to saty here due to the road that can through to whereever you wanted to go! </p><p>This area is one of the most green and relax environment in Johor! <br>Click the button to find out more!</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="#!">
        <div class="front" style="background-image: url(//source.unsplash.com/300x405)">
            <p>Skudai</p>
        </div>
        <div class="back">
            <div>
                <p>Resident will be more convenient to stay here due to the area contain a lot of facilities such as bank, school, shopping mall and much more!</p><p>You can visit the mall or the facilities in Sutera Utama also bacause it is just beside you! <br>Find out more via this button!</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('uluTiram')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Ulu Tiram</p>
        </div>
        <div class="back">
            <div>
                <p>It is a more high-class area due to the decoration of the area</p>
                <p>This area is also suitable for the resident that is a Singapore worker because it can lead you to Singapore by using 1st-link <br>Click the button to know more about this area!</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('plentong')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Plentong</p>
        </div>
        <div class="back">
            <div>
                <p></p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a><a class="card" href="{{route('masai')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Masai</p>
        </div>
        <div class="back">
            <div>
                <p></p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('pasirGudang')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Pasir Gudang</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('kotaIskandar')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Kota Iskandar</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('gelangPatah')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Gelang Patah</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('senai')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Senai</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('kangkarPulai')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Kangkar Pulai</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('tanjungKupang')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Tanjung Kupang</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('tanjungPelepas')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Tanjung Pelepas</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('dangaBay')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Danga Bay</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    <a class="card" href="{{route('puteriHarbour')}}">
        <div class="front" style="background-image: url(//source.unsplash.com/300x406)">
            <p>Puteri Harbour</p>
        </div>
        <div class="back">
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p><button class="button">Click Here</button>
            </div>
        </div>
    </a>
    
    
</div>
<script type="text/javascript" src="{{asset('js/welcome.js')}}"></script>

@endsection