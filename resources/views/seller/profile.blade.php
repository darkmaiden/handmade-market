@extends('layouts.master')

@section('title')
    Seller Profile
@endsection

@section('content')
    <div class="block-authenticated">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Seller Name</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Send</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection