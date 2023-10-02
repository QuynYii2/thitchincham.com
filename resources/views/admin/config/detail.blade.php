@extends('admin.layouts.master')

@section('title', 'Detail Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.update.config', $config->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotline">Hotline</label>
                        <input type="text" class="form-control" name="hotline" id="hotline" value="{{$config->hotline}}"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cskh">CSKH</label>
                        <input type="text" class="form-control" name="cskh" id="cskh" value="{{$config->cskh}}"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$config->email}}"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook"
                               value="{{$config->facebook}}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zalo">Zalo</label>
                        <input type="text" min="1" class="form-control" name="zalo" id="zalo" value="{{$config->zalo}}"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="logo">Choose thumbnail</label>
                        <input class="form-control" type="file" id="logo" name="logo"
                               accept="image/*">
                        <img src="{{$config->logo}}" alt="" width="60px" height="60px">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($config->status == \App\Enums\ConfigStatus::ACTIVE)
                                <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">INACTIVE</option>
                            @else
                                <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">INACTIVE</option>
                                <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">ACTIVE</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection