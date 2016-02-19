@extends('layout')

@section('title')
    Main
@endsection



@section('content')

    @foreach($subcat as $cat)


            <div class="col-sm-6">
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
