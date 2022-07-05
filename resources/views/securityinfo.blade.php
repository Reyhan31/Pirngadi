@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/securityservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="securityinformation">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Information Security</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Security information and event management (SIEM)</li>
                <li><i class="bx bxs-check-circle"></i> Effective performance</li>
                <li><i class="bx bxs-check-circle"></i> Meaningful insights & perspective</li>
                <li><i class="bx bxs-check-circle"></i> Demonstrate adherence</li>
                <li><i class="bx bxs-check-circle"></i> Gain visibilty into security control performance</li>
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
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">SIEM</h5>
        <p class="text-center"> Solution management, monitoring, and maintenance by experienced security analysts in our Security Operations Center.</p>
  
      </div>
      <div class="col-sm-3">
          <div class="upper  mb-5">
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">24/7 performance and availability event monitoring</h5>
        <p class="text-center"> Providing constant vigilance for your perimeter security.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Effective implementation & intrusion</h5>
        <p class="text-center"> effective implementation of software updates, patches, systems configuration, and also rapidly intrusion detection, escalation, and response.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">industry best practices</h5>
        <p class="text-center"> Ensure a high level of network access and information availability, integrity, and privacy.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3"> Security portal</h5>
        <p class="text-center">  Provides full visibility of your security and compliance posture, giving you the intelligence and analytics you need to easily understand your risks, demonstrate compliance, and make better security decisions.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 61.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Flexible threat analysis options</h5>
        <p class="text-center"> scheduled analysis or the option to right size the solution by including all or a subset of the logs forwarded to the Security Operations Centre for 24/7 real-time threat managementaccess to highly trained security experts who act as an extension of your in-house IT team, providing analysis, configuration, content development and maintenance, and use case development.</p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection