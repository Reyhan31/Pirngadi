@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/hit.css'); }}" />
@endpush

@section('content')
<!-- HERO -->
<div class="hero h-auto d-flex justify-content-center " id="hitvirtualization">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 pt-5">
          <div class="">
          <h1 class="display-4 text-white">Virtualization</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> Premium support</li>
            <li><i class="bx bxs-check-circle"></i> Expand scope</li>
            <li><i class="bx bxs-check-circle"></i> Cloud computing systems efficiency</li>
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
          <img src="img/Group 58.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Efficiency</h5>
    <p class="text-center">Virtualization has moved from an efficiency tool to being the way IT gets done. Fueled by proven results in lowering hardware and energy costs, delivering greater admin efficiencies, increasing availability, and even lowering client computing costs, it shows no sign of slowing down, especially with the current interest in cloud computing.</p>

  </div>
  <div class="col-sm-3">
      <div class="upper  mb-5">
          <img src="img/Group 58.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Upgrades</h5>
    <p class="text-center">Virtualization is an approach to pooling and sharing technology resources to simplify management and increase asset use so that IT resources can more readily meet business demand. This improves asset utilization and efficiency, and decreases costs by reducing the need for physical assets. Virtualization can make maintenance and upgrades significantly easier and less expensive. Virtualization also can help to avoid both planned and unplanned downtime.</p>

  </div>
  <div class="col-lg-3 col-sm-3">
      <div class="upper mb-5">
          <img src="img/Group 58.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Complete Virtualization Experience</h5>
    <p class="text-center"> A successful virtualization journey requires planning, careful implementation, and use of appropriate outside expertise. As you move your virtualization initiative to the next phase with broader enterprise scope, you will need to think about data center performance, integration needs, virtualization management, and process best practices. Our experts provide services to our customer from data center virtualization to end user computing virtualization.</p>

  </div>

</div>


</div>
    </section>
    <!-- End Features -->
@endsection