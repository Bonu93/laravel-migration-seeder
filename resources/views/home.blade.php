@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($packages as $package)
                <div class="col-2">
                    <div class="card p-3 my-3">
                        <img src="{{$package->image}}" alt="">
                        <h3>{{$package->name}}</h3>
                        <h4>{{$package->city}}</h4>
                        <h4>{{$package->days}}</h4>
                        <span>{{$package->price}}€</span>
                        <p>{{$package->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection