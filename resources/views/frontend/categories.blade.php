@extends('frontend.include.app')

@section('content')

    <!-- Page Content -->
    <div class="page-content page-categories">
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h5 class="text-center"> Categories</h5>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 col-md-3 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-categories d-block" href="{{ route('ctigasapi') }}">
                            <div class="categories-image">
                                <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" alt="Gadgets Categories"
                                    class="w-100" height="217px" />
                            </div>
                            <p class="categories-text">
                                Daging Iga Sapi
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a class="component-categories d-block" href="{{ route('ctayam') }}">
                            <div class="categories-image">
                                <img src="{{ asset('frontend/images/dagingayam.jpg') }}" alt="Furniture Categories"
                                    class="w-100" height="217px" />
                            </div>
                            <p class="categories-text">
                                Daging Ayam
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a class="component-categories d-block" href="{{ route('cthas') }}">
                            <div class="categories-image">
                                <img src="{{ asset('frontend/images/daginghas2.jpg') }}" alt="Makeup Categories"
                                    class="w-100" height="217px" />
                            </div>
                            <p class="categories-text">
                                Daging has
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
     
    </div>


@endsection

@section('fixed', 'fixed-bottom')