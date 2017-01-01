@extends('layouts.master')

@section('title')
    Seller Profile
@endsection

@section('content')
    <div class="block-authenticated">
        <div class="container" align="center">
            <div class="row">
                <div class="col m6">
                    <img src="/public/images/rfid.jpg"/>
                    <form method="post" action="{{route('info')}}">
                        <input type="hidden" value="12" name="id"/>
                        <button type="submit" class="btn waves-effect">Scan!</button>
                    </form>
                </div>
                <div class="col m6">
                    @if(Session::has('id'))
                        <h4>Item name: {{Session::get('item_name')}}</h4>
                        <p>Item Id: {{Session::get('id')}}</p>
                        <p>Description: {{Session::get('description')}}</p>
                        <p>Price: {{Session::get('price')}}</p>
                        <p>Author (seller): {{Session::get('seller_name')}}</p>
                    @endif
                </div>
            </div>


        </div>
    </div>
@endsection