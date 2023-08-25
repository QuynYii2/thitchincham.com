@extends('admin.layouts.master')

@section('title', 'Admin Create New Menu')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Create New Menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.menu.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Menu Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="number" min="1" class="form-control" name="price" id="price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control description" name="description" id="description"
                              placeholder="Enter description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea type="text" class="form-control description" name="short_description"
                              id="short_description"
                              placeholder="Enter short description" required></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="thumbnail">Choose thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                            <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection