@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<main>
    <div class="box-white grey-bg pt-50">
        <div class="container">
            <div class="box-white-inner">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- slider area start -->
                        <section class="slider__area slider__area-4 p-relative">
                            <div class="slider-active">
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class=" d-sm-none d-md-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 70px" data-animation="fadeInUp" data-delay=".2s"> Hair Solution<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">ARGAN OIL CONDITIONER</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">It is packed with Organicals AHA Complex that improves the penetration of the cationic polymers and other ingredients while giving your hair the botanical benefits it greatly desires.  </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="{{ asset('frontend/assets/img/conditioner4oz.png')}}" style="height: 450px" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-sm-none d-md-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 20px" data-animation="fadeInUp" data-delay=".2s">Men's Collection<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">GROOMING SHAVING CREAM</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">It’s a shaving cream designed to nurture the skin, while still providing a good shave, but a much more comfortable shave, leaving the skin soft, smooth, and protected. </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="{{ asset('frontend/assets/img/grooming_shaving_cream_8_oz.png') }}" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-sm-none d-lg-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 50px" data-animation="fadeInUp" data-delay=".2s">Skincare<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">OXYGENATION PLUS CLEANSER</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">This cleanser is a natural face wash that you’ll reach for time and time again. Formulated to address the issues of combination oily skin (T-Zone) and congested skin with the best that nature has to offer.  </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="{{ asset('frontend/assets/img/3D.png')}}" style="height: 400px" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- slider area end -->

                            <!-- banner area start -->
                            <div class="banner__area pt-20" id="categories">
                                <div class="container custom-container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="section__title-wrapper text-center mb-55">
                                                <div class="section__title mb-10">
                                                    <h2>Trending Categories</h2>
                                                </div>
                                            </div>
                                        </div>
                                        @forelse( _getAllCategories() as $category )
                                            <a href="{{ route('frontend.subcategories', $category) }}">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="banner__item mb-30 p-relative" style="background-color:#f5f5f5">
                                                    <div class="banner__thumb fix">
                                                        @if(strpos($category->icon,'100x75'))
                                                            <a href={{ route('frontend.subcategories', $category) }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ $category->getIconPath('md') }}" alt="banner"></a>
                                                        @elseif(strpos($category->icon,'50x75'))
                                                            <a href={{ route('frontend.subcategories', $category) }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ $category->getIconPath('pmd') }}" alt="banner"></a>
                                                        @else
                                                            <a href={{ route('frontend.subcategories', $category) }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ $category->getIconPath('emd') }}" alt="banner"></a>
                                                        @endif
                                                    </div>
                                                    <div class="banner__content p-absolute transition-3">
                                                        <h5><a href={{ route('frontend.subcategories', $category) }}>{{ $category->name }}</a></h5>
                                                        <a href={{ route('frontend.subcategories', $category) }} class="link-btn">View Sub Categories</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <!-- banner area end -->

{{--                            <div class="banner__area pt-20" id="products">--}}
{{--                                    <div class="container custom-container">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-xl-12">--}}
{{--                                                <div class="section__title-wrapper text-center mb-55">--}}
{{--                                                    <div class="section__title mb-10">--}}
{{--                                                        <h2>Trending Products</h2>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            @forelse( _getRandomProducts() as $product )--}}
{{--                                                @if($product->id == $product->subcategory->category->id)--}}
{{--                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">--}}
{{--                                                    <div class="banner__item mb-30 p-relative" style="background-color:#f5f5f5">--}}
{{--                                                        <div class="banner__thumb fix">--}}
{{--                                                            @if(strpos($product->icon,'100x75'))--}}
{{--                                                                <a href={{ route('frontend.products') }} class="w-img"><img style="width:150px;height:112px;float:right" src="{{ $product->getIconPath('md') }}" alt="banner"></a>--}}
{{--                                                            @elseif(strpos($product->icon,'50x75'))--}}
{{--                                                                <a href={{ route('frontend.products') }} class="w-img"><img style="width:100px;height:150px;float:right" src="{{ $product->getIconPath('pmd') }}" alt="banner"></a>--}}
{{--                                                            @else--}}
{{--                                                                <a href={{ route('frontend.products') }} class="w-img"><img style="width:150px;height:150px;float:right" src="{{ $product->getIconPath('emd') }}" alt="banner"></a>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                        <div class="banner__content p-absolute transition-3">--}}
{{--                                                            <h5><a href="#">{{$product->name}}</a></h5>--}}
{{--                                                            <a href={{ route('frontend.products') }} class="link-btn">Discover now</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @empty--}}
{{--                                            @endforelse--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                        <div class="row mb-20 mt-10">--}}
{{--                            <div class="col-xl-12">--}}
{{--                                <div class="product__load-btn text-center mt-25">--}}
{{--                                    <a href={{ route('frontend.products') }} class="os-btn os-btn-3">Load More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.categorySlickSlider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
@endsection


