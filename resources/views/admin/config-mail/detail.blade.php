@extends('admin.layouts.master')

@section('title', 'Admin Detail Mail Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail Mail Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <form method="post" action="{{route('admin.update.configs.mail', $mailConfig->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{$mailConfig->name}}">
            </div>
            <div class="form-group">
                <label for="value">Giá trị</label>
                <input type="text" class="form-control" id="value" name="value" required value="{{$mailConfig->value}}">
            </div>
            <div class="form-group">
                <label for="type">Loại</label>
                <input type="text" class="form-control" id="type" name="type" required value="{{$mailConfig->type}}">
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </section>
@endsection
