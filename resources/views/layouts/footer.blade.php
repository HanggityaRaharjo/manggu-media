<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-tittle">
                                    <h4>Manggu Media</h4>
                                    <p style="color: white">
                                        Subscribe ke email untuk mendapatkan informasi dan penawaran terbaru
                                    </p>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        @if (Session::get('success'))
                                            <div class="alert alert-success text-center" role="alert">
                                                Sukses terkirim
                                            </div>
                                        @endif
                                        <div class="info1 m-0">
                                            <div style="margin:0;padding:0">
                                                <form action="{{ url('subscribe') }}" method="post">
                                                    @csrf
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="example@gmail.com" style="margin: 0;width:100%"
                                                        required>
                                                    <button class="btn" type="submit"
                                                        style="padding:10px 10px;margin:0;transform:translateY(-3px)">Subscribe</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Kontak</h4>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <p style="color: white">0822-1413-6659</p>
                            </div>
                            <div class="whats-right-single mb-20">
                                <p style="color: white">manggumedia@gmail.com</p>
                            </div>
                            <div class="whats-right-single mb-20">
                                <p style="color: white">Jl. Kav. Damri II No.9, Cipadung Kidul, Kec. Panyileukan, Kota
                                    Bandung, Jawa Barat
                                    40614</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                @if (!empty($iklan))
                                    <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_6) }}" alt="" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Manggu Media 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
