@extends('layout')
@section('main')
    <div class="col-4 offset-4">
        <form class="form-signin" method="post" action="{{route('auth.handle-login')}}">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
                 height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in or <a href="{{route('registration.form')}}">registration</a></h1>
            <label for="inputEmail" class="sr-only">Email or phone number</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="login"
            >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">

            <button class="btn  btn-primary btn-block center mx-auto" type="submit">Sign in</button>
        </form>
    </div>
@endsection
