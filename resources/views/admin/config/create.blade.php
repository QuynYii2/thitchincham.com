@extends('admin.layouts.master')

@section('title', 'Admin Create New Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Create New Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.config.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotline">Hotline</label>
                        <input type="text" class="form-control" name="hotline" id="hotline" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cskh">CSKH</label>
                        <input type="text" class="form-control" name="cskh" id="cskh" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zalo">Zalo</label>
                        <input type="text" min="1" class="form-control" name="zalo" id="zalo" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="logo">Choose thumbnail</label>
                        <input class="form-control" type="file" id="logo" name="logo" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">ACTIVE</option>
                            <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">INACTIVE</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection