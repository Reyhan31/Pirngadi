@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/securityservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="securityperimeter">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Perimeter Security</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Manage web firewall</li>
                <li><i class="bx bxs-check-circle"></i> SQL Injection</li>
                <li><i class="bx bxs-check-circle"></i> Cross site Scripting</li>
                <li><i class="bx bxs-check-circle"></i> No leakage Data</li>
                <li><i class="bx bxs-check-circle"></i> Experienced expertise</li>
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
              <img src="img/Group 59.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Cost efficiency</h5>
        <p class="text-center"> a focused, cost-effective security solution for your organisation − regardless of business size or market. Also it may help you on reducing costs associated with hiring, training, managing, and retaining high quality security engineers.</p>
  
      </div>
     
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 59.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Improved agility</h5>
        <p class="text-center"> freeing up your internal resources to focus on your core business outcomes and requirements.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 59.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Improved performance</h5>
        <p class="text-center"> streamlined web application firewall operations.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 59.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Compliance satifaction</h5>
        <p class="text-center"> satisfies Payment Card Industry Data Security Standard application security requirements.</p>
  
      </div>
  <div class="row">
  <h1 class="text-center mt-5">Service Delivered</h1>
  <div class="d-flex justify-content-evenly row mt-5">
    <h5 class="col-lg-5 fw-normal ms-lg-5">
      <p>- continuous monitoring and detection of malicious threats targeting applications, as well as, misconfigured code providing constant vigilance for your perimeter security.</p>
      <p>- analysis and response to critical threats targeting most valued applications.</p>
      <p>- effective responsiveness to availability events or issues with system performance.</p>
      <p>- tighter web application firewall policies by reviewing and integrating application scanning and testing results into the Web application firewall policy definition.</p>
      <p>- daily management with complete web application firewall solution support, including policy backup and restoration, software patches, and system configuration.</p>
    </h5>
    <h5 class="col-lg-6 fw-normal ms-lg-5">
      <p>- experienced security analysts in our Security Operations Center.</p>
      <p>- industry best practices to ensure a high level of network access and information availability, integrity, and privacy.</p>
      <p>- a security portal that provides full visibility of your security and compliance posture so you can make better security decisions.</p>
      <p>- continuous monitoring and detection of malicious threats targeting applications, as well as, misconfigured code providing constant vigilance for your perimeter security.</p>
      <p>- reduced capital expenses as our flexible financials provide the ability to consume the service as an operational expense, eliminating the need to purchase hardware and software.</p>
    </h5>
  
  </div>
  </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection