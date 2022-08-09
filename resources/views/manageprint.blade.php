@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="manageprint">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Managed Print Services</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Maintain any printing environment</li>
                <li><i class="bx bxs-check-circle"></i> Increase productivity & efficiency</li>
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
              <img src="img/PrintService.jpg" alt="" >
          </div>
          <h5 class="text-center mb-3">Comprehensive solution offerings</h5>
          <p class="text-center"> Managed Print Services turn your traditional printing enviroment into a comprehensive solution of offerings delivered in a consultative engagement to your company by Ease in budgeting and controls related to printing, Improve environmental sustainability, Document security, Streamline workflows and increase compliance, Increase IT productivity, Balance productivity and cost.</p>
        </div>
        <div class="col-sm-3">
            <div class="upper  mb-5">
                <img src="img/PrintService.jpg" alt="" >
            </div>
          <h5 class="text-center mb-3">End to end printing solution</h5>
          <p class="text-center"> Managed Printing Service Solution for Pull Print, Job Accounting, Rule Base Printing, and Cost Saving.</p>
    
        </div>
        <div class="col-lg-3 col-sm-3">
            <div class="upper mb-5">
                <img src="img/PrintService.jpg" alt="" >
            </div>
          <h5 class="text-center mb-3">MPS benefit</h5>
          <p class="text-center"> • Supports your IT Infrastruture effectively.</p>
          <p class="text-center"> • Ease in budgeting and controls related to printing.</p>
          <p class="text-center"> • Real Participation in the CSR Program Go Green.</p>
          <p class="text-center"> • SLA Assurance.</p>
          <p class="text-center"> • Reduce total of ownership.</p>
        </div>
        <div class="col-lg-3 col-sm-3">
            <div class="upper mb-5">
                <img src="img/PrintService.jpg" alt="" >
            </div>
          <h5 class="text-center mb-3">General workflow</h5>
          <p class="text-center"> Assessment Process -> Analysis Process -> Recommendation -> Implementation Process -> Transition Process ->Operation Process -> Rundown.</p>
    
        </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection