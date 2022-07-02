@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/product.css'); }}" />
@endpush

@section('content')
<!-- Main -->
<section>
  <div class="container">
    <!-- <div class="position-relative fixed-bottom">
    <div class="position-absolute bottom-0 end-0">
    <button type="button" class="btn btn-primary position-relative">
      Inbox
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        99+
        <span class="visually-hidden">unread messages</span>
      </span>
    </button>
    </div>
  </div> -->
    <!-- <div class="navbar"></div> -->
    <div class="main-content mx-auto">
        
            <div class="row w-50 mx-auto">
                <div class="filter col btn-group btn-group-sm d-flex mb-3" role="group">
                    <button class="filterbtn main-btn btn rounded">All</button>
                    <button class="filterbtn btn rounded ">Ready Stock</button>
                    <button class="filterbtn btn rounded ">Coming Soon</button>
                </div>
        
            </div>
        <nav class="row navbar navbar-expand-lg mx-auto navbar-light mb-3">
            <div class="">
                <!-- <div class="card brand align-items-center border-0 me-2">
                    <img src="img/allen-bradley.png"style="width:80%;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-title text-center fs-7">Ailen Bradley</p>
                    </div>
                </div> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center mx-auto">
                  
                  <li class="nav-item brandlogo selected me-2">
                    <div class="card brand align-items-center border-0">
                        <img src="img/allen-bradley.png"style="width:50%;" class="card-img-top brandimg brandimg" alt="Allen Bradley">
                        <div class="card-body">
                          <p class="card-title text-center" style="font-size: 10px;">Allen Bradley</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0">
                        <img src="img/Allis-Chalmers_logo.svg.png"style="width:50%;" class="card-img-top brandimg" alt="Allis Chalmers">
                        <div class="card-body">
                          <p class="card-title text-center" style="font-size: 10px;">Allis Chalmers</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0">
                        <img src="img/Eaton_Corporation_logo.svg.png"style="width:50%;" class="card-img-top brandimg" alt="Eaton/CutlerHammer">
                        <div class="card-body">
                          <p class="card-title text-center " style="font-size: 10px;">Eaton/CutlerHammer</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0">
                        <img src="img/General_Electric_logo.svg.png"style="width:50%;" class="card-img-top brandimg" alt="General Electric">
                        <div class="card-body">
                          <p class="card-title text-center " style="font-size: 10px;">General Electric</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/1611976931415.jpg"style="width:50%;" class="card-img-top brandimg" alt="ITE">
                        <div class="card-body">
                          <p class="card-title text-center " style="font-size: 10px;">ITE</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/joslynclark.jpg"style="width:50%;" class="card-img-top brandimg" alt="Joslyn Clark">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Joslyn Clark</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/mitsubishi.png"style="width:50%;" class="card-img-top brandimg" alt="Mitsubishi">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Mitsubishi</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/siemens.svg.png"style="width:50%;" class="card-img-top brandimg" alt="Siemens">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Siemens</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/square d.png"style="width:50%;" class="card-img-top brandimg" alt="Square D">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Square D</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0 ">
                        <img src="img/toshiba.jpg"style="width:50%;" class="card-img-top brandimg" alt="Toshiba">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Toshiba</p>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item brandlogo me-2">
                    <div class="card brand align-items-center border-0">
                        <img src="img/westinghouse.svg.png"style="width:50%;" class="card-img-top brandimg" alt="Westinghouse">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Westinghouse</p>
                        </div>
                    </div>
                  </li>
                  <!-- <li class="nav-item ">
                    <div class="card brand align-items-center border-0 me-2">
                        <img src="img/allen-bradley.png"style="width:50%;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-title text-center "style="font-size:10px;">Ailen Bradley</p>
                        </div>
                    </div>
                  </li> -->
                </ul>
              </div>
            </div>
          </nav>
        <div class="row">
            <div class="col col-3  ">
                <div class="align-items-center border border-2 border-dark rounded p-3 mt-4">
                    <p class="fw-bolder fs-6 mb-3">Search Contractors by:</p>
                    <label class="fw-bold fs-6">Type</label>
                    <select class="form-select mb-4">
                        <option selected value=""disabled>--Select</option>

                    </select>
                    <label class="fw-bold fs-6">Model Number</label>
                    <select class="form-select mb-4">
                        <option selected value=""disabled>--Select</option>

                    </select>
                    <div class="container mb-5">
                        <div class="row">
                            <button class="col btn btn-sm btn-outline-secondary me-5">Search</button>
                            <button class="col btn btn-sm btn-outline-secondary">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-9">
                <div class="container-fluid">
                    <div class="row">
                        <a class="card col-3 m-2 align-items-center p-5 border-2 border-dark cardShopItem">
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem" >
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem" >
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem">
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem">
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem" >
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem" >
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum<p>
                              <p class="card-text fw-bolder">400 AMP</p>
                              
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem">
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum</p>
                              <p class="card-text fw-bolder">400 AMP</p>
                            </div>
                          </a>
                          <a class="card col-3 m-2 align-items-center p-5 cardShopItem">
                            <img src="img/contractor.png" class="card-img-top" alt="Contractors">
                            <div class="card-body text-center p-4">
                              <p class="card-title fw-bolder" style="font-size: 18px;">1502 Vacuum</p>
                              <p class="card-text fw-bolder">400 AMP</p>
                            </div>
                          </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-btn">
  <button type="button" class="btn btn-danger rounded position-relative">
    <a href="#"><i class='bx bx-cart' style='color:#ffffff'  ></i></a>
    Quotes Cart
    <span class="position-absolute top-0 start-100 translate-middle badge border rounded-pill bg-danger">
      99+
      <span class="visually-hidden">unread messages</span>
    </span>
  </button>
</div>
</section>
<!-- End main -->
@endsection