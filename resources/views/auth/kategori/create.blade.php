@extends('layouts.auth')

@section('container')
    <main>
        <!-- Content Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <h1 class="text-center">Buat Kategori</h1>
            <div class="p-5">
                <form action="/kategori" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" style="height: 55px;" class="form-control"
                            placeholder="Recipient's username" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- Content End -->
    </main>
@endsection
