@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/aboutstyle.css'); }}" />
@endpush

@section('content')
    <!-- Hero -->
    <div class="hero" id="about">
      <section class="container-fluid d-flex justify-content-center mt-5 bg-light" >
        <div class="row">
          <img src="img/Logo.png" alt="" />
        </div>
      </section>
    </div>
    <!-- //Hero -->
    
    <!-- Description -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-danger"></h6>
            <h1 class="mb-3">About Us</h1>
            <p>Established in 13th July 2018, PT. Pirngadi Teberau Karya has Steadily Grown and proved trustworthy in handling many project from government and private companies and evolved to be a respectable building contractor in Indonesia. Our diverse portfolio encompasses commercial buildings, industrial buildings, educational and social related buildings and so on. In order to server our customer even better, we bring excellent combination of team work, knowledge, skill, along with the commitment to customers satisfaction. We are always passionate to increase customers satisfaction and contribute to the society by providing our core values that beyond all expectations.</p>
          </div>
        </div>
          </div>
    </section>

    </section>

    

<!-- Vimision -->
  <section class="container-fluid bg-light">
    <div class="row mb-5">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="text-danger"></h6>
        <h1>Bold Ambitions</h1>
        <p>We believe on what we see and what we do</p>
      </div>
    </div>
    <div class="container">
    <div class="row text-center g-4 d-flex justify-content-evenly rounded">
      <div class="col-lg-4 col-sm-6">
        <div class="team-member card-effect rounded">
          <img src="img/bi_eye-fill.jpg" alt="" />
          <h5 class="mb-2 mt-4 text-white">Vision</h5>
          <p class="text-white">To become the leading and reliable general contractor with the support of our people, experience and core values: integrity, teamwork and customer service oriented mindset</p>
          <br />
          <br />
          <h5 class="mb-1 mt-4 text-danger"></h5>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="team-member card-effect rounded">
          <img src="img/fluent_target-arrow-24-filled.jpg" alt="" />
          <h5 class="mb-2 mt-4 text-white">Mission</h5>
          <p class="text-white">With the broad market segment experience, wide range of client services and strength of the organization, PT Pirngadi Teberau Karya has strengthened its existence in the general contracting business in Indonesia. The company has successfully completed dozens of industrial, commercial and residential projects.</p>
        </div>
      </div>
        </div>
      </div>
      </section>
<!-- Vimission -->

    {{-- <!-- TEAM -->
    <section>
      <div class="container-fluid bg-white">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h6 class=""></h6>
            <h1 class="">Meet Our Team Members</h1>
            <p></p>
          </div>
        </div>
        <div class="row text-center g-4">
          <div class="col-lg-3 col-sm-6">
            <div class="team-member card-effects border border-danger border-3 rounded">
              <img src="img/team2.jpg" alt="" />
              <h5 class="mb-0 mt-4">Team name</h5>
              <p>Web Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member card-effects border border-danger border-3 rounded">
              <img src="img/team2.jpg" alt="" />
              <h5 class="mb-0 mt-4">Team name</h5>
              <p>Web Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member card-effects border border-danger border-3 rounded">
              <img src="img/team3.jpg" alt="" />
              <h5 class="mb-0 mt-4">Team Name</h5>
              <p>Web Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member card-effects border border-danger border-3 rounded">
              <img src="img/team4.jpg" alt="" />
              <h5 class="mb-0 mt-4">Team Name</h5>
              <p class="">Web Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TEAM --> --}}
@endsection