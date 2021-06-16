@extends('layout')
@section('main')
    <div class="col-4 offset-4">
        <form class="form-signin" method="post" action="{{route('registration')}}">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
                 height="72">
            <h1 class="h3 mb-3 font-weight-normal">Registrtion form</h1>
            @if($errors->has('main'))
                @foreach($errors->get('main') as $error)
                    <div class="alert">{{$error}}</div>
                @endforeach
            @endif
            <label for="inputEmail" class="sr-only">Email </label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email"
            >
            <label for="inputNumber" class="sr-only">Phone</label>
            <input type="phone" id="inputEmail" class="form-control" placeholder="Enter phone number without symbol" name="phone"
            >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">

            <button class="btn  btn-primary btn-block center mx-auto" type="submit">Sign in</button>
        </form>
    </div>
@endsection
