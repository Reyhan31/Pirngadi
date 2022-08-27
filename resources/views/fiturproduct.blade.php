@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('css/product.css'); }}" />
@endpush

@section('content')
<!-- Main -->
<section>

  <div class="container">
    <div class="main-content mx-auto">
        
        <div class="row">
            {{-- filter --}}
            <div class="col col-3  ">
                <div class="align-items-center border border-2 border-dark rounded p-3 mt-4">
                  <form method="GET">
                    <p class="fw-bolder fs-6 mb-3">Search Contractors by:</p>
                    <label class="fw-bold fs-6">Brand name</label>
                      <select class="form-select mb-4" name="brandName">
                          <option selected value="">--Select</option>
                          <option value="General Electric">General Electric</option>
                      </select>
                    <div class="container mb-5">
                        <div class="row">
                            <button type="submit" class="col btn btn-sm btn-outline-secondary me-5">Search</button>
                            <a class="col btn btn-sm btn-outline-secondary" href="{{ request()->url() }}">Clear</a>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
            {{-- product --}}
            <div class="col col-9">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($product as $p)
                          <a href="/fiturproductdetails/{{$p->id}}" class="card col-3 m-2 align-items-center p-5 border-2 border-dark cardShopItem">
                            <img src="{{ URL::asset($p->image); }}" class="card-img-top" alt="Contractors">
                              <div class="card-body text-center p-4">
                                <p class="card-title fw-bolder" style="font-size: 18px;">{{$p->name}}<p>
                                {{-- <p class="card-text fw-bolder">{{$p->amps}} AMP</p> --}}
                              </div>
                          </a>  
                        @endforeach
                        <div class="d-flex justify-content-center">
                          {{$product->links()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
  
  
@if(Session::has('cart'))
  <div class="fixed-btn">
    <button type="button" class="btn btn-danger rounded position-relative">
      <a href="/fiturproductcart"><i class='bx bx-cart' style='color:#ffffff'  ></i>
        <span style='color:#ffffff'  >Quotes Cart</span>
      <span class="position-absolute top-0 start-100 translate-middle badge border rounded-pill bg-danger">
        {{ count(Session::get('cart')) }}
        <span class="visually-hidden">unread messages</span>
      </span>
      </a>
    </button>
  </div>
@endif

</section>
<!-- End main -->
@endsection