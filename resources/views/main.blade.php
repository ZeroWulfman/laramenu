@extends('layout')

@section('title')
    Main
@endsection

@section('content')
    <!-- Loops through Table to grab id, image location, and title -->
    @foreach($maincat as $cat)
        <div class="col-sm-6">
                <a href="/sub/{{$cat->id}}">
                <img class="img-responsive" src="{{$cat->image}}" alt="">
                <h3>{{$cat->title}}</h3>
                </a>
        </div>
    @endforeach
@endsection
