@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/contactus.css'); }}" />
@endpush

@section('content')
 <!-- Main -->
<div class="hero h-auto d-flex justify-content-center " id="contactus">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex align-items-center">
        <div>
          <h1 class="display-4 text-white">Contact Us.</h1>
          <p class="">Need an expert? Consult with us to bring impactful future to your business. Drop us a Message! </p>
          <div class="col-mx-6 mt-5 ">
          <div class="social-icon">
            <a href="#"><i class="bx bxl-whatsapp bx-md"></i></a>
            <a href="#"><i class="bx bxl-twitter bx-md"></i></a>
            <a href="#"><i class="bx bxl-instagram-alt bx-md"></i></a>
          </div>
        </div>
        </div>
    </div>
    <div class="col-lg-5 ms-auto">
        <div class="form card-effect rounded border border-danger align-items-center">
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
    <!-- End Main -->
    <!-- maps -->
<div class="container-fluid">
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6035842367023!2d106.82757295111739!3d-6.183775995501212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f431d50f17f3%3A0x8c6e9994d3fcfbee!2sJln%20Jaksa%20No.7%2C%20RT.1%2FRW.5%2C%20Kebon%20Sirih%2C%20Menteng%2C%20Central%20Jakarta%20City%2C%20Jakarta%2010340!5e0!3m2!1sen!2sid!4v1646967148609!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  </div>
</div>
    <!-- maps end -->
@endsection