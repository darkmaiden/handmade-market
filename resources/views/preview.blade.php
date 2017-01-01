@extends('layouts.master')

@section('title')
    Preview
@endsection

@section('content')
    <div class="block-content">
        <div class="container">
            <h3>Discover Handmade!</h3>
            <div class="row">
                @foreach($items as $item)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/public/images/items/{{$item->id}}.jpg">
                                <span class="card-title">{{$item->name}}</span>
                            </div>
                            <div class="card-content">
                                <p>{{$item->description}}</p>
                            </div>
                            <div class="card-action">
                                <a>$ {{$item->price}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection