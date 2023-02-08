@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                      points: {{auth()->user()->points}}
                      {{-- image:{{auth()->user()->image}} --}}
                    <a href="{{route('user.getdata')}}">Get Data</a>
                    <a href="{{route('user.editprofile')}}">edit profile</a>
                </div>
                
            </div>
            <img src="{{asset('images/'.auth()->user()->image  )}}"  alt="faefewgwgwegw">
        </div>
    </div>
</div>
@endsection
