@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white">Pirngadi Teberau Karya</h1>

            <h3 class="text-white my-3">Delivering Impact Throughout our Product & Services.</h3>

            <a href="#" class="btn me-2 btn-danger rounded">Contact Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- //HERO -->

    <!-- Aboutus -->
    <section class="row mt-5 w-100 py-0 bg-light" id="aboutushome">
      <div class="col-lg-6 col-img"></div>
      <div class="col-lg-6 py-5">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
              <h6 class="text-danger">WHY TO CHOOSE US</h6>
              <h1>Best solution for your business</h1>
              <p>
                With the broad market segment experience, wide range of client services and strength of the organization, PT Pirngadi Teberau Karya has strengthened its existence in the general contracting business in Indonesia. The company
                has successfully completed dozens of industrial, commercial and residential projects.
              </p>
            </div>
            <div class="column text-end mt-5">
              <a href="#" class="btn me-2 btn-danger rounded">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FEATURES -->

    <!-- SERVICES -->
    <section id="serviceshome">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-danger">SERIVCES</h6>
            <h1>IT Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect1 bounceInUp">
              <div class="iconbox mx-auto">
                <i class="bx bxs-check-shield"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Cloud Service</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect2">
              <div class="iconbox mx-auto">
                <i class="bx bxs-comment-detail"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Big Data</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect3">
              <div class="iconbox mx-auto">
                <i class="bx bxs-cog"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Security</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect4">
              <div class="iconbox mx-auto">
                <i class="bx bxs-heart"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Hybrid IT Infrastructure</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect5">
              <div class="iconbox mx-auto">
                <i class="bx bxs-rocket"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Business App Dev</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect6">
              <div class="iconbox mx-auto">
                <i class="bx bxs-doughnut-chart"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Digital Workspace</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect7">
              <div class="iconbox mx-auto">
                <i class="bx bxs-rocket"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Consulting Service</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="service card-effect8">
              <div class="iconbox mx-auto">
                <i class="bx bxs-rocket"></i>
              </div>
              <h5 class="mt-4 mb-2 text-center text-white">Manage Service</h5>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores perferendis</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SERVICES -->

    <!-- PRODUCTS -->
    <section id="Productshome">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-danger">PRODUCTS</h6>
            <h1>What are you looking for ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Contactors</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Starters</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Parts</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Isolation Switchers</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Equipement</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="project">
              <img src="img/conductors.jpg" alt="" />
              <div class="overlay">
                <div>
                  <h4 class="text-white">Control Power</h4>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PROJECTS -->

    
    <!-- Partnership -->
    <section id="partnershiphome" class="bg-danger">
      <div class="container align-items-center">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-white">PARTNERSHIP</h6>
            <h1 class="text-white">Company that Work Together with Us</h1>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-mx-auto">
            <div class="blog-post card-effect">
              <img src="img/partnership2.jpg" alt="" />
            </div>
          </div>
          </div>
          <div class="col-mx-4">
            <div class="blog-post card-effect">
              <img src="img/partnership1.jpg" alt="" />
             
            </div>
          </div>
          <div class="col-mx-4">
            <div class="blog-post card-effect">
              <img src="img/partnership3.jpg" alt="" />
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Partnership -->

    <!-- CONTACT -->
    <section id="contacthome">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h6 class="text-danger">CONTACT</h6>
            <h1>Get In Touch</h1>
            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
          </div>
        </div>

        <form action="" class="row g-3 justify-content-center">
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Full Name" />
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Enter E-mail" />
          </div>
          <div class="col-md-10">
            <input type="text" class="form-control" placeholder="Enter Subject" />
          </div>
          <div class="col-md-10">
            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Enter Message"></textarea>
          </div>
          <div class="col-md-10 d-grid">
            <button class="btn btn-danger">Contact</button>
          </div>
        </form>
      </div>
    </section>
    <!-- End CONTACT -->
@endsection