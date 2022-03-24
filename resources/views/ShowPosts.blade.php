@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'showposts', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="row mb-4">
                {{ Form::text('newPosts', null, ['class' => 'form-control col-9 mr-auto']) }}
                {{ Form::submit('投稿する', ['class' => 'btn btn-primary col-2']) }}
            </div>
        @if ($errors->has('post'))
            <p class="alert alert-danger">{{ $errors->first('post') }}</p>
        @endif
        {!! Form::close() !!}

    @foreach ($posts as $post)
        <div class="mb-1">
            <strong>{{ $post->name }}</strong> {{ $post->created_at }}
        </div>
        <div class="pl-3">
            {{ $post->post }}
        </div>
        <hr>
    @endforeach
    </div>
@endsection
