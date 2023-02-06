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
                    <h3 class="text-themecolor">Subscribe</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Subscribe</li>
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
            {{-- Content --}}
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center col-md-12" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('subscribe') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="text">Add Email</label>
                                        <div class="d-flex">
                                            <input type="email" name="email" class="form-control input-sm"
                                                id="email" placeholder="example@gmail.com">
                                            <button type="submit" class="px-3"
                                                style="background: #ff2143;color:white;border:none;cursor: pointer">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($subscribes as $subscribe)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $subscribe->email }}</td>
                                            <td>
                                                <form
                                                    action="{{ url('dashboard/admin/subscribe/delete/' . $subscribe->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit"
                                                        style="background: #ff2143;color:white;border:none;cursor: pointer">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/icon/gmail-ico.svg') }}" alt="gmail-ico">
                                <div class="text-center" style="margin: 0;padding:0;width:100%">
                                    <h4 class="text-center" style="margin: 0;padding:0">Kirim pesan ke subscriber melalui
                                    </h4>
                                    <h4 class="text-center" style="margin: 0;padding:0">Google Mail</h4>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="text">subject</label>
                                    <input type="text" name="subject" class="form-control" id="subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="body">Body</label>
                                    <input type="text" name="confirm_password" class="form-control" id="body">
                                </div>
                            </div>
                        </div>
                    </div>
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
