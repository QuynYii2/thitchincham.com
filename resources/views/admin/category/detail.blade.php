@extends('admin.layouts.master')

@section('title', 'Admin Detail Category')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin.update.category', $category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{$category->name}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="thumbnail" class="form-label">Choose thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                        <img src="{{$category->thumbnail}}" alt="Avatar" height="100px" width="100px">
                    </div>
                    <div class="form-group col-md-2 mt-2">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($category->status == \App\Enums\CategoryStatus::ACTIVE)
                                <option value="{{\App\Enums\CategoryStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\CategoryStatus::INACTIVE}}">INACTIVE</option>
                            @else
                                <option value="{{\App\Enums\CategoryStatus::INACTIVE}}">INACTIVE</option>
                                <option value="{{\App\Enums\CategoryStatus::ACTIVE}}">ACTIVE</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </section>
@endsection