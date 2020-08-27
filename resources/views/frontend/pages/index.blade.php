@extends('frontend.layouts.master')

@section('content')
    {{--Start Sidebar + Content --}}
<div class="container margin-top-20" >
    <div class="row">

        <div class="col-md-4">
            @include('frontend.partials.product-sidebar')
        </div>

        <div class="col-md-8">
         <div class="widget">
             <h3>Featured products</h3>

       <div class="row">

          <div class="col-md-3">
             <div class="card">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'samsung.png')}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">taka - 10000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                   <img class="card-img-top feature-img" src="{{asset('images/products/'. 'samsung.png')}}" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Samsung</h4>
                     <p class="card-text">taka - 10000</p>
                     <a href="#" class="btn btn-outline-warning">Add to cart</a>
                   </div>
                 </div>
               </div>

               <div class="col-md-3">
                <div class="card">
                   <img class="card-img-top feature-img" src="{{asset('images/products/'. 'samsung.png')}}" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Samsung</h4>
                     <p class="card-text">taka - 10000</p>
                     <a href="#" class="btn btn-outline-warning">Add to cart</a>
                   </div>
                 </div>
               </div>

               <div class="col-md-3">
                <div class="card">
                   <img class="card-img-top feature-img" src="{{asset('images/products/'. 'samsung.png')}}" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Samsung</h4>
                     <p class="card-text">taka - 10000</p>
                     <a href="#" class="btn btn-outline-warning">Add to cart</a>
                   </div>
                 </div>
               </div>

          </div>
         </div>
        </div>
    </div>
</div>

{{--End Sidebar + Content --}}
@endsection

