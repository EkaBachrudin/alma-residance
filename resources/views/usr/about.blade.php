@extends('usr.layouts.layouts')
@section('style')

@endsection
@section('content')
<main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{asset('assets/img/alma/about.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Tentang  kami
              </h3>
              <p>Alma Residance</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{asset('assets/img/alma/tipeunit1.jpg')}}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>Hunian berkualitas & strategis</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Siapa Kami</h3>
                </div>
                <p class="color-text-a">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                  consectetur sed, convallis
                  at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                  ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                </p>
                <p class="color-text-a">
                  Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                  Mauris blandit aliquet
                  elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                  convallis at tellus.
                </p>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero incidunt mollitia sapiente, possimus amet pariatur! Fugiat sunt aspernatur, accusamus animi atque dolorum nesciunt soluta dolor eos asperiores reprehenderit ratione quo.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim, molestias tenetur cumque iste quos voluptatibus esse dignissimos exercitationem quia perspiciatis aspernatur? Suscipit voluptates optio atque animi? Officia, tenetur saepe!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('javascript')
  
@endsection