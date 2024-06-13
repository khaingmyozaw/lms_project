@extends('layouts.main')
@section('content')
    <div class="container-fluid" id="home">
        <div class="container mx-auto">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <h1>
                        Start Your Dream With LMS
                    </h1>
                    <p class="text-light my-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias esse modi at! Et voluptas vel, praesentium non iure tenetur nihil corrupti minus illo, perspiciatis assumenda eius iusto aliquam tempora libero ut aliquid nemo! Itaque nam nihil consequatur aspernatur a eligendi neque facere modi nobis. Rerum ipsam alias corrupti vero possimus!
                    </p>
                    <a href="3" class="btn bg-warning">Learn Now</a>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/home-page-img-1.png') }}" alt="LMS" class="home-img">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="totals">
        <div class="mx-auto p-3 container d-flex rounded border border-warning w-100">
            <div class="col-4 d-flex align-items-center border-end border-warning border-2p">
                <img src="{{ asset('images/assets/graduation-cap-solid.svg') }}" alt="students">
                <div>
                    <h4>200+</h4>
                    <p>Students</p>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center border-end border-warning border-2p">
                <img src="{{ asset('images/assets/file-video-solid.svg') }}" alt="videos">
                <div>
                    <h4>200+</h4>
                    <p>Lessons</p>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center">
                <img src="{{ asset('images/assets/chess-knight-solid.svg') }}" alt="blogs">
                <div>
                    <h4>100+</h4>
                    <p>Blogs & Tricks</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5" id="latest-cources">
        <div class="mx-auto container pt-5">
            <h1 class="text-center py-3">Available <span class="text-warning"> Cources</span></h1>
            <div class="mx-auto gap-4 d-flex align-items-center justify-content-between item-container">
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5" id="latest-cources">
        <div class="mx-auto container pt-5">
            <h1 class="text-center py-3">Latest <span class="text-warning"> Blogs</span></h1>
            <div class="mx-auto gap-4 d-flex align-items-center justify-content-between item-container">
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow items">
                        <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title">Laravel Cource</h2>
                            <div>
                                <span>12 Chapters</span> with <span>30 Lessons</span>
                            </div>
                            <p>
                               Fees: <span>50,000</span> MMK
                            </p>
                            <p>
                                20 Students Learned
                            </p>

                            <div>
                                tag1 tag 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection