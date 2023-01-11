@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/rent.css')}}">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<body class="flex justify-center items-center h-screen bg-blue-lightest">
                                @foreach($properties as $property)
     
        <div id="app" class=" w-128 h-10 rounded shadow-md flex card text-grey-darkest">
        <div class="col-sm-12">    
        <div class="col-sm-6" style="float: left;"> 
        <img src="{{asset('images')}}/{{$property-> propertyPic}}" alt="" class="img-fluid"></div></a>
            <div class="col-sm-6" style="float: right;">
            <div class="w-full flex flex-col">
                <div class="p-4 pb-0 flex-2">
                    <h3 class="font-light mb-1 text-grey-darkest">{{$property->propertyName}}</h3>
                    <div class="text-xs flex items-center mb-4" style="max-width: 128px;">
                        <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                         {{$property->description}}
                    </div>
                    <span class=" text-grey-darkest">{{$property->location}}</span>
                    <div class="flex items-center mt-3">
                        <div class="pr-2 text-xs">
                            <i class="fas fa-wifi text-green"></i>RM {{$property->price}}
                        </div><br>
                    </div>
                    <div class="flex items-center  mt-3">
                        <div class="pr-2 text-xs">
                            <i class="text-grey-darker far fa-building"></i>Bedroom: {{$property->bedroom}}
                        </div>
                        <div class="pr-2 text-xs">
                            <i class="text-grey-darker far fa-building"></i>Bathroom: {{$property->washroom}}
                        </div>
                    </div>
                </div> <br><br>
                <div class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                <a href="{{route('rentDetails', ['id' => $property ->id])}}" class="bookNow">Book Now</a>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
          </div>
        </div>
        @endforeach
    </body> 


    @endsection