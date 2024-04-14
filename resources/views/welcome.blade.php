@extends('layouts.master')
@section('title','Welcome')

@section('content')

<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ url('/images/Rooms/Room_1.jpg') }}" class="d-block w-100"
                alt="Sunset Over the City" />
            <div class="carousel-caption  d-md-block bg-trans">
                <h5>VVIP ROOM 1</h5>
                <p>Best Night, Cool Feeling, Lit like in heaven!</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ url('/images/Rooms/Room_2.jpg') }}" class="d-block w-100"
                alt="Canyon at Nigh" />
            <div class="carousel-caption  d-md-block bg-trans">
                <h5>VIP ROOM 2</h5>
                <p>Best Night, Cool Feeling, Lit like in heaven!</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ url('/images/Rooms/Room_3.jpg') }}" class="d-block w-100"
                alt="Cliff Above a Stormy Sea" />
            <div class="carousel-caption  d-md-block bg-trans">
                <h5>Family Room</h5>
                <p>Best Night, Cool Feeling, Lit like in heaven!</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

<!-- 2nd Section -->
<div class="container-fluid px-0 py-0 text-light bg-main-gd" id="contentSec">
    <div class="row">
        <div class="col-md-7 d-flex px-5 py-3 align-items-center ">
            <div class="headline">
                <h4> Name - KTV </h4>
                <h2 style="color:#ffe349;"> Name - Premium KTV for ladies and gentle men </h2>
                <p>
                    Welcome to the epitome of luxury entertainment, where every note resonates with
                    elegance and every performance is a masterpiece in its own right. Step into our
                    premium level KTV experience, where opulence meets innovation to redefine the
                    way you indulge in karaoke.
            </div>
            </p>
        </div>
        <div class="col-md-5 d-none d-md-block">
            <img src="{{ asset('/images/entrance.jpg') }}" alt="Entrance" width="100%">
        </div>
    </div>
</div>
<!-- 3rd Section -->
<div class="container">
    <div class="row py-4">
        <div class="col-12">
            <h4>Book A Room</h4>
            <p class="d-none d-md-block"> You can boook an unoccupy room for your party at any moment, anywhere!
                This is what we are unique in comparison to other.Enjoy hassle-free scheduling, secure payments,
                and instant confirmations, all designed to elevate your karaoke experience to new heights.
                Book your room today and prepare to be dazzled by the magic of
                music in unparalleled comfort and style.
            </p>
            <p class="d-block d-md-none"> You can boook an unoccupy room for your party at any moment, anywhere!
                This is what we are unique in comparison to other.
            </p>
            <button type="button" class="btn btn-primary" data-mdb-ripple-init>Book Now</button>
        </div>
    </div>
</div>
<!-- 4th Section -->
<div class="container-fluid bg-main-gd text-light">
    <div class="row justify-content-center px-5 py-5">
        <div class="col-lg-12 text-center">
            <h4>Name KTV - Premiun & Luxury Entertainment</h4>
            <p class="d-none d-md-block"style="width:70vw;margin:0 auto;font-weight:100;">Prepare to be captivated by our state-of-the-art sound systems, which deliver unparalleled audio quality, 
              ensuring that every lyric sung is heard with crystal clarity. 
              Our extensive library boasts a curated selection of songs spanning genres and languages,
               guaranteeing a repertoire to suit every musical inclination.</p>
               <p class="d-block d-md-none"style="width:70vw;margin:0 auto;font-weight:100;">Prepare to be captivated by our state-of-the-art sound systems, which deliver unparalleled audio quality, 
              ensuring that every lyric sung is heard with crystal clarity. 
              </p>
            <div class="row mt-5">
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{{asset('/images/testimonial/testy3.webp')}}" class="card-img-top card-img"
                            alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                <div class="card">
                        <img src="{{asset('/images/testimonial/testy1.jpg')}}" class="card-img-top card-img"
                            alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                <div class="card">
                        <img src="{{asset('/images/testimonial/testy2.webp')}}" class="card-img-top card-img"
                            alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 5th section --> 
<div class="container py-5">
  <div class="row">
  <div class="col-md-6 ">
    <div class="address text-start text-md-end">
    <h3>Location</h3>
    <p> No. 143 , Kyaing Kar (5), Keng Tung, Shan, Myanmar </p>
    <h3>Contact</h3>
    <p>09775452221,0977542222 </p>
    </div>
    </div>
    <div class="col-md-6 ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.186262808062!2d99.6280718759748!3d21.30365517827885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d4440719f08ea3%3A0x7ef90a7de3350b4!2sKeng%20Tung%20Airport!5e0!3m2!1sen!2smm!4v1713034098642!5m2!1sen!2smm" 
     class="map-frame" style="border:2px solid #ccc;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
@endsection