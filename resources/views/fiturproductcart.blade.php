@extends('layout.master')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/product.css'); }}" />
@endpush

@section('content')

<section>
    <div class="container">
      @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      
      @if(Session::has('Error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('Error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <div class="row">
        <h4 class="fw-bolder">Quoted Items:</h4>
        <div class="leftCart col col-8 mx-2 me-5">
            @if(session('cart'))
                @foreach(session('cart') as $id  => $details)
                    <div class="d-flex border border-2 mb-4 border-dark rounded align-items-center row py-3 justify-content-between">
                        <div class="col">
                        <div class="container p-0">
                        <div class="align-items-center mx-auto row">
                            <img src="{{ URL::asset($details["image"]); }}" class="col col-2" style="width: 70px;" alt="">
                            <p class="fw-bolder text-center col-9">{{$details["name"]}} - <a href="#">Part Number</a></p>
                        </div>
                        </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <div class="justify-content-center row">
                                    <form method="POST" action="/minqty" class="col-2">
                                        @csrf
                                        <button class="btn btn-outline-danger" id="minusbutton">-</button>
                                        <input type="hidden" id="id" name="id" value={{$details["id"]}}>
                                    </form>
                                    <input type="value" class="col-6 text-center "id="quantity" value="{{$details["quantity"]}}">
                                    <form method="POST" action="/plusqty" class="col-2">
                                        @csrf
                                        <button class="btn btn-outline-danger" id="plusbutton">+</button>
                                        <input type="hidden" id="id" name="id" value={{$details["id"]}}>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
        
        <div class="right-content col col-3">
            <div class="container border border-2 rounded border-dark p-4">
                <h4 class="fw-bolder text-center">Quotation Details</h4>
                <form action="/send-mail" method="POST" class="mt-4">
                    @csrf
                    <div class="row mb-3">
                        <label class="fw-bold form-label" for="quotationDetailsFirstName">First Name</label>
                        <input class="col mx-auto form-control" type="text" name="quotationDetailsFirstName" id="quotationDetailsFirstName" placeholder="Ex: John">
                    </div>

                    <div class="row mb-3">
                        <label class="fw-bold form-label" for="quotationDetailsLastName">Last Name</label>
                        <input class="col  mx-auto form-control" type="text" name="quotationDetailsLastName" id="quotationDetailsLastName" placeholder="Ex: Doe">
                    </div>

                    <div class="row mb-3">
                        <label class="fw-bold form-label" for="quotationDetailsEmailAddress">Email Address</label>
                        <input class="col  mx-auto form-control" type="email" name="quotationDetailsEmailAddress" id="quotationDetailsEmailAddress" placeholder="Ex: example@example.com">
                    </div>

                    <div class="row mb-3">
                        <label class="fw-bold form-label" for="quotationDetailsPhoneNumber">Phone Number</label>
                        <input class="col  mx-auto form-control" type="text" name="quotationDetailsPhoneNumber" id="quotationDetailsPhoneNumber" placeholder="Ex: 08XXXXXXXXX">
                    </div>
                    
                    <div class="row mb-3">
                        <label class="fw-bold form-label" for="quotationDetailsCompanyName">Company Name (type)</label>
                        <input class="col  mx-auto form-control" type="text" name="quotationDetailsCompanyName" id="quotationDetailsCompanyName" placeholder="Ex: PT.example (Contractor)">
                    </div>
                    <button type="submit" class="btn text-center mx-auto col col-12 quotebtn" style="background-color: #A72B30; color: white;">Contact</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End main -->
@endsection