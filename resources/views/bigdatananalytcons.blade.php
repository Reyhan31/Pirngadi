@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bigdatananalytcons.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="bigdatanayltcons">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex align-items-center">
            <div>
            <h1 class="display-4 text-white">Big Data and Analytics Consulting</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Focus on your Big Data & Analytics</li>
              <li><i class="bx bxs-check-circle"></i> Consult with the Expert</li>
              <li><i class="bx bxs-check-circle"></i> Grow Business journey together</li>
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
      <section class="container">
          <div class="hdr text-center mb-5">
              <h1>Features</h1>
          </div>
          
<div class="d-flex justify-content-evenly">

    <div class="col-lg-3">
        <div class="upper mb-5">
            <img src="img/Group 28.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">The right partner for your journey</h5>
      <p class="text-center row-mx-auto"> Our Big Data and Analytics Consulting is trained with various Big Data and Analytics technology, so we understand the best architecture for each specific use case to maximizing the value of your data, while also help you to avoid vendor lock-in.</p>

    </div>
    <div class="col-lg-3 ">
        <div class="upper  mb-5">
            <img src="img/Group 28.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Consult with experts</h5>
      <p class="text-center"> Our experienced and trained consulting team will help you implementing Big Data and Analytics from pilot to production quickly, painlessly, at lower cost, and with peak performance.</p>

    </div>
   
</div>


</div>
      </section>
      <!-- End Features -->
@endsection