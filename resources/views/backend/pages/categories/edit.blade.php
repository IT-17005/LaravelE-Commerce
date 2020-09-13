@extends('backend.layouts.master')
@section('content')
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="main-content">

                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Product</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ route('admin.category.update', $category->id) }} method="post" enctype="multipart/form-data">
                                @csrf
                                @include('backend.partials.messages')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id=""
                                        value="{{$category->name}}">
                                    {{-- <small id="emailHelp"
                                        class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    --}}
                                </div>
                                <div class="form-group">
                                    <label for="description">Description (Optional)</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{!! $category->description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Parent Category (Optional)</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="">Please select a Primary Category.</option>
                                    @foreach($main_categories as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $category->parent_id ? 'selected' :''}}>{{$cat->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category Old Image</label>
                                    <img src="{{asset('images/products/categories/'.$category->image)}}" width="100">
                                </div>
                                <div class="form-group">
                                    <label>Category New Image (Optional)</label>
                                            <input type="file" class="form-control" name="image"
                                                id="image">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Category</button>
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
