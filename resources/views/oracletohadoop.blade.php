@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bigdatananalytcons.css'); }}" />
@endpush

@section('content')
   <!-- HERO -->
   <div class="hero h-auto d-flex justify-content-center " id="oracletohadoop">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div>
          <h1 class="display-4 text-white">Oracle to Hadoop Data Migration</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> Convert data to Analytics</li>
            <li><i class="bx bxs-check-circle"></i> Fast process</li>
            <li><i class="bx bxs-check-circle"></i> Oracle based to Hadoop</li>
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
    <section class="container">
        <div class="hdr text-center mb-5">
            <h1>Features</h1>
        </div>
        
<div class="d-flex justify-content-evenly">

  <div class="col-lg-3">
      <div class="upper mb-5">
          <img src="img/Group 29.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Transform Data to HADOOP</h5>
    <p class="text-center"> Business data is growing very fast with most of the data is stored in Oracle databases. So naturally the initial initiative to achieve big data analytics is by doing data migration from one or many Oracle databases to Hadoop.
      MII is offering Oracle to Hadoop data migration solution that secure and reliable to keep your Big Data supplied with the freshest possible data to support timely analytics.</p>

  </div>

</div>


</div>
    </section>
    <!-- End Features --> 
@endsection