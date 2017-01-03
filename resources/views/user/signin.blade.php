@extends('layouts.master)

@section('title')
    Sign In
@endsection

@section('content')
    <div class="block-content">
        <div class="container">
            <div class="signin-block">
                <h3>SignIn</h3>
                <div class="row">
                    @if(Session::has('errorMessages'))
                        <script type="text/javascript">
                            $(document).ready(function(){
                                var mess = (<?php echo Session::get('errorMessages'); ?>);
                                Materialize.toast(mess, 3000);
                            });
                        </script>
                    @endif
                    <form class="col s12" method="post" action="{{route('user.signin')}}">
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
                            <div class="input-field col s12" align="center">
                                <button type="submit" class="waves-effect waves-light btn #6a1b9a purple darken-3">Sign in</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection