@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/hit.css'); }}" />
@endpush

@section('content')
<!-- HERO -->
<div class="hero h-auto d-flex justify-content-center " id="hitbackup">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 pt-5">
          <div class="">
          <h1 class="display-4 text-white">Back-Up and Recovery</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> 100% Protection</li>
            <li><i class="bx bxs-check-circle"></i> 100% Secured</li>
            <li><i class="bx bxs-check-circle"></i> Works on any Data style</li>
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
          <img src="img/Group 55.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Flexibility</h5>
    <p class="text-center">Our expert will provide backup solution that works with any data, any environment, any location, and any device gives you the greatest flexibility in taking advantage of the full range of computing offered today and tomorrow. </p>

  </div>
  <div class="col-sm-3">
      <div class="upper  mb-5">
          <img src="img/Group 55.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Complete Action</h5>
    <p class="text-center"> We will provide backup solution for virtual, physical and cloud environments simplifies backup and eliminates the cost and complexity of multiple point product.</p>

  </div> 

</div>


</div>
    </section>
    <!-- End Features -->
@endsection