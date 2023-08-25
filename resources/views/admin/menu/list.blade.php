@extends('admin.layouts.master')

@section('title', 'Admin List Menu')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">List Menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>Search Category</h5>
                <input class="form-control" id="inputSearchMenu" type="text" placeholder="Search..">
                <br>
            </div>
            <table class="table table-bordered" id="tableProduct">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Create By</th>
                    <th scope="col">Active</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(!$menus->isEmpty())
                    @foreach($menus as $menu)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$menu->name}}</td>
                            <td>
                                {{$menu->category->name}}
                            </td>
                            <td>{{$menu->price}}.000đ</td>
                            <td>
                                {{$menu->user->fullName}}
                            </td>
                            <td>
                                @php
                                    $isChecked = false;
                                    if ($menu->status == \App\Enums\MenuStatus::ACTIVE){
                                        $isChecked = true;
                                    }
                                @endphp
                                <input data-id="{{$menu->id}}" type="checkbox" class="form-check-input toggleMenu"
                                       id="exampleCheck{{$menu->id}}" {{ $isChecked ? 'checked' : '' }}>
                            </td>
                            <td id="productStatus{{$menu->id}}">{{$menu->status}}</td>
                            <td>
                                <a href="{{route('admin.show.detail.menu', $menu->id)}}"
                                   class="btn btn-secondary">Detail</a>

                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$menu->id}}">Delete
                                </button>
                                <div class="modal fade" id="modalDelete{{$menu->id}}" tabindex="-1"
                                     aria-labelledby="modalDelete{{$menu->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.delete.menu', $menu->id)}}" method="post">
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
            $('.toggleMenu').on('click', function () {
                let $categoryID = $(this).data('id');

                function setProduct($categoryID) {
                    $.ajax({
                        url: '/admin/menus/toggle/' + $categoryID,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            let status = document.getElementById('productStatus' + $categoryID)
                            status.innerText = response['status'];
                        },
                        error: function (exception) {
                            console.log(exception)
                        }
                    });
                }

                setProduct($categoryID);
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#inputSearchMenu").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableProduct tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection