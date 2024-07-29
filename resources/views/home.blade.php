@extends('layouts.main')
@section('title','home')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Focused On Modern Architecture</h4>
            <h1 class="display-5 mb-4">Featured Products</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">white dinner jacket</h3>
                        <span class="text-primary">Price : $200</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-2.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">linen blazer</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-3.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Sport Coat</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-4.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Tuxedo</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-5.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">white dinner jacket</h3>
                        <span class="text-primary">Price : $200</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-6.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">linen blazer</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-7.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Sport Coat</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                    <a href="{{ route('luga.collection') }}"><img class="img-fluid" src="{{ asset('img/team-8.jpg') }}" alt=""></a>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Tuxedo</h3>
                        <span class="text-primary">Price : $150</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection