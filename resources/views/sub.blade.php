@extends('layout')

@section('title')
    Main
@endsection



@section('content')
    <!-- Loops through Table to grab id, image location, and title -->
    @foreach($subcat as $cat)

            <div class="col-sm-6">
                <!-- Products page doesn't need anchor -->
                    <a href="/prod/{{$cat->id}}">
                    <img class="img-responsive" src="{{$cat->image}}" alt="">
                    <h3>{{$cat->title}}</h3>
                    </a>
                    <!-- full comments on main blade -->
                    {!! Form::open(['method' => 'POST', 'route' => ['subdeath', $cat->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger delete')) !!}
                    {!! Form::close() !!}
            </div>

    @endforeach
@endsection
