@extends('layouts.app')

@section('content')
<div class="container">
    <h1>オタクたちの話し場</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ようこそ!!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログインが完了しました') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
