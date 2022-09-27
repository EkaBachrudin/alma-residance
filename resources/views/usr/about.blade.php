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
                <h5 class="color-text-a">
                  <strong>Alma Residence, kawasan perumahan baru yang terletak di Kabupeten Bekasi Setu. 
                    Alma Residence hadir sebagai jawaban bagi kebutuhan masyarakat urban yang memimpikan 
                    sebuah kehidupan nyaman serta ideal. Alma Residence berlokasi di 
                    Jl. MT Haryono Kel Tamansari Kecamatan Setu Kab Bekasi, yang merupakan rute utama jalan raya kalimalang cibitung, dengan tambahan 
                    akses mendatang yang menghubungkan jalur-jalur strategis.
                    Alma Residence menawarkan sebuah kawasan hunian harga terjangkau. 
                    Berbasis konsep gaya hidup comfortable living, kawasan ini dekat dengan beragam fasilitas, 
                    mulai dari pendukung kebutuhan sehari-hari, komersial, dll.</strong>
                </h5>
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