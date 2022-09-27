@extends('usr.layouts.layouts')
@section('style')

@endsection
@section('content')
<div class="intro intro-carousel swiper position-relative">
<div class="swiper-wrapper">
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{asset('assets/img/alma/heroalma.jpg')}})">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <h1 class="intro-title mb-4">
                    Welcome To Alma <span class="color-b">Residence</span>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<main id="main">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card">
          <div class="card-body shadow">
            <h1 ><img src="{{asset('assets/img/alma/almalogo.png')}}" width="50"><strong> Alma Residence</strong></h1 >
            <br>
              <p><strong>Hunian Elegan Strategis & Bebas Banjir</strong></p>
              <p>Siap Huni Tanpa Renovasi</p>
              <p>Booking Fee </p> <h3 class="text-danger shake"><strong>Rp. 3.000.000</strong></h3>
              <div class="mt-3">
                  <ul>
                    <li> ✅ Free DP (0%)</li>
                    <li> ✅ Free Biaya Proses KPR</li>
                    <li> ✅ Free Biaya Notaris</li>
                    <li> ✅ Free Mesin Air</li>
                    <li> ✅ Free Biaya br Surat - Surat :
                      <ul class="my-1">
                        <li> BPHTB</li>
                        <li> APRAISAL</li>
                        <li> NOTARIS</li>
                        <li> ASURANSI</li>
                      </ul>
                    </li>
                    <li> ✅ Free Potongan Angsuran 500RB / Bln Selama 2 Thn</li>
                  </ul>
              </div>
              <div>
                <ul>
                  <li> ✅ 3menit ke pintu tol jorr2 Cibitung-Cimanggis</li>
                  <li> ✅ 2menit ke SMP/SMK NEGERI</li>
                  <li> ✅ 5menit ke pasar swalayan</li>
                  <li> ✅ 5menit ke rumah sakit Kartika Husada</li>
                  <li> ✅ 15menit ke kawasan MM2100</li>
                  <li> ✅ 20menit ke Go-wet waterpark grandwisata</li>
                  <li> ✅ 20menit ke Mall metropolitan Cileungsi</li>
                </ul>
              </div>
              <a href="https://wa.me/089604122618" target="_blank"><img src="{{asset('assets/img/alma/chatyuk.png')}}" alt="Logo" style="width: 150px"></a>
              <div>
                <strong>* Unit Terbatas, silakan hubungi kami untuk informasi lebih lanjut</strong>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="card">
          <div class="card-body shadow">
            <h1><strong>Hubungi Kami</strong></h1>
            <p>Dapatkan Update Promo & Harga Terbaru</p>
            <form action="/store" method="POST">
              @csrf
              <div class="mb-4">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="tulis nama anda ..." autocomplete="off" required>
              </div>
              <div class="mb-4">
                <label class="form-label">No Whatsapp</label>
                <input type="number" name="tlp" class="form-control" placeholder="tulis wa anda ..." autocomplete="off" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="tulis email anda ..." autocomplete="off" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Pesan</label>
                <textarea name="pesan" id="" cols="30" rows="10" class="form-control" autocomplete="off" required>Hallo Alma Residence, boleh tolong kirimkan penawaran untuk Perumahan? Thanks .</textarea>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success rounded-0 btn">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 mb-1">
        <img src="{{asset('assets/img/alma/bannerhero.jpeg')}}" class="img-a img-fluid shadow">
      </div>
      <div class="col-md-4 mb-1">
        <img src="{{asset('assets/img/alma/banner2.jpeg')}}" class="img-a img-fluid shadow">
      </div>
      <div class="col-md-4 mb-1">
        <img src="{{asset('assets/img/alma/banner3.jpeg')}}" class="img-a img-fluid shadow">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <h1 class="my-5"><strong>Sarana Public</strong></h1>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fas fa-road color-b" style="font-size: 50px"></span>
        <h3>Jalan Kali Malang Cibitung</h3>
      </div>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fa fa-school color-b" style="font-size: 50px"></span>
        <h3>Sarana Pendidikan</h3>
        <p class="text-mute">Hanya 5 menit dari Alma residence</p>
      </div>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fa fa-hospital color-b" style="font-size: 50px"></span>
        <h3>Sarana Kesehatan</h3>
        <p class="text-mute">Hanya 10 menit dari Alma residence</p>
      </div>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fa fa-store color-b" style="font-size: 50px"></span>
        <h3>Pusat Perbelanjaan</h3>
        <p class="text-mute">Hanya 20 menit dari Alma residence</p>
      </div>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fa fa-building color-b" style="font-size: 50px"></span>
        <h3>kawasan Strategis</h3>
        <p class="text-mute">Hanya 20 menit dari Alma residence</p>
      </div>
      <div class="col-md-4 card p-3 shadow m-1">
        <span class="fa fa-building color-b" style="font-size: 50px"></span>
        <h3>kawasan Industri</h3>
        <ul>
          <li>MM 2100</li>
          <li>Lippo Cikarang</li>
          <li>kawasan Hyundai</li>
        </ul>
        <p class="text-mute">Hanya 20 menit dari Alma residence</p>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">

      </div>
    </div>
  </div>

  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Tipe Unit</h2>
            </div>
          </div>
        </div>
      </div>

      <div id="property-carousel" class="swiper">
        <div class="swiper-wrapper">

          <div class="carousel-item-b swiper-slide">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{asset('assets/img/alma/36.jpeg')}}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="/detail">Unit 36 / 72</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"> Rp 392.000.000</span>
                    </div>
                    <a href="/detail" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-b swiper-slide">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{asset('assets/img/alma/42.jpg')}}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="/detail42">Unit 42 / 72</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"> Rp 440.000.000</span>
                    </div>
                    <a href="/detail42" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="propery-carousel-pagination carousel-pagination"></div>

    </div>
  </section>

  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <h1 class="text-center"><strong>Video</strong></h1>
      <div class="col-md-10">
        <div class="card shadow">
          <div class="card-body">
            <video width="100%" controls>
                <source src="{{asset('assets/video/alma.mp4')}}" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <h1 class="text-center"><strong>Site Plant Alma Residence 3</strong></h1>
      <div class="col-md-6">
          <img src="{{asset('assets/img/alma/siteplant.JPG')}}" class="img-a img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h1 class="text-center"><strong>Lokasi Alma Residence 3</strong></h1>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10">
        <div class="card shadow">
          <div class="card-body ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2889125257325!2d107.03661919999999!3d-6.3566362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699185492f65d3%3A0x5e306f292969f2b3!2sALMA%20RESIDENCE%20TIGA!5e0!3m2!1sid!2sid!4v1664255820551!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection

@section('javascript')
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
@endsection