@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="block-content">
        <div class="container">
            <div class="welcome-block">
                <h3>Welcome to the Handmade Market!</h3>
                <br/>
                <h5>Find Sellers to buy handmade</h5>
                <div class="welcome-buttons">
                    <a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="/view">Preview</a>
                    <a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="/signup">Join us</a>
                </div>
            </div>
        </div>
    </div>
@endsection
