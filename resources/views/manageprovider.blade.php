@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="manageprovider">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Managed Service Provider</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> IT strategic business</li>
                <li><i class="bx bxs-check-circle"></i> IT Operation overtake</li>
                <li><i class="bx bxs-check-circle"></i> Prevent problem</li>
              </ul>
              </div>
          </div>
          <div class="col-lg-5 ms-auto">
              <div class="card-effect rounded border border-danger">
                  <form action="" class="row g-3 justify-content-center">
                  <div class="col-md-10 mb-2 mt-5">
                      <h5 class="fw-normal">Full name</h5>
                      <input type="text" class="form-control border rounded" placeholder="Ex: John Doe" />
                  </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">E-mail</h5>
                <input type="text" class="form-control border rounded" placeholder="example@example.com" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Subject</h5>
                <input type="text" class="form-control border rounded" placeholder="Enter Subject here" />
              </div>
              <div class="col-md-10 mb-2">
                  <h5 class="fw-normal">Message</h5>
                <textarea name="" id="" cols="30" rows="5" class="form-control border rounded" placeholder="Enter Message here"></textarea>
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
              <img src="img/Serviceprovider.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">ITSM Solution</h5>
        <p class="text-center"> Our ITSM Solution provides end to end solution for your IT  service desk operational. All the needs packed as a service, deliver to our customer based on cloud and on premise.</p>
  
      </div>
      <div class="col-sm-3">
          <div class="upper  mb-5">
              <img src="img/Serviceprovider.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">MADE</h5>
        <p class="text-center"> MADE provide and maintain by us to enhance your IT Operation in Asset Management, Monitor and Alerting, IT Automation, Report Center, Security Management.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Serviceprovider.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Data Erasure</h5>
        <p class="text-center"> Our goal is provide our customer with the right solution and the right expertise to help them implement a last line of defense in protecting and sanitizing their data from vulnerabilities. We basically fill in your leaks, any gaps in your process or in your assets where data could be left vulnerable to malicious outsiders – or insiders. Data sanitization is the consistently applied, disciplined process of reliably and completely removing all data from a read/write medium so that it can no longer be read or recovered. Data Erasure solution a software-based method of overwriting the data that aims to completely destroy all electronic data residing on a hard disk drive or other digital media.</p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection