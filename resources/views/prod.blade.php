@extends('layout')

@section('title')
    Main
@endsection



@section('content')
    <!-- Loops through Table to grab id, image location, and title -->
    @foreach($product as $item)

            <div class="col-sm-6">
                <!-- Products page doesn't need anchor -->
                    <img class="img-responsive" src="{{$item->image}}" alt="">
                    <h3>{{$item->title}}</h3>
                    <!-- full comments on main blade -->
                    {!! Form::open(['method' => 'POST', 'route' => ['itemdeath', $item->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger delete')) !!}
                    {!! Form::close() !!}
            </div>

    @endforeach
@endsection
