@extends('usr.layouts.layouts')
@section('style')

@endsection
@section('content')
<main id="main">

    
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Detail Unit 42 / 37</h1>
              <span class="color-text-a">Alma Residence 3</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="property-single nav-arrow-b">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p><strong>Geser Gambar Untuk Melihat</strong></p>
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="{{asset('assets/img/unit/dalam42-1.jpeg')}}" class="img-fluid w-80" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{asset('assets/img/unit/dalam42-2.jpeg')}}" class="img-fluid w-80" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                    <img src="{{asset('assets/img/unit/dalam42-3.jpeg')}}" class="img-fluid w-80" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                    <img src="{{asset('assets/img/unit/dalam42-4.jpeg')}}" class="img-fluid w-80" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                    <img src="{{asset('assets/img/unit/dalam42-5.jpeg')}}" class="img-fluid" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{asset('assets/img/unit/dalam42-6.jpeg')}}" class="img-fluid" alt="">
              </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-6 mb-3">
                <img src="{{asset('assets/img/unit/dalam42-1.jpeg')}}" class="img-thumbnail card" alt="">
            </div>
            <div class="col-sm-4 col-6 mb-3">
                <img src="{{asset('assets/img/unit/dalam42-2.jpeg')}}" class="img-thumbnail card" alt="">
            </div>
            <div class="col-sm-4 col-6 mb-3">
                <img src="{{asset('assets/img/unit/dalam42-3.jpeg')}}" class="img-thumbnail card" alt="">
            </div>
            <div class="col-sm-4 col-6 mb-3">
                <img src="{{asset('assets/img/unit/dalam42-4.jpeg')}}" class="img-thumbnail card" alt="">
            </div>
            <div class="col-sm-4 col-6 mb-3">
                <img src="{{asset('assets/img/unit/dalam42-5.jpeg')}}" class="img-thumbnail card" alt="">
            </div>
            <div class="col-sm-4 col-6 mb-3">
              <img src="{{asset('assets/img/unit/dalam42-6.jpeg')}}" class="img-thumbnail card" alt="">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Informasi Unit</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span>Alma Residence 3</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tipe Unit 42 / 37:</strong>
                        <span>House</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Luas Tanah:</strong>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi Unit</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar quam id dui posuere blandit.
                  </p>
                  <p class="description color-text-a no-margin">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                    malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Fasilitas</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Balkon</li>
                    <li>Dapur Outdoor</li>
                    <li>FIber Optik Internet</li>
                    <li>Kanopi</li>
                    <li>Parkir</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
@endsection

@section('javascript')
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
@endsection