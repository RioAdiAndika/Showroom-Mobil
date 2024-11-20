@extends('layouts.home')

@section('title')
    Home | Auto Garage 77
@endsection

@section('content')
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="mx-auto input-group w-75 d-flex">
                        <input type="search" class="p-3 form-control" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="py-5 mb-5 container-fluid hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 --bs-black">[Cuma Sampai 31 Juli]</h4>
                    <h1 class="mb-2 display-5 text-primary">Diskon Hingga 10 Juta</h1>
                    <h1 class="mb-5 display-5 --bs-black">Saat Beli Mobil!</h1>
                    <div class="mx-auto position-relative">
                        <input class="px-4 py-3 border-2 form-control border-secondary w-75 rounded-pill" type="char" placeholder="Cari">
                        <button type="submit"
                            class="px-4 py-3 text-white border-2 btn btn-primary border-secondary position-absolute rounded-pill h-100"
                            style="top: 0; right: 25%;">Cari Sekarang</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="rounded carousel-item active">
                                <img src="img/pajero.jpg" class="rounded img-fluid w-100 h-100" alt="First slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">SUV</a>
                            </div>
                            <div class="rounded carousel-item">
                                <img src="img/avanza.jpg" class="rounded img-fluid w-100 h-100" alt="Second slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">MPV</a>
                            </div>
                            <div class="rounded carousel-item">
                                <img src="img/city.jpg" class="rounded img-fluid w-100 h-100" alt="Third slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">Hatchback</a>
                            </div>
                            <div class="rounded carousel-item">
                                <img src="img/civic.jpg" class="rounded img-fluid w-100 h-100" alt="Fourth slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">Sport</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="py-5 container-fluid featurs">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-car-side fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Free Shipping</h5>
                            <p class="mb-0">Free on order over $300</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-user-shield fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Security Payment</h5>
                            <p class="mb-0">100% security payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-exchange-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>30 Day Return</h5>
                            <p class="mb-0">30 day money guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fa fa-phone-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>24/7 Support</h5>
                            <p class="mb-0">Support every time fast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div class="py-5 container-fluid fruite">
        <div class="container py-5">
            <div class="text-center tab-class">
                <div class="row g-4">
                    <div class="mb-0 ">
                        <h1>Layanan Terbaik untuk Kepuasan Anda !</h1>
                    </div>

                </div>
                <div class="tab-content">
                    <div id="tab-1" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($products as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <a href="{{ route('shop-detail', $product->id) }}">
                                                <div class="rounded position-relative car-item">
                                                    <div class="car-img">
                                                        <img src="{{ Storage::url($product->photos) }}"
                                                            class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="px-3 py-1 text-white rounded bg-secondary position-absolute"
                                                        style="top: 10px; left: 10px;">{{ $product->category->name }}</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>{{ $product->name }}</h4>
                                                        <p style="color: #747d88 !important">
                                                            {{ $product->thumb_description }}
                                                        </p>
                                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                                            <a href="{{ route('shop-detail', $product->id) }}"
                                                                class="px-3 border btn border-secondary rounded-pill text-primary">
                                                                Detail
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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
    <!-- Fruits Shop End-->


    <!-- Featurs Start -->
    <div class="py-5 container-fluid service">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-secondary border-secondary">
                            <img src="img/pilihanmobil.jpg" class="img-fluid rounded-top w-100 h-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-primary">
                                    <h5 class="text-white">Banyak</h5>
                                    <h3 class="mb-0">Pilihan Mobil</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-dark border-dark">
                            <img src="img/testdrive.jpeg" class="img-fluid rounded-top w-100 h-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-light">
                                    <h5 class="text-primary">Layanan</h5>
                                    <h3 class="mb-0">Test Drive</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-primary border-primary">
                            <img src="img/service.jpg" class="img-fluid rounded-top w-100 h-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-secondary">
                                    <h5 class="text-white">Pemeliharaan</h5>
                                    <h3 class="mb-0">Service</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs End -->


    <!-- Vesitable Shop Start-->
    <div class="py-5 container-fluid vesitable">
        <div class="container py-5 text-center">
            <h1 class="mb-0">Garansi dan Layanan Purna Jual Terbaik</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach ($products as $product)
                    <div class="border rounded border-primary position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ Storage::url($product->photos) }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="px-3 py-1 text-white rounded bg-primary position-absolute"
                            style="top: 10px; right: 10px;">{{ $product->category->name }}</div>
                        <div class="p-4 rounded-bottom">
                            <h4>
                                <a style="color: #45595b !important"
                                    href="{{ route('shop-detail', $product->id) }}">{{ $product->name }}</a>
                            </h4>
                            <p>{{ $product->thumb_description }}</p>
                            <div class="d-flex justify-content-center flex-lg-wrap">
                                <a href="{{ route('shop-detail', $product->id) }}"
                                    class="px-3 border btn border-secondary rounded-pill text-primary">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->


    <!-- Banner Section Start-->
    <div class="my-5 container-fluid banner bg-secondary">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="text-white display-3">Temukan Mobil Impian Anda</h1>
                        <p class="mb-4 fw-normal display-4 text-dark">di Auto Garage 77</p>
                        <p class="mb-4 text-dark">Berbagai pilihan mobil dari berbagai merek terkemuka menanti Anda di sini.</p>
                        <a href="#"
                            class="px-5 py-3 border-2 border-white banner-btn btn rounded-pill text-dark">Beli</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/bannerinnova.png" class="rounded img-fluid w-100" alt="">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded-circle position-absolute"
                            style="width: 140px; height: 140px; top: 0; left: 0;">
                            <!-- <h1 style="font-size: 50px;">100%</h1> -->
                            <div class="d-flex flex-column">
                                <span class="mb-0 h2 text-center">100%</span>
                                <span class="mb-0 h4 text-muted text-center">Garansi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    <div class="py-5 container-fluid">
        <div class="container py-5">
            <div class="mx-auto mb-5 text-center" style="max-width: 700px;">
                <h1 class="display-4">Produk Terbaik</h1>
                <p>Dapatkan mobil berkualitas dengan penawaran harga terbaik hanya di Auto Garage 77 garansi dan layanan purna jual terbaik untuk setiap pembelian mobil.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/innovalogo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Toyota Innova 2.4 G AT 2019 Hitam</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/avanzalogo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Toyota Avanza 1.5 G AT 2022 Abu-abu</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/pajerologo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Mitsubishi Pajero Sport 2.4 Dakar 4X2 Manual 2019 Hitam</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/briologo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Honda Brio RS AT 2018 Merah</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/jazzlogo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Honda Jazz RS AT 2018 Silver</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/citylogo.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Honda City Hatchback RS AT 2022 Merah</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/hrv.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Honda HRV 1.8 Prestige AT 2018 Putih</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/xpander.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Mitsubishi Xpander Ultimate AT 2019 Putih</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/civic.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Civic Type R 2.0 MT 2024 Abu-abu</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/rocky.jpg" class="rounded img-fluid" alt="">
                        <div class="py-2">
                            <a href="#" class="h5">Daihatsu Rocky 1.0T R AT 2021 Hitam</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">3.12 $</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->


    <!-- Fact Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="p-5 rounded bg-light">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>satisfied customers</h4>
                            <h1>2345</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality of service</h4>
                            <h1>98%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="p-5 bg-white rounded counter">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- Tastimonial Start -->
    <div class="py-5 container-fluid testimonial">
        <div class="container py-5">
            <div class="text-center testimonial-header">
                <h4 class="text-primary">Auto Garage 77</h4>
                <h1 class="mb-5 display-5 text-dark">Apa yang pelanggan AutoGarage77 katakan?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"Saya mendapatkan mobil bekas di Auto Garage 77 dengan kondisi yang sangat baik dan harga yang terjangkau.
                                Sangat merekomendasikan showroom ini kepada teman-teman dan keluarga!."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/profil1.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="pb-3 m-0">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"Fasilitas test drive di Auto Garage 77 sangat memuaskan.
                                Saya bisa mencoba beberapa mobil sebelum membuat keputusan. Ini benar-benar membantu saya memilih mobil yang tepat.""
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/profil2.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="pb-3 m-0">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"Saya khawatir dengan proses pembiayaan, tapi tim di Auto Garage 77 membuatnya sangat mudah dan tanpa hambatan.
                                Mereka menawarkan banyak opsi yang sesuai dengan kebutuhan saya.""
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/profil3.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="pb-3 m-0">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->
@endsection
