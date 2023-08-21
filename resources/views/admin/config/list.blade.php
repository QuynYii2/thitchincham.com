@extends('admin.layouts.master')

@section('title', 'Admin List Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">List Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="float-end mb-3 mt-2">
            <a href="{{route('admin.config.create')}}" class="btn btn-primary float-right">Create Config</a>
        </div>
        <div class="row">
            <div class="mb-3">
                <h5>Search Config</h5>
                <input class="form-control" id="inputSearchConfig" type="text" placeholder="Search..">
                <br>
            </div>
            <table class="table table-bordered" id="tableConfig">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Hotline</th>
                    <th scope="col">CSKH</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Zalo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(!$configs->isEmpty())
                    @foreach($configs as $config)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                <img src="{{$config->logo}}" alt="" width="60px" height="60px">
                            </td>
                            <td>
                                {{$config->hotline}}
                            </td>
                            <td>{{$config->cskh}}</td>
                            <td>{{$config->facebook}}</td>
                            <td>
                                {{$config->zalo}}
                            </td>
                            <td id="productStatus{{$config->id}}">{{$config->status}}</td>
                            <td>
                                <a href="{{route('admin.show.detail.config', $config->id)}}"
                                   class="btn btn-secondary">Detail</a>

                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$config->id}}">Delete
                                </button>
                                <div class="modal fade" id="modalDelete{{$config->id}}" tabindex="-1"
                                     aria-labelledby="modalDelete{{$config->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.delete.config', $config->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete it?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#inputSearchConfig").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableConfig tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection