@extends('main')

@section('title', '| Create New Post')

@section('styllesheets')
    {!! Html::style('css/parsley.css') !!}}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Create New Post</h1>

            {!! Form::open(['route' => 'posts.store']) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('body', 'Post Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}
            {!! Form::close() !!}
        </div>
    </div>
    @endsection
@section('scripts')
    {!! Html::script('js/parsley.js') !!}}}
@endsection