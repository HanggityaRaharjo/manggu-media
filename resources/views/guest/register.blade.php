@extends('layouts.guest')

@section('content')
    <main
        style="min-height: 400px;padding:10px;display:flex;justify-content:center;align-items:center;flex-direction:column">
        <div class="card p-3" style="width: 500px">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('manggumedia 1.png') }}" width="300px" alt="logo-manggu-media">
            </div>
            <h4 class="text-center" style="font-weight: bold;color:rgb(146, 145, 145)">Register</h4>
            <form action="{{ url('register') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">name</label>
                        <input type="name" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <button type="submit" class="btn">Register</button>
                    <a href="{{ url('login') }}" style="color: red"><small>Sudah punya akun?masuk disini</small></a>
                </div>
            </form>
        </div>
    </main>
@endsection
