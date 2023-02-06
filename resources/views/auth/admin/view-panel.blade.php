@extends('layouts.dashboard')
@section('body')
    {{-- Content --}}
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">View Panel</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>

            {{-- Greetings --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $jam = (int) date('H');
                            if ($jam <= 10) {
                                $greet = 'Pagi ';
                                $emoticon = '🌑';
                            } elseif ($jam <= 14) {
                                $greet = 'Siang';
                                $emoticon = '🌞';
                            } elseif ($jam <= 16) {
                                $greet = 'Sore';
                                $emoticon = '🌗';
                            } else {
                                $greet = 'Malam';
                                $emoticon = '🌚';
                            }
                            ?>
                            <h2>Hai ,Selamat {{ $greet }} <span class="px-1 text-light"
                                    style="background:#ff2143;">{{ Auth::user()->role }}</span>
                                {{ $emoticon }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Greetings --}}
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('component_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if ($message = Session::get('DeleteNotif'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Headline --}}
                            <form action="{{ url('dashboard/admin/component') }}" method="post">
                                @csrf
                                <div class="form-row align-items-center">
                                    <div class="form-group col-md-12 m-0" style="padding:5px">
                                        <h5 style="margin:0">Pengaturan Tampilan Article</h5>
                                    </div>
                                    <div class="form-group col-md-4 m-0">
                                        <label for="">Komponen</label>
                                        <select id="inputState" name="component_id" class="form-control">
                                            <option selected disabled>Pilih Component</option>
                                            @foreach ($components as $component)
                                                <option value="{{ $component->id }}">{{ $component->nama_komponen }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8 m-0">
                                        <label for="">Article</label>
                                        <select id="inputState" name="article_id" class="form-control">
                                            <option selected disabled>Pilih Article</option>
                                            @foreach ($datas as $data)
                                                <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 text-right m-0 mt-2">
                                        <button type="submit" class="btn"
                                            style="background:#ff2143;color:#fff">Save</button>
                                    </div>
                                </div>
                            </form>
                            {{-- End Headline --}}
                            <h5>Article Terpasang</h5>
                            <p>- Klik kartu berwarna merah untuk hapus artikel yang terpasang</p>
                            <p>- Jika terbaru tidak dipasang otomatis mengambil 5 data artikel terbaru</p>
                            <div class="row">
                                @foreach ($components as $component)
                                    <div class="col-md-2">
                                        <h4 class="d-flex justify-content-center align-items-center text-center"
                                            style="border: 2px solid rgba(151, 151, 151, 0.507);height:50px;border-radius:5px">
                                            {{ $component->nama_komponen }}</h4>
                                        @foreach ($component->component_article as $data)
                                            <button type="button" data-toggle="modal"
                                                data-target="#popup-{{ $data->id }}"
                                                style="background: transparent;border:none">
                                                <div class="mb-1 p-1"
                                                    style="background: #ff2143;font-weight:bold;border-radius:5px;color:white">
                                                    {{ $data->article->judul }}
                                                </div>
                                            </button>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                            <!-- Pop Up -->
                            @foreach ($components_article as $data)
                                <div class="modal fade" id="popup-{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="popupLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-end">

                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="p-5">
                                                <h5 class="modal-title" id="popupLabel">Yakin untuk melepas artikel
                                                    yang
                                                    terpasang <strong>{{ $data->article->judul }}</strong> ?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <form action="{{ url('/dashboard/components/delete/' . $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- End Pop Up --}}

                        </div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4>Pengaturan Iklan</h4>
                            <form action="{{ url('dashboard/admin/iklan/store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan1">Iklan 1 <small>Ukuran terbaik (750px X 92px)</small></label>
                                        <input type="file" name="iklan1" class="form-control" id="iklan1"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan2">Iklan 2 <small>Ukuran terbaik (750px X 92px)</small></label>
                                        <input type="file" name="iklan2" class="form-control" id="iklan2"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan3">Iklan 3 <small>Ukuran terbaik (750px X 92px)</small></label>
                                        <input type="file" name="iklan3" class="form-control" id="iklan3"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan4">Iklan 4 <small>Ukuran terbaik (263px X 353px)</small></label>
                                        <input type="file" name="iklan4" class="form-control" id="iklan4"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan5">Iklan 5 <small>Ukuran terbaik (944px X 152px)</small></label>
                                        <input type="file" name="iklan5" class="form-control" id="iklan5"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan6">Iklan 6 <small>Ukuran terbaik (263px X 353px)</small></label>
                                        <input type="file" name="iklan6" class="form-control" id="iklan6"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label for="iklan7">Iklan 7 <small>Ukuran terbaik (300px X 755px)</small></label>
                                        <input type="file" name="iklan7" class="form-control" id="iklan7"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 text-right">
                                        <button type="submit" class="btn">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Tampilan detail article</h4>
                            <div style="color:white">
                                <div style="min-height:500px;width:100%">
                                    {{--  --}}
                                    <div class="d-flex justify-content-between px-3 py-2 align-items-center"
                                        style="background: rgb(181, 135, 255)">
                                        <p style="margin:0;width: fit-content;">Logo</p>
                                        <p class="text-center" style="margin:0;width: 250px;border:3px solid red">Iklan 1
                                        </p>
                                    </div>
                                    {{--  --}}
                                    <div class="text-center" style="background: rgb(155, 180, 41)">Navigasi</div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:300px;width:75%">Content</div>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="width: 25%;background: rgb(41, 152, 180);border:3px solid red">Iklan 7
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:75%">Footer</div>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="width: 25%;background: rgb(41, 152, 180);border:3px solid red">Iklan6
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <h4>Struktur komponen dilihat user</h4>
                            <div style="color:white">
                                <div style="min-height:500px;width:100%">
                                    {{--  --}}
                                    <div class="d-flex justify-content-between px-3 py-2 align-items-center"
                                        style="background: rgb(181, 135, 255)">
                                        <p style="margin:0;width: fit-content;">Logo</p>
                                        <p class="text-center" style="margin:0;width: 250px;border:3px solid red">Iklan 1
                                        </p>
                                    </div>
                                    {{--  --}}
                                    <div class="text-center" style="background: rgb(155, 180, 41)">Navigasi</div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:75%">Article Headline
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="width: 25%;background: rgb(41, 152, 180)">Side Article</div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div style="width:75%">
                                            <div class="d-flex justify-content-center align-items-center mb-1"
                                                style="background: rgb(41, 152, 180);height:100px;">Article Terbaru</div>
                                            <div class="d-flex justify-content-center align-items-center mb-1"
                                                style="background:
                                                rgb(41, 152, 180);height:50px;border:3px solid red">
                                                iklan2</div>
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="background:
                                                rgb(41, 152, 180);height:50px;border:3px solid red">
                                                iklan3</div>
                                        </div>
                                        <div style="width: 25%;">
                                            <div class="d-flex justify-content-center align-items-center mb-1"
                                                style="background: rgb(62, 187, 62);height:60px">Social Media</div>
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="background: rgb(62, 162, 187);height:100px">
                                                <p class="text-center">Article Rekomendasi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:25%;border:3px solid red">
                                            Iklan4</div>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="width: 75%;background: rgb(41, 152, 180)">Carousel/slider Article
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:100%">
                                            <p>Article Trend</p>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:100%">
                                            <p>Video</p>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex justify-content-center align-items-center mb-1"
                                        style="background:
                                                rgb(41, 152, 180);height:50px;border:3px solid red">
                                        iklan5</div>
                                    {{--  --}}
                                    {{--  --}}
                                    <div class="d-flex justify-content-between mb-1" style="gap: 10px">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="background: rgb(41, 152, 180);height:100px;width:75%">Footer</div>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="width: 25%;background: rgb(41, 152, 180);border:3px solid red">Iklan6
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Video --}}
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('dashboard/admin/video/store') }}" method="post">
                                @csrf
                                <div class="form-group col-md-12 m-0">
                                    <label for="url_video">Url Video
                                        <small>https://www.youtube.com/embed/MuSp9wIzi44</small></label>
                                    <input type="text" name="url_video" id="url_video" class="form-control"
                                        value="https://www.youtube.com/embed/">
                                </div>
                                <div class="form-group col-md-12 m-0">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control">
                                </div>
                                <div class="form-group col-md-12 m-0 text-right">
                                    <button type="submit" class="btn"
                                        style="background:#ff2143;color:#fff">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    {{-- End Video --}}
                </div>
            </div>
            {{-- End Content --}}

            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Adminwrap by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    {{-- End Content --}}
@endsection
