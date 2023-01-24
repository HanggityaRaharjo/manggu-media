@extends('layouts.guest')

@section('content')
    <main style="border: 5px solid green">
        <div>
            <form action="{{ url('register') }}" method="post">
                @csrf
                <label for="">Username</label>
                <input type="text" name="name">
                <label for="">Email</label>
                <input type="text" name="email">
                <label for="">Password</label>
                <input type="text" name="password">
                <button type="submit">Register</button>
            </form>
        </div>
    </main>
@endsection
