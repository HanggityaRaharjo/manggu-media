@extends('layouts.guest')

@section('content')
    <main>
        <div class="gray-bg" style="height: 20px"></div>
        <div class="gray-bg p-0">
            <div class="m-3 row justify-content-center" style="gap:10px;background:white">
                @foreach ($kategoris as $kategori)
                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                        <a href="{{ url('by-category/' . $kategori->id) }}"
                            style="color: #ff2143;padding:5px;font-weight:bold;text-transform:uppercase;font-size:14px">{{ $kategori->nama_kategori }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Trending Area Start -->
        <div class="trending-area fix pt-25 gray-bg">
            <div class="container">
                <div class="trending-main">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="slider-active">
                                <!-- Single -->

                                @foreach ($headlines->component_article as $data)
                                    <div class="single-slider">
                                        <a href="{{ url('show/' . $data->article->id) }}">
                                            <div class="trending-top mb-30">
                                                <div class="trend-top-img" style="height:500px">
                                                    <img src="storage/article-images/{{ $data->article->gambar }}"
                                                        alt="{{ $data->article->judul }}" class="img-fluid">
                                                    <div class="trend-top-cap">
                                                        <a href="{{ url('kategori') }}">
                                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                                                data-duration="1000ms">
                                                                {{ $data->article->kategori->nama_kategori }}
                                                            </span>
                                                        </a>
                                                        <h2>
                                                            <a href="{{ url('show/' . $data->article->id) }}"
                                                                data-animation="fadeInUp" data-delay=".4s"
                                                                data-duration="1000ms">
                                                                {{ $data->article->judul }}
                                                            </a>
                                                        </h2>
                                                        {{-- PHP --}}
                                                        <?php
                                                        $arrayOfMonth = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
                                                        $arrayDate = explode('-', $data->article->tanggal);
                                                        $month_of_array_to_int = settype($arrayDate[1], 'integer') - 1;
                                                        $year = $arrayDate[0];
                                                        $month = $arrayOfMonth[$month_of_array_to_int];
                                                        $day = $arrayDate[2];
                                                        ?>
                                                        {{-- End PHP --}}
                                                        <p data-animation="fadeInUp" data-delay=".6s"
                                                            data-duration="1000ms">
                                                            by {{ $data->article->penulis }} - {{ $month }}
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
                                @foreach ($sides->component_article as $data)
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img src="{{ asset('./storage/article-images/' . $data->article->gambar) }}"
                                                    alt="{{ $data->article->judul }}"
                                                    style="object-position: center;object-fit: contain" height="235px">
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span
                                                        class="bgb">{{ $data->article->kategori->nama_kategori }}</span>
                                                    <h2><a
                                                            href="{{ url('show/ ' . $data->article->id) }}">{{ $data->article->judul }}</a>
                                                    </h2>
                                                    <?php
                                                    $arrayOfMonth = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
                                                    $arrayDate = explode('-', $data->article->tanggal);
                                                    $month_of_array_to_int = settype($arrayDate[1], 'integer') - 1;
                                                    $year1 = $arrayDate[0];
                                                    $month1 = $arrayOfMonth[$month_of_array_to_int];
                                                    $day1 = $arrayDate[2];
                                                    ?>
                                                    <p>by {{ $data->article->penulis }} - {{ $month1 }}
                                                        {{ $day1 }},
                                                        {{ $year1 }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                            </div>
                            <!-- Tab content -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- card one -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="row">

                                                <!-- Left Details Caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">

                                                        @if (!empty($news->component_article[0]))
                                                            <div class="whates-img">
                                                                <img src="{{ asset('./storage/article-images/' . $news->component_article[0]->article->gambar) }}"
                                                                    alt="{{ $news->component_article[0]->article->judul }}" />
                                                            </div>
                                                            <div class="whates-caption">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('show/' . $news->component_article[0]->article->id) }}">{{ $news->component_article[0]->article->judul }}</a>
                                                                </h4>
                                                                <span>by
                                                                    {{ $news->component_article[0]->article->penulis }}
                                                                    -
                                                                    {{ $news->component_article[0]->article->tanggal }}</span>
                                                            </div>
                                                        @else
                                                            <div class="whates-img">
                                                                <img src="{{ asset('./storage/article-images/' . $latest[0]->gambar) }}"
                                                                    alt="{{ $latest[0]->judul }}" />
                                                            </div>
                                                            <div class="whates-caption">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('show/' . $latest[0]->id) }}">{{ $latest[0]->judul }}</a>
                                                                </h4>
                                                                <span>by
                                                                    {{ $latest[0]->penulis }}
                                                                    -
                                                                    {{ $latest[0]->tanggal }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <!-- single -->
                                                        <?php $checkIndexArrayNews = 0; ?>
                                                        @if (!empty($news->component_article[0]))
                                                            @foreach ($news->component_article as $data)
                                                                @if ($checkIndexArrayNews == 0)
                                                                    <?php $checkIndexArrayNews++; ?>
                                                                @else
                                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                                        <a href="{{ url('show/' . $data->article->id) }}">
                                                                            <div class="whats-right-single mb-20">
                                                                                <div class="whats-right-img">
                                                                                    <img src="{{ asset('./storage/article-images/' . $data->article->gambar) }}"
                                                                                        alt="" width="100px" />
                                                                                </div>
                                                                                <div class="whats-right-cap">
                                                                                    <span
                                                                                        class="colorb">{{ $data->article->kategori->nama_kategori }}</span>
                                                                                    <h4>
                                                                                        {{ $data->article->judul }}
                                                                                    </h4>
                                                                                    <p>{{ $data->article->tanggal }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            @foreach ($latest as $data)
                                                                @if ($checkIndexArrayNews == 0)
                                                                    <?php $checkIndexArrayNews++; ?>
                                                                @else
                                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                                        <a href="{{ url('show/' . $data->id) }}">
                                                                            <div class="whats-right-single mb-20">
                                                                                <div class="whats-right-img">
                                                                                    <img src="{{ asset('./storage/article-images/' . $data->gambar) }}"
                                                                                        alt="" width="100px" />
                                                                                </div>
                                                                                <div class="whats-right-cap">
                                                                                    <span
                                                                                        class="colorb">{{ $data->kategori->nama_kategori }}</span>
                                                                                    <h4>
                                                                                        {{ $data->judul }}
                                                                                    </h4>
                                                                                    <p>{{ $data->tanggal }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Nav Card -->
                                </div>
                            </div>
                        </div>
                        <!-- Banner -->
                        @if (!empty($iklan))
                            <div class="banner-one mt-20 mb-30">
                                <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_2) }}" alt="" />
                            </div>
                            <div class="banner-one mt-20 mb-30">
                                <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_3) }}" alt="" />
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div>
                                <p><strong>Gersang</strong> (berisi tulisan ilmiah populer tentang berbagai persoalan atau
                                    tema-tema yang
                                    terkait dengan pendidikan tinggi)</p>
                                <p><strong>Ngampus</strong> ( berisi tulisan atau artikel bebas tentang kampus dan
                                    mahasiswa)</p>
                                <p><strong>Pakar</strong> (berisi tulisan tentang para pakar/penulis/dosen)</p>
                                <p><strong>Berita</strong> (berisi informasi tentang event-event dan kegiatan manggumedia,
                                    serta event-event
                                    yang ada kaitannya dengan mahasiswa)
                                </p>
                                <p><strong>Sastra</strong> (berisi tulisan sastra berupa puisi, cerpen, dan novel)</p>
                            </div>
                        </div>
                        <!-- Most Recent Area -->
                        <div class="most-recent-area">
                            <!-- Section Tittle -->
                            <div class="small-tittle mb-20">
                                <h4>Rekomendasi</h4>
                            </div>
                            <!-- Details -->
                            <div class="most-recent mb-40">
                                @if (!empty($recomendations->component_article))
                                    <div class="most-recent-img">
                                        <img src="{{ asset('./storage/article-images/' . $recomendations->component_article[0]->article->gambar) }}"
                                            alt="{{ $recomendations->component_article[0]->article->slug }}" />
                                        <div class="most-recent-cap">
                                            <span
                                                class="bgbeg">{{ $recomendations->component_article[0]->article->kategori->nama_kategori }}</span>
                                            <h4>
                                                <a
                                                    href="latest_news.html">{{ $recomendations->component_article[0]->article->judul }}</a>
                                            </h4>
                                            <p>{{ $recomendations->component_article[0]->article->penulis }} |
                                                {{ $recomendations->component_article[0]->article->tanggal }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <?php $checkIndexArrayRecomendations = 0; ?>
                            @foreach ($recomendations->component_article as $data)
                                @if ($checkIndexArrayRecomendations === 0)
                                    <?php $checkIndexArrayRecomendations++; ?>
                                @else
                                    <!-- Single -->
                                    <div class="most-recent-single">
                                        <div class="most-recent-images">
                                            <img src="{{ asset('./storage/article-images/' . $data->article->gambar) }}"
                                                alt="{{ $data->article->slug }}" width="100px" />
                                        </div>
                                        <div class="most-recent-capt">
                                            <h4>
                                                <a
                                                    href="{{ url('show/' . $data->article->id) }}">{{ $data->article->judul }}</a>
                                            </h4>
                                            <p>{{ $recomendations->component_article[0]->article->penulis }} |
                                                {{ $data->article->tanggal }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                                @if (!empty($iklan))
                                    <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_4) }}" alt="" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>RAGAM</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            @foreach ($slider->component_article as $data)
                                                <!-- Single -->
                                                <div class="weekly2-single">
                                                    <div class="weekly2-img">
                                                        <img src="{{ asset('./storage/article-images/' . $data->article->gambar) }}"
                                                            alt="{{ $data->article->slug }}"
                                                            style="object-position: center;object-fit: contain"
                                                            height="145px">
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        <h4>
                                                            <a href="{{ url('show/' . $data->article->id) }}">
                                                                {{ $data->article->judul }}
                                                            </a>
                                                        </h4>
                                                        <p>{{ $data->article->penulis }} | {{ $data->article->tanggal }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                    title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                    title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                    title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                    title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-12">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <iframe width="90%" height="159" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                        title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                    <div class="video-intro">
                                        <h4>Banglades News Video </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe width="90%" height="159" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                        title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                    <div class="video-intro">
                                        <h4>Banglades News Video </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe width="90%" height="159" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                        title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                    <div class="video-intro">
                                        <h4>Latest Video - 2020 </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe width="90%" height="159" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                        title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                    <div class="video-intro">
                                        <h4>Spondon News -2019 </h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe width="90%" height="159" src="https://www.youtube.com/embed/MuSp9wIzi44"
                                        title="Sorotan 1.04.25 - 1.09.25 dari Undian 2 Pemenang Beasiswa Bulan Februari & Maret 2022"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
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
                                            @foreach ($slider_two->component_article as $data)
                                                <div class="weekly3-single">
                                                    <div class="weekly3-img">
                                                        <img src="{{ asset('./storage/article-images/' . $data->article->gambar) }}"
                                                            alt="{{ $data->article->slug }}"
                                                            style="object-position: center;object-fit: contain"
                                                            height="150px">
                                                    </div>
                                                    <div class="weekly3-caption">
                                                        <h4>
                                                            <a href="{{ url('show/' . $data->article->id) }}">
                                                                {{ $data->article->judul }}
                                                            </a>
                                                        </h4>
                                                        <p>{{ $data->article->tanggal }}</p>
                                                    </div>
                                                </div>
                                            @endforeach

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
                            @if (!empty($iklan))
                                <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_5) }}" alt="" />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-last End -->
    </main>
@endsection
