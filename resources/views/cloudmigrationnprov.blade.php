@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/cloudmigrationnprov.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="clouldmigration">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex align-items-center">
            <div>
            <h1 class="display-4 text-white">Cloud Migration and Provisioning Services</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Data locality</li>
              <li><i class="bx bxs-check-circle"></i> Low Latency</li>
              <li><i class="bx bxs-check-circle"></i> Economic, Speed, and Scability for cloud</li>
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
            <img src="img/cloudmigra.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Best of the two worlds</h5>
      <p class="text-center"> We are capable to successfully adopt both in hybrid or full public for your cloud solution.</p>

    </div>
    <div class="col-lg-3 ">
        <div class="upper  mb-5">
            <img src="img/cloudmigra.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Experienced Expertise</h5>
      <p class="text-center"> Cloud is not a new technology, especially Cloud IaaS, therefore we are very much capable of helping you to migrate your workload application to cloud or implement a hybrid cloud solution for your IT infrastructure such as email in Exchange, and active directory.</p>

    </div>

</div>


</div>
      </section>
      <!-- End Features -->
@endsection