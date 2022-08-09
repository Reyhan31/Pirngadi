@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="manageappndev">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Application and Developement Services</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Identify efficiency</li>
                <li><i class="bx bxs-check-circle"></i> Enhance app performance</li>
                <li><i class="bx bxs-check-circle"></i> Support & maintanance</li>
              </ul>
              </div>
          </div>
          <div class="col-lg-5 ms-auto">
              <div class="card-effect rounded border border-danger">
                  <form action="/send-mail-contact" method="POST" class="row g-3 justify-content-center">
              @csrf
              <div class="col-md-10 mb-2 mt-5">
                  <h5 class="fw-normal">Full name</h5>
                  <input type="text" name="fullName" class="form-control border rounded" placeholder="Ex: John Doe" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">E-mail</h5>
                <input type="text" name="email" class="form-control border rounded" placeholder="example@example.com" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Subject</h5>
                <input type="text" name="subject" class="form-control border rounded" placeholder="Enter Subject here" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Message</h5>
                <textarea name="message" id="" cols="30" rows="5" class="form-control border rounded" placeholder="Enter Message here"></textarea>
              </div>
              <div class="col-md-10 mb-5 d-grid">
                <button class="btn btn-danger rounded">Contact</button>
              </div>
            </form>
          </div>
          </div>
      </div>
  </div>
  </div>
        </div>
      </div>
      <!-- //HERO -->
  
        <!-- Features -->
        <section class="container-fluid">
            <div class="hdr text-center mb-5">
                <h1>Features</h1>
            </div>
            
  <div class="d-flex justify-content-evenly row">
  
      <div class="col-sm-3">
          <div class="upper mb-5">
              <img src="img/Appdevservice.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Support & improve</h5>
        <p class="text-center"> Companies find it difficult to focus on both application support and application maintenance. With the Application and Development Services from MII, companies can find the right partner to collaborate. We can give you Application Support team while you focus on Application Maintenance or we can give you Application Maintenance team while you focus on Application Support. We can give you both also with the consistent daily Application Support and consultation for the Application Maintenance.</p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection