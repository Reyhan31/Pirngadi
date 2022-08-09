@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="businessappenterprise">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Enterprise Resource Planning</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Increase productivity</li>
              <li><i class="bx bxs-check-circle"></i> Connect stakeholders</li>
              <li><i class="bx bxs-check-circle"></i> Improve controls</li>
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
            <img src="img/Group 64.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Efficient productivity</h5>
      <p class="text-center"> ERP systems tie together and define a plethora of business processes and enable the flow of data between them. By collecting an organization’s shared transactional data from multiple sources, ERP systems eliminate data duplication and provide data integrity with a “single source of truth".</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 64.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Critical at stake</h5>
      <p class="text-center"> Today, ERP systems are critical for managing thousands of businesses of all sizes and in all industries. To these companies, ERP is as indispensable as the electricity that keeps the lights on.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection