@extends('backend.layouts.master')
@section('content')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="container-fluid">
            <div class="main-content">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Product</h3>
                    </div>
                    <div class="card-body">
                        @include('backend.partials.messages')
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Parent Category</th>
                                <th>Action</th>
                            </tr>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($categories as $category)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <th>{{ $category->name }}</th>
                                    <th>
                                    <img src="{{asset('images/products/categories/'.$category->image)}}" width="100">
                                        </th>
                                    <th>
                                        @if($category->parent_id == NULL)
                                            Primary Category
                                            @else
                                            {{ $category->parent->name }}
                                        @endif
                                    </th>
                                    <th>
                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                            class="btn btn-success">Edit</a>
                                        {{--
                                        <hr>
                                        <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form> --}}
                                        <a href="#deleteModal{{ $category->id }}" data-toggle="modal"
                                            class="btn btn-danger">Delete</a>
                                        <!-- Button trigger modal -->
                                        <!-- The Modal -->
                                        <div class="modal" id="deleteModal{{ $category->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Delete Message</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Are you sure to delete this category permanently?
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <form action="{{ route('admin.category.delete', $category->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    </div>
        <!-- END PAGE CONTAINER-->
    @endsection
