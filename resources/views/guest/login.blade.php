@extends('layouts.guest')

@section('content')
    <main style="height: 600px;padding:20px;display:flex;justify-content:center;align-items:center;flex-direction:column">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>Email/Password yang anda masukan tidak sesuai</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div style="border: 1px solid gray;width:fit-content;padding:10px">
            <form action="{{ url('login') }}" method="post">
                @csrf
                <div style="margin-bottom: 10px">
                    <label style="width: 20%" for="">Email</label>
                    <input style="width: 100%" type="email" name="email" required>
                </div>
                <div style="margin-bottom: 10px">
                    <label style="width: 20%" for="">Password</label>
                    <input style="width: 100%" type="password" name="password" required>
                </div>
                <button type="submit" class="btn">login</button>
            </form>
        </div>
    </main>
@endsection
