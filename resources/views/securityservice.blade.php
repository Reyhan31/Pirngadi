@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/securityservice.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex align-items-center" id="securityservice">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center pt-5">
          <h1 class="display-4 text-white">Security Service</h1>
          <h5 class="text-white my-3 fw-normal">Detection. Prevention. Protection.</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- //HERO -->

  <!-- Description -->
  <section class="bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-10 mx-auto text-start">
          <h2 class="text-danger mb-3">By investing in the right people, processes, and technology, organizations can block some of the most persistent threats facing them today</h2>
          <h1></h1>
          <p>
              IT security risks take many shapes and forms nowadays. But none of them are impossible to defend against (or in the very least mitigate). To secure organization properly it need an Information Security Management System which addresses people, processes and technology in a single, cohesive package. By investing in the right people, processes, and technology, organizations can block some of the most persistent threats facing them today, including POS malware, browser vulnerabilities, stolen IT assets, phishing, CEO fraud, and insider threats. Cyber Security is the use of various technologies and  processes to protect networks, computers, programs and data from attack, damage or unauthorized access.
          </p>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 59.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Perimeter Security</h5>
            <hr />
            <div class="list-unstyled mb-4">Protect your web applications from any kind of attack from cyberthreats</div>
            <a href="/securityperimeter" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 60.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">User Security</h5>
            <hr />
            <div class="list-unstyled mb-4">Keep user information up to date and secure for the entire enterprise.</div>
            <a href="/securityuser" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 61.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Information Security</h5>
            <hr />
            <div class="list-unstyled mb-4">Gain a complete understanding of your security status.</div>
            <a href="/securityinfo" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 62.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Security Consulting</h5>
            <hr />
            <div class="list-unstyled mb-4">Detect the Undetected with Outcome Solution from the experts.</div>
            <a href="/securityconsulting" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card-effect rounded border border-danger text-center">
            <img src="img/Group 63.jpg" class="img-fluid rounded" alt="responsive image" />
            <h5 class="mt-5 mb-1 text-center">Manage Security</h5>
            <hr />
            <div class="list-unstyled mb-4">Improve efficiency and Delivering business outcomes</div>
            <a href="/securitymanage" class="btn btn-danger">See More</a>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!-- Description -->   
@endsection