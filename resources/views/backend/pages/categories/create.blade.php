@extends('backend.layouts.master')
@section('content')
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="main-content">

                    <div class="card">
                        <div class="card-header">
                            <h3>Add Category</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ route('admin.category.store') }} method="post" enctype="multipart/form-data">
                                @csrf
                                @include('backend.partials.messages')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id=""
                                        aria-describedby="emailHelp">
                                    {{-- <small id="emailHelp"
                                        class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    --}}
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Parent Category</label>
                                    <select class="form-control" name="parent_id">
                                    @foreach($main_categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category Image</label>
                                            <input type="file" class="form-control" name="image"
                                                id="image">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
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
