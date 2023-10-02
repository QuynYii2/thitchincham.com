@extends('admin.layouts.master')

@section('title', 'Admin List Mail Config')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">List Mail Config</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <table class="table table-bordered" id="tableConfig">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá trị</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(!$mailConfigs->isEmpty())
                    @foreach($mailConfigs as $config)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                {{$config->name}}
                            </td>
                            <td>
                                {{$config->value}}
                            </td>
                            <td>
                                {{$config->type}}
                            </td>
                            <td>
                                <a href="{{route('admin.show.detail.configs.mail', $config->id)}}"
                                   class="btn btn-secondary">Detail</a>

                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$config->id}}">Delete
                                </button>
                                <div class="modal fade" id="modalDelete{{$config->id}}" tabindex="-1"
                                     aria-labelledby="modalDelete{{$config->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.delete.configs.mail', $config->id)}}" method="post">
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
@endsection