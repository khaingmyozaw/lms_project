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
            <x-title-component>
                <x-slot name="mainSlot">Available</x-slot>
                <x-slot name="markTitle">Cources</x-slot>
            </x-title-component>
            <div class="mx-auto gap-4 d-flex align-items-center justify-content-between item-container">
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5" id="latest-cources">
        <div class="mx-auto container pt-5">
            <x-title-component>
                <x-slot name="mainSlot">Latest</x-slot>
                <x-slot name="markTitle">Blogs</x-slot>
            </x-title-component>
            <div class="mx-auto gap-4 d-flex align-items-center justify-content-between item-container">
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
                <div class="col-3">
                    <x-cardcomponent>
                        <x-slot name="title">Laravel Cources</x-slot>
                        <x-slot name="chapters">20</x-slot>
                        <x-slot name="lessons">110</x-slot>
                        <x-slot name="fee">40,000</x-slot>
                        <x-slot name="students">30</x-slot>
                        <x-slot name="tags">laravel</x-slot>
                    </x-cardcomponent>
                </div>
            </div>
        </div>
    </div>

    {{-- Youtube Videos --}}
    <div class="container-fluid py-5" id="youtube">
        <x-title-component>
            <x-slot name="mainSlot">Latest</x-slot>
            <x-slot name="markTitle">Youtube Video</x-slot>
            <x-slot name="subSlot">We Uploaded</x-slot>
        </x-title-component>
        <div class="mx-auto py-3 row justify-content-center">
            <div class="col-5">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0bOSDDRB2pM?si=jRJnNevKfdTzXWUF&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center" style="flex-direction: column;">
                <h2 class="text-primary h4">Title</h2>
                <p class="py-2 text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, possimus. Magni nobis inventore unde praesentium, corporis neque error similique odio.
                </p>
                <a href="#" class="text-primary fw-bold">View Our Channel &#8594;</a>
            </div>
        </div>
    </div>

    {{-- Certificate --}}
    <div class="container-fluid py-5" id="certificate">
        <div class="mx-auto py-3 row justify-content-center">
            <div class="p-3 col-5 d-flex justify-content-center" style="flex-direction: column;">
                <x-title-component>
                    <x-slot name="mainSlot">Sample</x-slot>
                    <x-slot name="markTitle">Certificate</x-slot>
                </x-title-component>
                <p class="py-2 text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, possimus. Magni nobis inventore unde praesentium, corporis neque error similique odio.
                </p>
                <a href="#" class="text-primary fw-bold">View Our Channel &#8594;</a>
            </div>
            <div class="col-5">
                <img src="{{ asset('images/certificate.webp') }}" alt="certificate" width="100%" height="400px">
            </div>
        </div>
    </div>
    <div class="container-fluid py-5" id="review">
        <x-title-component>
            <x-slot name="mainSlot">What our</x-slot>
            <x-slot name="markTitle">Students</x-slot>
            <x-slot name="subSlot">Say</x-slot>
        </x-title-component>
        <div class="mx-auto py-3 row align-items-center">
            <div class="mx-2 col-6 p-4 border border-2 border-primary rounded">
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laboriosam quia, corporis atque possimus deserunt dolores. Perspiciatis, vero perferendis.
                </p>
                <div class="pt-3 d-flex align-items-center">
                    <img src="{{ asset('images/pf-1.jpg') }}" alt="" class="rounded-pill me-2 profiles">
                    <div class="">
                        <h6>Mg Mg</h6>
                        <p class="text-muted">reviewed courses <br>
                            <span class="text-warning">
                                laravel / javascript
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mx-2 col-6 p-4 border border-2 border-primary rounded">
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laboriosam quia, corporis atque possimus deserunt dolores. Perspiciatis, vero perferendis.
                </p>
                <div class="pt-3 d-flex align-items-center">
                    <img src="{{ asset('images/pf-1.jpg') }}" alt="" class="rounded-pill me-2 profiles">
                    <div class="">
                        <h6>Mg Mg</h6>
                        <p class="text-muted">reviewed courses <br>
                            <span class="text-warning">
                                laravel / javascript
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mx-2 col-6 p-4 border border-2 border-primary rounded">
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laboriosam quia, corporis atque possimus deserunt dolores. Perspiciatis, vero perferendis.
                </p>
                <div class="pt-3 d-flex align-items-center">
                    <img src="{{ asset('images/pf-1.jpg') }}" alt="" class="rounded-pill me-2 profiles">
                    <div class="">
                        <h6>Mg Mg</h6>
                        <p class="text-muted">reviewed courses <br>
                            <span class="text-warning">
                                laravel / javascript
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mx-2 col-6 p-4 border border-2 border-primary rounded">
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laboriosam quia, corporis atque possimus deserunt dolores. Perspiciatis, vero perferendis.
                </p>
                <div class="pt-3 d-flex align-items-center">
                    <img src="{{ asset('images/pf-1.jpg') }}" alt="" class="rounded-pill me-2 profiles">
                    <div class="">
                        <h6>Mg Mg</h6>
                        <p class="text-muted">reviewed courses <br>
                            <span class="text-warning">
                                laravel / javascript
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mx-2 col-6 p-4 border border-2 border-primary rounded">
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laboriosam quia, corporis atque possimus deserunt dolores. Perspiciatis, vero perferendis.
                </p>
                <div class="pt-3 d-flex align-items-center">
                    <img src="{{ asset('images/pf-1.jpg') }}" alt="" class="rounded-pill me-2 profiles">
                    <div class="">
                        <h6>Mg Mg</h6>
                        <p class="text-muted">reviewed courses <br>
                            <span class="text-warning">
                                laravel / javascript
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection