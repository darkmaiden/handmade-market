@extends('layouts.master')

@section('title')
    Seller Profile
@endsection

@section('content')
    <div class="block-authenticated">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#items">My Items</a></li>
                        <li class="tab col s3"><a href="#add_item">Add Item</a></li>
                        <li class="tab col s3"><a href="#change">Order RFIDs</a></li>
                    </ul>
                </div>
                <div id="items" class="col s12">
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
                <div id="add_item" class="col s12">
                    <form class="col s12" method="post" action="{{route('additem')}}" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="name" name="name" type="text" class="validate" required>
                                <label for="name">Item Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="price" name="price" type="text" class="validate" required>
                                <label for="name">Price</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="description" name="description" type="text" class="validate" required>
                                <label for="name">Description</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12 m8 offset-m2">
                                <div class="btn">
                                    <span>Photo</span>
                                    <input type="file" name="photo" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s2 offset-s5">
                                <button type="submit" class="waves-effect waves-light btn #6a1b9a purple darken-3">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="change" class="col s12">
                    <h4>Order 10 RFIDs to confirm your account</h4>
                    <form action="{{route('pay')}}" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_D8AOXzVn1oWsVNURAtUdLbtd"
                                data-amount="999"
                                data-name="Demo Site"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection