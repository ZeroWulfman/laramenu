@extends('layout')

@section('title')
    Main
@endsection



@section('content')

    @foreach($subcat as $cat)

        @if($cat->sub_id == $id->id)
            <div class="col-sm-6">
                <img class="img-responsive" src="{{$cat->image}}" alt="">
                <h3>{{$cat->title}}</h3>
            </div>
        @endif
    @endforeach
@endsection
