@extends('admin.layouts.master')

@section('title', 'Admin List Orders')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">List Orders</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>Search Orders</h5>
                <input class="form-control" id="inputSearchOrders" type="text" placeholder="Search..">
                <br>
            </div>
            <div class="mt-3 mb-3">
                <a href="{{route('admin.export.order')}}" class="btn btn-primary">Export</a>
            </div>
            <table class="table table-bordered" id="tableOrders">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Orders Name</th>
                    <th scope="col">Orders PhoneNumber</th>
                    <th scope="col">Orders Email</th>
                    <th scope="col">Orders Address</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(!$orders->isEmpty())
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                {{$order->information->fullName}}
                            </td>
                            <td>
                                {{$order->information->phoneNumber}}
                            </td>
                            <td>
                                {{$order->information->email}}
                            </td>
                            <td>
                                {{$order->information->address}}
                            </td>
                            @php
                                $orderItem = \App\Models\OrderItem::where('order_id', $order->id)->first();
                                $menu = null;
                                if ($orderItem){
                                $menu = \App\Models\Menu::find($orderItem->menu_id);
                                }
                            @endphp
                            @if($menu)
                                <td>{{$menu->name}}</td>
                                <td>{{$orderItem->price}}.000đ</td>
                                <td>{{$orderItem->quantity}}</td>
                            @else
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            @endif
                            <td>{{$order->total}}.000đ</td>
                            <td>{{$order->created_at}}</td>
                            <td id="orderStatus{{$order->id}}">{{$order->status}}</td>
                            <td>
                                <a href="{{route('admin.show.detail.order', $order->id)}}"
                                   class="btn btn-secondary">Detail</a>

                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$order->id}}">Delete
                                </button>
                                <div class="modal fade" id="modalDelete{{$order->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.delete.order', $order->id)}}" method="post">
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
            $("#inputSearchOrders").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableOrders tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection