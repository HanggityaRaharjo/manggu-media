@extends('layouts.guest')

@section('content')
    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix pt-25 gray-bg">
            <div class="container">
                <div class="trending-main">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="slider-active">
                                <!-- Single -->
                                @foreach ($trendings as $data)
                                    <div class="single-slider">
                                        <a href="{{ url('show/' . $data->id) }}">
                                            <div class="trending-top mb-30">
                                                <div class="trend-top-img" style="height:500px">
                                                    <img src="storage/article-images/{{ $data->gambar }}"
                                                        alt="{{ $data->judul }}" class="img-fluid">
                                                    <div class="trend-top-cap">
                                                        <a href="{{ url('kategori') }}">
                                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                                                data-duration="1000ms">
                                                                {{ $data->kategori->nama_kategori }}
                                                            </span>
                                                        </a>
                                                        <h2>
                                                            <a href="{{ url('show/' . $data->id) }}"
                                                                data-animation="fadeInUp" data-delay=".4s"
                                                                data-duration="1000ms">
                                                                {{ $data->judul }}
                                                            </a>
                                                        </h2>
                                                        {{-- PHP --}}
                                                        <?php
                                                        $arrayOfMonth = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
                                                        $arrayDate = explode('-', $data->tanggal);
                                                        $month_of_array_to_int = settype($arrayDate[1], 'integer') - 1;
                                                        $year = $arrayDate[0];
                                                        $month = $arrayOfMonth[$month_of_array_to_int];
                                                        $day = $arrayDate[2];
                                                        ?>
                                                        {{-- End PHP --}}
                                                        <p data-animation="fadeInUp" data-delay=".6s"
                                                            data-duration="1000ms">
                                                            by {{ $data->penulis }} - {{ $month }}
                                                            {{ $day }},
                                                            {{ $year }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                {{-- End Single --}}
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-4">
                            <!-- Trending Top -->
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img" style="height: 300px">
                                            <img src="{{ asset('./storage/article-images/' . $fashion->gambar) }}"
                                                alt="{{ $fashion->judul }}">
                                            <div class="trend-top-cap trend-top-cap2">
                                                <span class="bgb">{{ $fashion->kategori->nama_kategori }}</span>
                                                <h2><a href="{{ url('show/ ' . $fashion->id) }}">{{ $fashion->judul }}</a>
                                                </h2>
                                                <?php
                                                $arrayOfMonth = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
                                                $arrayDate = explode('-', $fashion->tanggal);
                                                $month_of_array_to_int = settype($arrayDate[1], 'integer') - 1;
                                                $year1 = $arrayDate[0];
                                                $month1 = $arrayOfMonth[$month_of_array_to_int];
                                                $day1 = $arrayDate[2];
                                                ?>
                                                <p>by {{ $fashion->penulis }} - {{ $month1 }} {{ $day1 }},
                                                    {{ $year1 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img" style="height: 200px">
                                            <img src="{{ asset('./storage/article-images/' . $ragam->gambar) }}"
                                                alt="{{ $ragam->judul }}">
                                            <div class="trend-top-cap trend-top-cap2">
                                                <span class="bgg">{{ $ragam->kategori->nama_kategori }}</span>
                                                <h2><a href="{{ url('show/ ' . $ragam->id) }}">{{ $ragam->judul }}</a>
                                                </h2>
                                                <?php
                                                $arrayOfMonth = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
                                                $arrayDate = explode('-', $ragam->tanggal);
                                                $month_of_array_to_int = settype($arrayDate[1], 'integer') - 1;
                                                $year2 = $arrayDate[0];
                                                $month2 = $arrayOfMonth[$month_of_array_to_int];
                                                $day2 = $arrayDate[2];
                                                ?>
                                                <p>by {{ $ragam->penulis }} - {{ $month2 }} {{ $day2 }},
                                                    {{ $year2 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="whats-news-wrapper">
                            <!-- Heading & Nav Button -->
                            <div class="row justify-content-between align-items-end mb-15">
                                <div class="col-xl-4">
                                    <div class="section-tittle mb-30">
                                        <h3>Terbaru</h3>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-9">
                                    <div class="properties__button">
                                        <!--Nav Button  -->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                @for ($i = 0; $i < count($kategoris); $i++)
                                                    <?php $index = 0; ?>
                                                    @if ($i == 0)
                                                        <a class="nav-item nav-link active" id="nav-home-tab"
                                                            data-toggle="tab"
                                                            href="#nav-{{ $kategoris[$i]->slug_kategori }}" role="tab"
                                                            aria-controls="nav-home"
                                                            aria-selected="true">{{ $kategoris[$i]->nama_kategori }}</a>
                                                    @else
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                            href="#nav-{{ $kategoris[$i]->slug_kategori }}" role="tab"
                                                            aria-controls="nav-profile"
                                                            aria-selected="false">{{ $kategoris[$i]->nama_kategori }}</a>
                                                    @endif
                                                @endfor
                                            </div>
                                        </nav>
                                        <!--End Nav Button  -->
                                    </div>
                                </div>
                            </div>

                            <!-- Tab content -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Card -->
                                        @for ($i = 0; $i < count($kategoris); $i++)
                                            <?php $index = 0; ?>
                                            @if ($i == 0)
                                                <div class="tab-pane fade show active"
                                                    id="nav-{{ $kategoris[$i]->slug_kategori }}" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <div class="row">
                                                        <!-- Left Details Caption -->
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="whats-news-single mb-40 mb-40">
                                                                <div class="whates-img">
                                                                    <img src="assets/img/gallery/whats_news_details1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whates-caption">
                                                                    <h4><a href="latest_news.html">Pertama</a></h4>
                                                                    <span>by Alice cloe - Jun 19, 2020</span>
                                                                    <p>Struggling to sell one multi-million dollar home
                                                                        currently on the market won’t stop actress and
                                                                        singer
                                                                        Jennifer Lopez.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Right single caption -->
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="row">
                                                                <!-- single -->
                                                                {{-- Card --}}
                                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                                    <div class="whats-right-single mb-20">
                                                                        <div class="whats-right-img">
                                                                            <img src="assets/img/gallery/whats_right_img1.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="whats-right-cap">
                                                                            <span
                                                                                class="colorb">{{ $kategoris[$i]->nama_kategori }}</span>
                                                                            <h4><a href="latest_news.html">Portrait of
                                                                                    group
                                                                                    of
                                                                                    friends ting eat. market in.</a></h4>
                                                                            <p>Jun 19, 2020</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- End Card --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="tab-pane fade show"
                                                    id="nav-{{ $kategoris[$i]->slug_kategori }}" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <div class="row">
                                                        <!-- Left Details Caption -->
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="whats-news-single mb-40 mb-40">
                                                                <div class="whates-img">
                                                                    <img src="assets/img/gallery/whats_news_details1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="whates-caption">
                                                                    <h4>
                                                                        <a href="#">

                                                                            @if (!empty($kategoris[$i]->articles[0]))
                                                                                {{ $kategoris[$i]->articles[0]->judul }}
                                                                            @endif
                                                                        </a>
                                                                    </h4>
                                                                    <span>by Alice cloe - Jun 19, 2020</span>
                                                                    <p>Struggling to sell one multi-million dollar home
                                                                        currently on the market won’t stop actress and
                                                                        singer
                                                                        Jennifer Lopez.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Right single caption -->
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="row">
                                                                <!-- single -->
                                                                {{-- Card --}}

                                                                @if (!empty($kategoris->articles))
                                                                    @foreach ($kategoris[$i]->articles as $data)
                                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                                            <div class="whats-right-single mb-20">
                                                                                <div class="whats-right-img">
                                                                                    <img src="assets/img/gallery/whats_right_img1.png"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="whats-right-cap">
                                                                                    <span class="colorb">FASHION</span>
                                                                                    <h4><a href="latest_news.html">Portrait
                                                                                            of
                                                                                            group of
                                                                                            friends ting eat. market in.</a>
                                                                                    </h4>
                                                                                    <p>Jun 19, 2020</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                                {{-- End Card --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                        {{-- End Card --}}


                                    </div>
                                    <!-- End Nav Card -->
                                </div>
                            </div>
                        </div>
                        <!-- Banner -->
                        <div class="banner-one mt-20 mb-30">
                            <img src="assets/img/gallery/body_card1.png" alt="">
                        </div>
                        <!-- Banner -->
                        <div class="banner-one mt-20">
                            <img src="assets/img/gallery/body_card1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Most Recent Area -->
                        <div class="most-recent-area">
                            <!-- Section Tittle -->
                            <div class="small-tittle mb-20">
                                <h4>Most Recent</h4>
                            </div>
                            <!-- Details -->
                            <div class="most-recent mb-40">
                                <div class="most-recent-img">
                                    <img src="assets/img/gallery/most_recent.png" alt="">
                                    <div class="most-recent-cap">
                                        <span class="bgbeg">Vogue</span>
                                        <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                                                Outfits to Wear This.</a></h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img src="assets/img/gallery/most_recent1.png" alt="">
                                </div>
                                <div class="most-recent-capt">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a>
                                    </h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img src="assets/img/gallery/most_recent2.png" alt="">
                                </div>
                                <div class="most-recent-capt">
                                    <h4><a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your
                                            BF</a></h4>
                                    <p>Jhon | 3 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area pt-50 pb-30 gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <!-- Banner -->
                        <div class="col-lg-3">
                            <div class="home-banner2 d-none d-lg-block">
                                <img src="assets/img/gallery/body_card2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Most Popular</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/gallery/weeklyNews1.png" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest
                                                            accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/gallery/weeklyNews2.png" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest
                                                            accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/gallery/weeklyNews3.png" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest
                                                            accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/gallery/weeklyNews2.png" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest
                                                            accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!--  Recent Articles start -->
        <div class="recent-articles pt-80 pb-80">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Trending News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="assets/img/gallery/tranding1.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">
                                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                        ations</a></h4>
                                            </a></h4>
                                        <P>Jun 19, 2020</P>
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>

                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="assets/img/gallery/tranding2.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                ations</a></h4>
                                        <P>Jun 19, 2020</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="assets/img/gallery/tranding1.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">
                                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                        ations</a></h4>
                                            </a></h4>
                                        <P>Jun 19, 2020</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="single-recent">
                                    <div class="what-img">
                                        <img src="assets/img/gallery/tranding2.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                ations</a></h4>
                                        <P>Jun 19, 2020</P>
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                                class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!-- Start Video Area -->
        <div class="youtube-area video-padding d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                    title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <video controls>
                                    <source src="assets/video/news1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="video-items text-center">
                                <video controls>
                                    <source src="assets/video/news3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="video-items text-center">
                                <video controls>
                                    <source src="assets/video/news1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="video-items text-center">
                                <video controls>
                                    <source src="assets/video/news3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-12">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <video controls>
                                        <source src="assets/video/news2.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="video-intro">
                                        <h4>Old Spondon News - 2020 </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <video controls>
                                        <source src="assets/video/news1.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="video-intro">
                                        <h4>Banglades News Video </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <video controls>
                                        <source src="assets/video/news3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="video-intro">
                                        <h4>Latest Video - 2020 </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <video controls>
                                        <source src="assets/video/news1.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="video-intro">
                                        <h4>Spondon News -2019 </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <video controls>
                                        <source src="assets/video/news3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="video-intro">
                                        <h4>Latest Video - 2020</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Start Video area-->
        <!--   Weekly3-News start -->
        <div class="weekly3-news-area pt-80 pb-130">
            <div class="container">
                <div class="weekly3-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly3-news-active dot-style d-flex">
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="assets/img/gallery/weekly2News1.png" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">What to Expect From the 2020 Oscar
                                                            Nomin ations</a></h4>
                                                    <p>19 Jan 2020</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="assets/img/gallery/weekly2News2.png" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">What to Expect From the 2020 Oscar
                                                            Nomin ations</a></h4>
                                                    <p>19 Jan 2020</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="assets/img/gallery/weekly2News3.png" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">What to Expect From the 2020 Oscar
                                                            Nomin ations</a></h4>
                                                    <p>19 Jan 2020</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="assets/img/gallery/weekly2News4.png" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">What to Expect From the 2020 Oscar
                                                            Nomin ations</a></h4>
                                                    <p>19 Jan 2020</p>
                                                </div>
                                            </div>
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="assets/img/gallery/weekly2News2.png" alt="">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">What to Expect From the 2020 Oscar
                                                            Nomin ations</a></h4>
                                                    <p>19 Jan 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- banner-last Start -->
        <div class="banner-area gray-bg pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="banner-one">
                            <img src="assets/img/gallery/body_card3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-last End -->
    </main>
@endsection
