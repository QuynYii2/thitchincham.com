@extends('admin.layouts.master')

@section('title', 'Admin Detail News')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail News</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.update.news', $news->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">News Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$news->title}}"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">Choose thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                               accept="image/*">
                        <img src="{{$news->thumbnail}}" alt="" width="60px" height="60px">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($news->status == \App\Enums\NewsStatus::ACTIVE)
                                <option value="{{\App\Enums\NewsStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\NewsStatus::INACTIVE}}">INACTIVE</option>
                            @else
                                <option value="{{\App\Enums\NewsStatus::INACTIVE}}">INACTIVE</option>
                                <option value="{{\App\Enums\NewsStatus::ACTIVE}}">ACTIVE</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">Short Content</label>
                    <textarea type="text" class="form-control description" name="short_content"
                              id="short_content"
                              placeholder="Enter short description" required>{{$news->short_content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" class="form-control description" name="content" id="content"
                              placeholder="Enter description" required>{{$news->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection