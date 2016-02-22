@extends('layout')

@section('title')
    Main
@endsection



@section('content')
    <!-- Loops through Table to grab id, image location, and title -->
    @foreach($subcat as $cat)

            <div class="col-sm-6">
                <!-- Products page doesn't need anchor -->
                @if($cat->cat_id)
                    <a href="/prod/{{$cat->id}}">
                @endif
                    <img class="img-responsive" src="{{$cat->image}}" alt="">
                    <h3>{{$cat->title}}</h3>
                @if($cat->cat_id)
                    </a>
                @endif
            </div>

    @endforeach
@endsection
