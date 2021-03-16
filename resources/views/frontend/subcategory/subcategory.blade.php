@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
    <main>
        <div class="box-white grey-bg pt-50">
            <div class="container">
                <div class="box-white-inner">
                    <div class="row">
                        <div class="col-xl-12">
{{--                            {{ dd($category->toArray()) }}--}}
                            <!-- banner area start -->
                            <div class="banner__area pt-20" id="categories">
                                <div class="container custom-container">
                                    <div class="row" style="padding: 10px">
                                        <div class="col-xl-12">
                                            <div class="section__title-wrapper text-center mb-55">
                                                <div class="section__title mb-10">
                                                    <h2>{{ $category->name }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        @forelse( $category->subcategories as $subCategory )
                                            <a href="{{ route('frontend.products', $subCategory) }}">
                                            <div class="col-xl-5 col-lg-5" style="margin-left: 60px; margin-bottom: 20px; background-color: #f5f5f5; height: 200px">
                                                <div class="banner__item-2 banner-right p-relative mt-30 pr-15">
                                                    <div class="banner__thumb fix">
{{--                                                        <img src="assets/img/shop/banner/banner-big-1.jpg" alt="banner">--}}
                                                            <a href={{ route('frontend.products', $subCategory) }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ asset('storage/'.$subCategory->icon) }}" alt="banner"></a>
{{--                                                        @if(strpos($subcategory->icon,'100x75'))--}}
{{--                                                        @elseif(strpos($subcategory->icon,'50x75'))--}}
{{--                                                            <a href={{ route('frontend.products') }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ $subcategory->getIconPath('pmd') }}" alt="banner"></a>--}}
{{--                                                        @else--}}
{{--                                                            <a href={{ route('frontend.products') }} class="w-img"><img style="height:150px;width:150px;float:right" src="{{ $subcategory->getIconPath('emd') }}" alt="banner"></a>--}}
{{--                                                        @endif--}}
                                                    </div>
                                                    <div class="banner__content-2 banner__content-4 p-absolute transition-3">
{{--                                                        <span>Products Essentials</span>--}}
                                                        <h4><a href="{{ route('frontend.products', $subCategory) }}">{{ $subCategory->name }}</a></h4>
                                                        <a href="{{ route('frontend.products', $subCategory) }}" class="os-btn os-btn-2">View Products</a>
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
{{--                                <div class="container custom-container">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-12">--}}
{{--                                            <div class="section__title-wrapper text-center mb-55">--}}
{{--                                                <div class="section__title mb-10">--}}
{{--                                                    <h2>Trending Products</h2>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @forelse( _getRandomProducts() as $product )--}}
{{--                                            --}}{{--                                                @if($product->id == $product->subcategory->category->id)--}}
{{--                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">--}}
{{--                                                <div class="banner__item mb-30 p-relative" style="background-color:#f5f5f5">--}}
{{--                                                    <div class="banner__thumb fix">--}}
{{--                                                        @if(strpos($product->icon,'100x75'))--}}
{{--                                                            <a href={{ route('frontend.products') }} class="w-img"><img style="width:150px;height:112px;float:right" src="{{ $product->getIconPath('md') }}" alt="banner"></a>--}}
{{--                                                        @elseif(strpos($product->icon,'50x75'))--}}
{{--                                                            <a href={{ route('frontend.products') }} class="w-img"><img style="width:100px;height:150px;float:right" src="{{ $product->getIconPath('pmd') }}" alt="banner"></a>--}}
{{--                                                        @else--}}
{{--                                                            <a href={{ route('frontend.products') }} class="w-img"><img style="width:150px;height:150px;float:right" src="{{ $product->getIconPath('emd') }}" alt="banner"></a>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
{{--                                                    <div class="banner__content p-absolute transition-3">--}}
{{--                                                        <h5><a href="product-details.html">{{$product->name}}</a></h5>--}}
{{--                                                        <a href={{ route('frontend.products') }} class="link-btn">Discover now</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @empty--}}
{{--                                        @endforelse--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-20 mt-10">--}}
{{--                                <div class="col-xl-12">--}}
{{--                                    <div class="product__load-btn text-center mt-25">--}}
{{--                                        <a href={{ route('frontend.products') }} class="os-btn os-btn-3">Load More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


