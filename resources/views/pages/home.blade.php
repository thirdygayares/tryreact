@extends('pages.layout.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style = "margin-top: 20px;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{url('/admin')}}" class="btn btn-primary">Start</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
