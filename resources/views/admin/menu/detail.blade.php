@extends('admin.layouts.master')

@section('title', 'Admin Detail Menu')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Create Detail Menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin.update.menu', $menu->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Plant Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$menu->name}}"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Price</label>
                        <input type="number" min="1" class="form-control" name="price" id="price"
                               value="{{$menu->price}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="old_price">Old Price</label>
                        <input type="number" min="1" class="form-control" name="old_price" id="old_price"
                               value="{{$menu->old_price}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control description" name="description" id="description"
                              placeholder="Enter description" required>{{$menu->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea type="text" class="form-control description" name="short_description"
                              id="short_description"
                              placeholder="Enter short description" required>{{$menu->short_description}}</textarea>
                </div>

                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="{{$menu->category_id}}">{{$menu->category->name}}</option>
                            @foreach($categories as $category)
                                @if($category->id != $menu->category_id)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="thumbnail" class="form-label">Choose thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" accept="image/*">
                        <img src="{{$menu->thumbnail}}" width="60px" height="60px">
                    </div>

                    <div class="form-group col-md-2 mt-2">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($menu->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </section>
@endsection