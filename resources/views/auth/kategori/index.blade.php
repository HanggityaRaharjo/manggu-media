@extends('layouts.auth')

@section('container')
    <main>
        <!-- Content Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <h1 class="text-center">Semua Kategori</h1>

            {{-- Alert --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <a href="#" class="alert-link">
                            <li>{{ $error }}</li>
                        </a>
                    </div>
                @endforeach
            @endif
            {{-- End Alert --}}
            {{-- Button Trigger Modal Create --}}
            <div class="d-flex justify-content-end">
                <button type="button" class="btn" data-toggle="modal" data-target="#ModalKategori">
                    + Buat Kategori
                </button>
            </div>
            {{-- End Button Trigger Modal Create --}}

            {{-- Semua Kategori --}}
            <div class="manggu-cards">
                @foreach ($kategoris as $kategori)
                    <a href="{{ url('kategori/' . $kategori->id) }}">
                        <div class="manggu-card">{{ ucwords(strtolower($kategori->nama_kategori)) }}</div>
                    </a>
                @endforeach
            </div>
            {{-- End Semua Kategori --}}



            {{-- Modal Create --}}

            <!-- Modal -->
            <div class="modal fade" id="ModalKategori" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Buat Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/kategori" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="nama_kategori" style="height: 55px;" class="form-control"
                                        placeholder="Masukan Nama Kategori" aria-label="Masukan Nama Kategori"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal Create --}}

        </div>
        <!-- Content End -->
    </main>
@endsection
