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
                    <h3 class="text-themecolor">User Panel</h3>
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

            {{-- Card --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>User Terdaftar</h4>
                            <h2 class="text-center">{{ count($users) }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Penulis Terdaftar</h4>
                            <h2 class="text-center">{{ count($users) }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Editor Terdaftar</h4>
                            <h2 class="text-center">{{ count($users) }}</h2>
                        </div>
                    </div>
                </div>

            </div>

            {{-- End Card --}}

            {{-- Content --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">
                                                {{ $no++ }}</th>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <p>Hapus</p>
                                                <p>Edit</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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
