@extends('layout')

@section('title')
    Main
@endsection



@section('content')

    @foreach($subcat as $cat)

        @if($cat->cat_id == $id->id)
            <div class="col-sm-6">
                <a href="/prod/{{$cat->id}}">
                <img class="img-responsive" src="{{$cat->image}}" alt="">
                <h3>{{$cat->title}}</h3>
                </a>
            </div>
        @endif
    @endforeach
@endsection
