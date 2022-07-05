@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/manageservice.css'); }}" />
@endpush

@section('content')
    <!-- HERO -->
    <div class="hero h-auto d-flex justify-content-center " id="manageondemandtest">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 pt-5">
              <div class="">
              <h1 class="display-4 text-white">On Demand Testing Services</h1>
              <ul class="list-unstyled">
                <li><i class="bx bxs-check-circle"></i> Test by Request</li>
                <li><i class="bx bxs-check-circle"></i> Overcome testing challenges</li>
                <li><i class="bx bxs-check-circle"></i> Testing process solution</li>
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
              <img src="img/Testod.jpg" alt="" >
          </div>
        <h5 class="text-center mb-3">Quality testing service</h5>
        <p class="text-center"> Within MII, we provide the services to help our customer to overcome this testing challenges by addressing each of the three main component People , Process and Technology. We provide the right skilled resource, the best practice and the tools to help our customer validating the quality of their software and applications. MII provide end to end application testing services consist of Security Testing, Performance Testing, and Functional Testing.</p>
  
      </div>
    
  </div>
  
  
  </div>
        </section>
        <!-- End Features -->
@endsection