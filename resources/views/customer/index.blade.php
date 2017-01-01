@extends('layouts.master')

@section('title')
    Customer Profile
@endsection

@section('content')
    <div class="block-authenticated">
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Seller Name</span>
                            <p>Description</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Items</a>
                            <a href="#">Send a message</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Seller Name2</span>
                            <p>Description</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Items</a>
                            <a href="#">Send a message</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Seller Name3</span>
                            <p>Description</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Items</a>
                            <a href="#">Send a message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection