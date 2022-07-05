@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/securityservice.css'); }}" />
@endpush

@section('content')
  <!-- HERO -->
  <div class="hero h-auto d-flex justify-content-center " id="securityuser">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 pt-5">
          <div class="">
          <h1 class="display-4 text-white">User Security</h1>
          <ul class="list-unstyled">
            <li><i class="bx bxs-check-circle"></i> Trust worthy experts</li>
            <li><i class="bx bxs-check-circle"></i> SSO security systems</li>
            <li><i class="bx bxs-check-circle"></i> User friendly account</li>
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
          <img src="img/Group 60.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Single sign-on system (SSO)</h5>
    <p class="text-center">Single password authentication lets users authenticate to multiple databases with a single global password although each connection requires a unique authentication. The password is securely stored in the centrally located, LDAP-compliant directory, and protected with security mechanisms including encryption and Access Control Lists (ACLs). This approach improves usability by reducing the number of passwords to remember and manage, and by eliminating the overhead of setting up SSL.</p>

  </div>
  <div class="col-sm-3">
      <div class="upper  mb-5">
          <img src="img/Group 60.jpg" alt="" >
      </div>
    <h5 class="text-center mb-3">Leave the security to us</h5>
    <p class="text-center"> Our professionals services for security needs, includes who will plan, design and implement the security solutions. For post implementation we also can maintain the same. We leave you to focus on your own business, while you leave your security issues with us. Our professionals can help in merging with an existing IT environment, implement or create a solution from scratch. We understand that the user and account management in an organization is also critical for business operational, and we ensure secured as well as compliant environment for Enterprise User Security management.</p>

  </div>

</div>


</div>
    </section>
    <!-- End Features -->  
@endsection