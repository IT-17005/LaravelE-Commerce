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
                            <h3>Manage Product</h3>
                        </div>
                        <div class="card-body">
                            @include('admin.partials.messages')
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Product title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <th>{{ $product->title }}</th>
                                        <th>{{ $product->price }}</th>
                                        <th>{{ $product->quantity }}</th>
                                        <th>
                                            <a href="{{ route('admin.product.edit', $product->id) }}"
                                                class="btn btn-success">Edit</a>
                                                <hr>
                                                <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                <button class="btn btn-danger">Delete</button>
                                                </form>

                                            {{-- <a href="#deleteModal{{ $product->id }}" data-toggle="modal"
                                                class="btn btn-danger">Delete</a>
                                            <!-- Button trigger modal -->
<!-- The Modal -->
<div class="modal" id="deleteModal{{ $product->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
            {{ csrf_field() }}
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Are you sure to delete this product permanently?
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div> --}}

                                        </th>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
@endsection
