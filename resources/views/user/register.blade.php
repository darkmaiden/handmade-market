@extends('layouts.master)

@section('title')
    Join Us
@endsection

@section('content')
    <div class="block-content">
        <div class="container">
            <div class="signup-block">
                <h3>Join us!</h3>
                <div class="row">
                    @if(Session::has('errorMessages'))
                        <script type="text/javascript">
                            $(document).ready(function(){
                                var mess = (<?php echo Session::get('errorMessages'); ?>);
                                //alert(mess);
                                for(var i = 0; i < mess.length; i++)
                                {
                                    Materialize.toast(mess[i], 3000);
                                }
                            });
                        </script>
                    @endif
                    <form class="col s12" method="post" action="{{route('register')}}">
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="name" name="name" type="text" class="validate" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m4 offset-m1">
                                <input name="acc-type" type="radio" id="seller" value="seller"/>
                                <label for="seller">I'm a seller.</label>
                            </div>
                            <div class="input-field col s6 m4 offset-m1">
                                <input name="acc-type" type="radio" id="customer" checked value="customer" />
                                <label for="customer">I'm a customer.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn #6a1b9a purple darken-3">Sign up</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection