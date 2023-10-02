@extends('admin.layouts.master')

@section('title', 'Admin Create Mail Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Create Mail Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

{{--    <section class="section dashboard">--}}
{{--        <form method="post" action="{{route('admin.configs.mail.create')}}">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="name">Tên</label>--}}
{{--                <input type="text" class="form-control" id="name" name="name" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="value">Giá trị</label>--}}
{{--                <input type="text" class="form-control" id="value" name="value" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="type">Loại</label>--}}
{{--                <input type="text" class="form-control" id="type" value="type" required>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Create</button>--}}
{{--        </form>--}}
{{--    </section>--}}
@endsection
