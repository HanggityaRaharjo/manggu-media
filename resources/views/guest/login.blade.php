@extends('layouts.guest')

@section('content')
    <main
        style="min-height: 400px;padding:10px;display:flex;justify-content:center;align-items:center;flex-direction:column">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>Email/Password yang anda masukan tidak sesuai</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card p-3">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('manggumedia 1.png') }}" width="300px" alt="logo-manggu-media">
            </div>
            <h4 class="text-center" style="font-weight: bold;color:rgb(146, 145, 145)">Login</h4>
            <form action="{{ url('login') }}" method="post">
                @csrf
                <div class="form-row">
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
                    <button type="submit" class="btn">login</button>
                    <a href="{{ url('register') }}" style="color: red"><small>Belum punya akun?daftar disini</small></a>
                </div>
            </form>
        </div>
    </main>
@endsection
