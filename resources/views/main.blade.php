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
                <!-- In order to use this you need to add "illuminate/html": "5.*" to your composer.json, Illuminate\Html\HtmlServiceProvider::class to config/app.php under providers, and 'Form'      =>
                Illuminate\Html\FormFacade::class,
                'HTML'      =>
                Illuminate\Html\HtmlFacade::class to your aliases in the same file. Otherwise just standard   -->
                {!! Form::open(['method' => 'POST', 'route' => ['catdeath', $cat->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                <!-- above has an onsubmit that calls a js script for confirmation -->
                <!-- creates a csrf token for validation (not relevent at the moment) -->
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger delete')) !!}
                {!! Form::close() !!}
        </div>
    @endforeach
@endsection
