@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/consulting.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="consulfinance">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Financial Services</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Industry finance consultation</li>
              <li><i class="bx bxs-check-circle"></i> financial strategy</li>
              <li><i class="bx bxs-check-circle"></i> learn with the experts</li>
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
            <img src="img/Group 73.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Accelerate Industry</h5>
      <p class="text-center"> We’ll help you harness new technologies to drive innovation and competitiveness, increase customer satisfaction, and improve operational efficiencies and agility.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 73.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Conquere challenges</h5>
      <p class="text-center"> Your organisation needs to accelerate its digital journey to harness new capabilities. Significantly transform not only your customer experience, but also provide a streamlined, agile, and profitable business model for the future.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 73.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Experienced expertise</h5>
      <p class="text-center"> We understand the challenges faced by banking, capital markets, insurance, and market infrastructure institutions. We recognise that leveraging advances in technology is key to addressing both challenges and opportunities in the industry. we'll help you evolve your legacy technology environments and build a robust, secure, and optimal digital operating model for the future.
      </p>

    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="upper mb-5">
          <img src="img/Group 73.jpg" alt="" >
      <h5 class="text-center mb-3">Support your hybrid IT journey</h5>
      <p class="text-center"> we’re helping you to address regulatory compliance and cybersecurity, digital omnichannel banking, cloud ecosystems, and Internet of Things</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection