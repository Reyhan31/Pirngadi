@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/businessapp.css'); }}" />
@endpush

@section('content')
 <!-- HERO -->
 <div class="hero h-auto d-flex justify-content-center " id="busineappservicemanagement">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 pt-5">
            <div class="">
            <h1 class="display-4 text-white">Business Service Management</h1>
            <ul class="list-unstyled">
              <li><i class="bx bxs-check-circle"></i> Increase efficiency</li>
              <li><i class="bx bxs-check-circle"></i> Minimum downtime</li>
              <li><i class="bx bxs-check-circle"></i> Sustainable</li>
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
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Service Catalog</h5>
      <p class="text-center"> Customers depend on your service catalog to request or access the IT services they need to be successful. Digital Workplace helps you avoid catalog sprawl by aggregating hardware, software, and services from multiple cloud-based and on-premises sources, turning your service catalog into a modern service app store.</p>

    </div>
    <div class="col-sm-3">
        <div class="upper  mb-5">
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Service Desk</h5>
      <p class="text-center"> The service desk is the single point of contact for IT Support, managing incidents and service requests, and handling communication with users. Automated ticket tracking, routing, and email notifications help resolve issues and requests efficiently, and self-service access for users helps them find answers to common problems quickly. With the right tool set your service desk can improve IT and business processes across the organization to run more efficiently.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">ITIL®-Compliant Incident/Problem/Change Management</h5>
      <p class="text-center"> ITIL, the most widely accepted approach to IT service management, helps organizations use IT to realize business transformation and growth. Incident management is closely tied to other service management processes including problem and change management. Automating incident and problem management workflows can improve resolution times and prevent future incidents. Change management is the process designed to understand and minimize risks while making IT changes.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Configuration Management Database (CMDB)</h5>
      <p class="text-center"> Every component, or configuration item, that needs to be managed to delivery an IT service, is contained in your CMDB. At any given time, you need assurance your information is accurate. BMC Atrium CMDB provides a complete, accurate, and up-to-date view of the people, processes, and technologies that make up your business and IT environments.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">IT Asset Management</h5>
      <p class="text-center"> Getting the most return from your IT investment starts with a clear view of all your hardware and software assets. IT asset management software should be able to discover IT assets throughout the environment (agent and agentless options) and connect IT assets to services for better change management and faster issue resolution. Look for manageability features that deploy, configure, and patch devices, operating systems, and applications.</p>

    </div>
    <div class="col-lg-3 col-sm-3">
        <div class="upper mb-5">
            <img src="img/Group 65.jpg" alt="" >
        </div>
      <h5 class="text-center mb-3">Knowledge Management</h5>
      <p class="text-center"> Knowledge Management is the practice of capturing, organizing, and making available a body of knowledge within the service management organization to solve problems faster. By putting the right information in front of the right people at the right time you can reduce the burden on IT and significantly improve customer satisfaction.</p>

    </div>
  
</div>


</div>
      </section>
      <!-- End Features -->
@endsection