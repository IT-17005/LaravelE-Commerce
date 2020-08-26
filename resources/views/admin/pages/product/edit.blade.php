@extends('admin.layouts.master')
@section('content')
<div class="page-container">
    <!-- HEADER DESKTOP-->
    @include('admin.partials.header')
    <!-- HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<div class="main-content">

            <div class="card">
                <div class="card-header">
                <h3>Edit Product</h3>
                </div>
                <div class="card-body">
                    <form action={{route('admin.product.update',$product->id)}} method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('admin.partials.messages')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$product->title}}">
                          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                         <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label >Price</label>
                            <input type="number" class="form-control" name="price" id="" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label >Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="" value="{{$product->quantity}}">
                        </div>
                        <div class="form-group">
                            <label >Product Image</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                      </form>
                </div>
            </div>

    </div>

        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection

