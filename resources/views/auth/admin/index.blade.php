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
                    <h3 class="text-themecolor">Admin Panel</h3>
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

            {{-- Greetings --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Kirim pesan ke penulis</h4>
                            <p>Kirim pesan kepada penulis untuk memberitahu mereka tema apa yang sedang dibutuhkan</p>
                            <div class="form-group">
                                <form action="{{ url('dashboard/admin/note/send') }}" method="post">
                                    @csrf
                                    <textarea type="text" name="message" class="form-control" placeholder="{{ $note->message }}"></textarea>
                                    <div class="text-right">
                                        <button type="submit" class="btn"
                                            style="background:#ff2143;color:#fff">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>Buat Kategori</h5>
                            <form action="{{ url('kategori') }}" method="post">
                                @csrf
                                <div class="d-flex mb-2">
                                    <input class="form-control" type="text" name="nama_kategori" placeholder="Teknologi"
                                        id="">
                                    <div class="text-right">
                                        <button type="submit" class="btn"
                                            style="background:#ff2143;color:#fff">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <h5>Kategori Tersedia</h5>
                            <div class="row">
                                @foreach ($kategoris as $kategori)
                                    <p class="col-md-3">{{ $kategori->nama_kategori }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Greetings --}}

            <div class="row">
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Articles</h5>
                                </div>
                                {{-- <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option selected="">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="table-responsive m-t-20 no-wrap">
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col" style="text-align: center">Set Publish</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @if (count($articles) !== 0)
                                            @foreach ($articles as $article)
                                                <?php $no++; ?>
                                                <tr>
                                                    <td>{{ $article->tanggal }}</td>
                                                    <td>{{ $article->judul }}</td>
                                                    <td>
                                                        {{-- Button Modal Trigger --}}
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#ModalLong-{{ $article->id }}"
                                                            style="background: transparent;cursor:pointer">
                                                            Detail
                                                        </button>
                                                        {{-- End Button Modal Trigger --}}
                                                    </td>
                                                    <td class="d-flex justify-content-center">
                                                        <form
                                                            action="{{ url('dashboard/admin/articles/' . $article->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="text" class="d-none" name="id"
                                                                value="{{ $article->id }}">
                                                            <button class="btn" type="submit">Publish</button>
                                                        </form>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#rejected-modal-{{ $article->id }}">
                                                            Reject
                                                        </button>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center" style="background: white">
                                                <td colspan="4">Belum ada article masuk</td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                                {{-- Modal --}}
                                @foreach ($articles as $article)
                                    <div class="modal fade" id="ModalLong-{{ $article->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLongTitle">{{ $article->judul }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="background: rgb(226, 225, 225)">
                                                    <div class="d-flex justify-content-end">
                                                        <p class="btn mb-1" style="font-style: italic;">
                                                            {{ $article->tanggal }}</p>
                                                    </div>
                                                    <div class="d-flex justify-content-center mb-2">
                                                        <img src="{{ asset('./storage/article-images/' . $article->gambar) }}"
                                                            alt="{{ $article->slug }}" width="60%">
                                                    </div>
                                                    <div class="p-3" style="background: white">
                                                        <p style="font-style: italic">Penulis : {{ $article->penulis }}
                                                        </p>
                                                        <p style="font-style: italic">Judul : {{ $article->judul }}</p>
                                                        {!! $article->body !!}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- End Modal --}}


                                {{-- Pop Up Rejected --}}
                                @foreach ($articles as $article)
                                    <div class="modal fade" id="rejected-modal-{{ $article->id }}" tabindex="-1"
                                        aria-labelledby="rejected-modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="rejected-modalLabel">
                                                        {{ $article->judul }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <form
                                                            action="{{ url('dashboard/admin/articles/reject/' . $article->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <label for="tentang-saya">Keterangan Reject</label>
                                                            <textarea type="text" name="message" class="form-control" id="tentang-saya"></textarea>
                                                            <div class="text-right">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- End Pop Up Rejected --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->

            </div>
            <!-- ============================================================== -->
            <!-- End Projects of the Month -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Notification And Feeds -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Start Notification -->
                <div class="col-lg-6 col-md-12">
                    <div class="card card-body mailbox">
                        <h5 class="card-title">Notification</h5>
                        <div class="message-center ps ps--theme_default ps--active-y"
                            data-ps-id="a045fe3c-cb6e-028e-3a70-8d6ff0d7f6bd">
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                <div class="mail-contnet">
                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span>
                                    <span class="time">9:30 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-success btn-circle"><i class="fa fa-calendar-check-o"></i>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have
                                        event</span> <span class="time">9:10 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-info btn-circle"><i class="fa fa-cog"></i></div>
                                <div class="mail-contnet">
                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as
                                        you want</span> <span class="time">9:08 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Notification -->
                <!-- Start Feeds -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Feeds</h5>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4
                                    pending tasks. <span class="text-muted">Just Now</span>
                                </li>
                                <li>
                                    <div class="bg-light-success"><i class="fa fa-server"></i></div> Server #1
                                    overloaded.<span class="text-muted">2 Hours ago</span>
                                </li>
                                <li>
                                    <div class="bg-light-warning"><i class="fa fa-shopping-cart"></i></div> New
                                    order received.<span class="text-muted">31 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                    registered.<span class="text-muted">30 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version
                                    just arrived. <span class="text-muted">27 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4
                                    pending tasks. <span class="text-muted">Just Now</span>
                                </li>
                                <li>
                                    <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                    registered.<span class="text-muted">30 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version
                                    just arrived. <span class="text-muted">27 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-primary"><i class="fa fa-cog"></i></div> You have 4
                                    pending tasks. <span class="text-muted">27 May</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Feeds -->
            </div>
            <!-- ============================================================== -->
            <!-- End Notification And Feeds -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2018 Adminwrap by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    {{-- End Content --}}


    <script type="text/javascript">
        // function tes(e) {
        //     console.log(document.querySelector('#my-checkbox').value)
        // }
    </script>


@endsection
