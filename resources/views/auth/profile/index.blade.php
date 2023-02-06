@extends('layouts.dashboard')
@section('body')
    {{-- Content --}}
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            {{-- Breadcrumbs --}}
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Profile</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            {{-- End Breadcrumbs --}}

            {{-- Button Edit --}}
            <div class="text-right">
                <a href="{{ url('dashboard/edit') }}" class="waves-effect waves-dark text-light"
                    style="gap:5px;background:#ff2143;border:none;padding:8px 15px">
                    <span class="hide-menu">Edit Profile</span>
                </a>
            </div>
            {{-- End Button Edit --}}

            {{-- Profile --}}
            <div class="row justify-content-between">
                <div class="card col-md-4">
                    <div class="card-body">
                        <h4>{{ Auth::user()->name }}</h4>
                        <div class="rounded-circle " style="height: 200px;width:200px;overflow: hidden">
                            @if (!empty(Auth::user()->profile->photo))
                                <img src="{{ asset('./storage/user_profile/' . Auth::user()->profile->photo) }}"
                                    class="object-fit-cover border rounded img-fluid" alt="..." width="100%">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card col-md-8 py-2">
                    <div class="mb-2 d-flex align-items-center" style="gap: 10px">
                        <label class="col-md-2" for="email">Nama</label>
                        <input class="form-control input-md col-md-10" id="email" type="text"
                            value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-2 d-flex align-items-center" style="gap: 10px">
                        <label class="col-md-2" for="Email">Email</label>
                        <input class="form-control input-md col-md-10" type="text" value="{{ Auth::user()->email }}"
                            disabled>
                    </div>
                    <div class="mb-2 d-flex align-items-center" style="gap: 10px">
                        <label class="col-md-2" for="Email">Status</label>
                        <input class="form-control input-md col-md-10" type="text" value="{{ Auth::user()->role }}"
                            disabled>
                    </div>

                </div>
            </div>
            {{-- End Profile --}}

            {{-- Detail Profile --}}
            <div class="row">
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h4>Detail Profile</h4>
                        <table class="table tabel-hover" border="1" width='100%'>
                            <tbody>
                                <tr>
                                    <td>Nama :</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Status :</td>
                                    <td>{{ Auth::user()->role }}</td>
                                </tr>
                                <tr>
                                    <td>Tentang Saya :</td>
                                    @if (Auth::user()->profile !== null)
                                        <td>{{ Auth::user()->profile->description }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Pekerjaan :</td>
                                    @if (Auth::user()->profile !== null)
                                        <td>{{ Auth::user()->profile->job }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <h4>Sosial Media</h4>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    @if (Auth::user()->profile !== null)
                                        <td>{{ Auth::user()->profile->url_facebook }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    @if (Auth::user()->profile !== null)
                                        <td>{{ Auth::user()->profile->url_instagram }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    @if (Auth::user()->profile !== null)
                                        <td>{{ Auth::user()->profile->url_twitter }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- End Detail Profile --}}

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
@endsection
