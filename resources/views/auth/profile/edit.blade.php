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
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/profile') }}">Profile</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            {{-- End Breadcrumbs --}}

            <div class="card">
                <div class="card-body">

                    {{-- Form --}}
                    <form action="{{ url('dashboard/update/' . Auth::user()->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="name" class="form-control" id="nama"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirmpassword">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tentang-saya">Tentang Saya</label>
                            <textarea type="text" name="description" class="form-control" id="tentang-saya"
                                placeholder="{{ $data->description }}"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="url_facebook" placeholder="url/link facebook"
                                    class="form-control" id="facebook" value='{{ $data->url_facebook }}'>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="url_instagram" placeholder="url/link instagram"
                                    class="form-control" id="instagram" value="{{ $data->url_instagram }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="url_twitter" placeholder="url/link twitter" class="form-control"
                                    id="twitter" value="{{ $data->url_twitter }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">Pekerjaan</label>

                                <select id="inputState" name="job" class="form-control">
                                    @if (empty($data->job))
                                        <option selected disabled>Pilih Pekerjaan</option>
                                    @else
                                        <option disabled>Pilih Pekerjaan</option>
                                    @endif
                                    @if ($data->job == 'sma/smk')
                                        <option selected value="sma/smk">SMA/SMK</option>
                                    @else
                                        <option value="sma/smk">SMA/SMK</option>
                                    @endif
                                    @if ($data->job == 'mahasiswa')
                                        <option selected value="mahasiswa">Mahasiswa</option>
                                    @else
                                        <option selected value="mahasiswa">Mahasiswa</option>
                                    @endif
                                    @if ($data->job == 'pns')
                                        <option selected value="pns">Pegawai Negeri Sipil</option>
                                    @else
                                        <option value="pns">Pegawai Negeri Sipil</option>
                                    @endif
                                    @if ($data->job == 'swasta')
                                        <option selected value="swasta">Wiraswasta</option>
                                    @else
                                        <option value="swasta">Wiraswasta</option>
                                    @endif
                                    @if ($data->job == 'freelance')
                                        <option selected value="freelance">Pekera Lepas/Freelance</option>
                                    @else
                                        <option value="freelance">Pekera Lepas/Freelance</option>
                                    @endif
                                    @if ($data->job == 'belum bekerja')
                                        <option selected value="belum bekerja">Belum Bekerja</option>
                                    @else
                                        <option value="belum bekerja">Belum Bekerja</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group col-md-4 p-0">
                                <label for="inputState">Foto Diri</label>
                                <input name="photo" type="file"
                                    style="background: #e6e6e6;padding:5px;border-radius:5px">
                            </div>

                        </div>

                        <fieldset class="form-group row">
                            <div class="col-sm-10">
                                <div class="form-check">

                                    @if ($data->gender == 'perempuan')
                                        <input class="form-check-input" type="radio" name="gender" id="gender1"
                                            value="perempuan" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="gender" id="gender1"
                                            value="perempuan">
                                    @endif
                                    <label class="form-check-label" for="gender1">
                                        Perempuan
                                    </label>
                                    @if ($data->gender == 'laki-laki')
                                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                                            value="laki-laki" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                                            value="laki-laki">
                                    @endif
                                    <label class="form-check-label" for="gender2">
                                        Laki - Laki
                                    </label>

                                </div>
                            </div>
                        </fieldset>


                        <button type="submit" class="btn"
                            style="background:#ff2143;padding:8px 15px;color:#fff">Save</button>
                    </form>
                    {{-- End Form --}}
                </div>
            </div>


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
