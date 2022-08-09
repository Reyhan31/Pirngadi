@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/consulting.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="consuladvisory">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Consulting and Advisory Services</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Business assistance</li>
              <li><i class="bx bxs-check-circle"></i> Experienced experts</li>
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
            <img src="img/Group 72.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Identify critical issue & opportunities</h5>
      <p class="text-center">  Focus on the most critical issues and opportunities which generally faced: IT Strategic Plan, IT Governance, Enterprise Architecture, Data Management, Business Service Management, and IT Risk & Compliance across industries.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 72.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Guaranteed experts</h5>
      <p class="text-center">Our Experts come from various backgrounds, such as Financial Sector Industries, Government, Owned stated organizations and its subsidiaries, manufactures, universities, etc. We develop proven methodologies, deliver holistic perspective, capture across framework boundaries, in addition we eliminate silos of any organization structure.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection