@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/securityservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="securityconsulting">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">Security Consulting</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Security assistance advisory</li>
                <li><i class="bx bxs-check-circle"></i> Covering information risks</li>
                <li><i class="bx bxs-check-circle"></i> Information security assurance</li>
                <li><i class="bx bxs-check-circle"></i> Penetration test</li>
                <li><i class="bx bxs-check-circle"></i> Security management & training</li>
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
                <h1>List of Service</h1>
            </div>
            
  <div class="d-flex justify-content-evenly row">
  
      <div class="col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Vulnerability Assessment</h5>
        <p class="text-center"> This service is designed for clients who want to know the weaknesses / information security issues from outside the system. In simple, in this activity, PT MII will help to provide a list of weaknesses (list of vulnerabilities) and prioritize risks based on existing weaknesses. </p>
  
      </div>
      <div class="col-sm-3">
          <div class="upper  mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Penetration Test</h5>
        <p class="text-center"> This service is designed to evaluate the vulnerabilities found in a system with the goal (objective) to determine whether or not the system can be exploited (broken). </p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Security Assessment</h5>
        <p class="text-center"> This activity aims to ensure that the parameters contained in the system have been adapted to the existing security parameters. This activity will be done without limiting testing standpoint. In general, these security parameters will be adjusted to a common reference that has become the standard in common industry.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Security Acceptance Test</h5>
        <p class="text-center"> Security Acceptance Test, similiar to User Acceptance Test in SDLC, ensures that application is appropriate in terms of security.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Source Code Review</h5>
        <p class="text-center"> The service aims to identify risks related to the security of the examination is done directly through the existing programming code that can cause vulnerabilities in a system. This activity can generally be carried out in stages of the SDLC and after production.</p>
  
      </div>
      <div class="col-lg-3 col-sm-3">
          <div class="upper mb-5">
              <img src="img/Group 62.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Social Engineering</h5>
        <p class="text-center"> This service is designed for clients who want to know their weakness / issues related to information security by exploiting exploit the weaknesses of the individuals associated directly or indirectly with the targeted system.</p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection