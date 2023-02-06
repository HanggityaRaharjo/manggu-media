@extends('layouts.guest')

@section('content')
    <main>
        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right">
                            <div class="about-img">

                                <img src="{{ asset('storage/article-images/' . $data->gambar) }}" alt="{{ $data->judul }}">
                            </div>
                            <div class="heading-news mb-30 pt-30" style="background: white;padding:20px;border-radius:10px;">
                                <h3>{{ $data->judul }}</h3>
                            </div>
                            <style>
                                #content-article a {
                                    color: blue;
                                }
                            </style>
                            {{-- Body --}}
                            <div id="content-article"
                                style="background: white;padding:20px;border-radius:10px;text-align:justify">
                                <strong>{{ $data->penulis }}</strong>{!! $data->body !!}
                            </div>
                            {{-- End Body --}}
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('./assets/img/news/icon-ins.png') }}"alt="icon-ins">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('./assets/img/news/icon-fb.png') }}" alt="icon-fb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('./assets/img/news/icon-tw.png') }}" alt="icon-tw">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('./assets/img/news/icon-yo.png') }}" alt="icon-yo">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        {{-- Komentar --}}
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-contact contact_form" action="{{ url('comments/' . $data->id) }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="5"
                                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit"
                                            class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- End Komentar --}}
                        <h4>Komentar</h4>
                        {{-- Kolom Komentar --}}
                        @if (count($data->comments) !== 0)
                            @foreach ($data->comments as $comment)
                                <div class="card mb-2" style="padding:10px 10px">
                                    <p>{{ $comment->komentar }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="card mb-2 text-center" style="padding:10px 10px">
                                <p>Belum ada komentar</p>
                            </div>
                        @endif

                        {{-- End Kolom Komentar --}}


                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#">
                                            <img src="{{ asset('./assets/img/news/icon-fb.png') }}" alt="icon-fb">
                                        </a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('./assets/img/news/icon-tw.png') }}"
                                                alt="icon-tw">
                                        </a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('./assets/img/news/icon-ins.png') }}"
                                                alt="icon-ins">
                                        </a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('./assets/img/news/icon-yo.png') }}"
                                                alt="icon-yo">
                                        </a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{ asset('./assets/img/news/news_card.jpg') }}" alt="news_card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>
@endsection
