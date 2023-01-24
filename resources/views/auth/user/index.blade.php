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
                    <h3 class="text-themecolor">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Projects of the Month -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Articles</h5>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option selected="">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive m-t-20 no-wrap">
                                <table class="table vm no-th-brd pro-of-month">
                                    <thead>
                                        <tr>
                                            <th align="center" colspan="2">Judul</th>
                                            <th align="right">Status</th>
                                            <th align="center">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>{{ $article->judul }}</h6><small class="text-muted">Web
                                                        Designer</small>
                                                </td>
                                                @if ($article->status === 'onproccess')
                                                    <td align="center">
                                                        <p
                                                            style="background-color:rgb(182, 206, 48);color:white;width:fit-content;padding:2px 5px;border-radius:15px">
                                                            {{ $article->status }}
                                                        </p>
                                                    </td>
                                                @elseif($article->status === 'published')
                                                    <td align="center">
                                                        <p
                                                            style="background-color:rgb(32, 180, 32);color:white;width:fit-content;padding:2px 5px;border-radius:15px">
                                                            {{ $article->status }}
                                                        </p>
                                                    </td>
                                                @else
                                                    <td align="center">
                                                        <p
                                                            style="background-color:rgb(161, 56, 56);color:white;width:fit-content;padding:2px 5px;border-radius:15px">
                                                            {{ $article->status }}
                                                        </p>
                                                    </td>
                                                @endif
                                                <td>{{ $article->tanggal }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div style="border: 1px solid red;height:200px;overflow:hidden">
                            <img src="{{ asset('./storage/article-images/' . $last_article->gambar) }}" alt=""
                                style="object-fit: cover;object-position:center">
                        </div>
                        <div class="card-body">
                            <h5 class=" card-title">{{ $last_article->judul }}</h5>
                            <span class="label label-info label-rounded">{{ $last_article->kategori->nama_kategori }}</span>
                            <p class="m-b-0 m-t-20">Titudin venenatis ipsum aciat. Vestibu ullamer quam. nenatis
                                ipsum ac feugiat. Ibulum ullamcorper.</p>
                            <div class="d-flex m-t-20">
                                <a class="link" href="javascript:void(0)">Read more</a>
                                <div class="ml-auto align-self-center">
                                    <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart-o"></i></a>
                                    <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection
