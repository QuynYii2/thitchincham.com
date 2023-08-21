@extends('admin.layouts.master')

@section('title', 'Admin Detail Order')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail Order</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.update.order', $order->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="title">Order Name</label>
                        <input type="text" class="form-control" name="title"  value="{{$order->information->fullName}}"
                               disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">Order Phone Number</label>
                        <input type="text" class="form-control" name="title"  value="{{$order->information->phoneNumber}}"
                               disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">Order Email</label>
                        <input type="text" class="form-control" name="title"  value="{{$order->information->email}}"
                               disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Order Address</label>
                    <input type="text" class="form-control" name="title"  value="{{$order->information->address}}"
                           disabled>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">Menu</label>
                        <input type="text" class="form-control" name="title"  value="{{$menu->name}}"
                               disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="title">Price</label>
                        <input type="text" class="form-control" name="title"  value="{{$orderItem->price}}"
                               disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="title">Quantity</label>
                        <input type="text" class="form-control" name="title"  value="{{$orderItem->quantity}}"
                               disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="title">Total</label>
                        <input type="text" class="form-control" name="title"  value="{{$order->total}}"
                               disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select class="form-select" name="status" id="status">
                            @if($order->status == \App\Enums\OrderStatus::WAIT_PAYMENT)
                                <option value="{{\App\Enums\OrderStatus::WAIT_PAYMENT}}">{{\App\Enums\OrderStatus::WAIT_PAYMENT}}</option>
                                <option value="{{\App\Enums\OrderStatus::PROCESSING}}">{{\App\Enums\OrderStatus::PROCESSING}}</option>
                                <option value="{{\App\Enums\OrderStatus::SHIPPING}}">{{\App\Enums\OrderStatus::SHIPPING}}</option>
                                <option value="{{\App\Enums\OrderStatus::DELIVERED}}">{{\App\Enums\OrderStatus::DELIVERED}}</option>
                                <option value="{{\App\Enums\OrderStatus::CANCELED}}">{{\App\Enums\OrderStatus::CANCELED}}</option>
                            @elseif($order->status == \App\Enums\OrderStatus::PROCESSING)
                                <option value="{{\App\Enums\OrderStatus::PROCESSING}}">{{\App\Enums\OrderStatus::PROCESSING}}</option>
                                <option value="{{\App\Enums\OrderStatus::WAIT_PAYMENT}}">{{\App\Enums\OrderStatus::WAIT_PAYMENT}}</option>
                                <option value="{{\App\Enums\OrderStatus::SHIPPING}}">{{\App\Enums\OrderStatus::SHIPPING}}</option>
                                <option value="{{\App\Enums\OrderStatus::DELIVERED}}">{{\App\Enums\OrderStatus::DELIVERED}}</option>
                                <option value="{{\App\Enums\OrderStatus::CANCELED}}">{{\App\Enums\OrderStatus::CANCELED}}</option>
                            @elseif($order->status == \App\Enums\OrderStatus::SHIPPING)
                                <option value="{{\App\Enums\OrderStatus::SHIPPING}}">{{\App\Enums\OrderStatus::SHIPPING}}</option>
                                <option value="{{\App\Enums\OrderStatus::WAIT_PAYMENT}}">{{\App\Enums\OrderStatus::WAIT_PAYMENT}}</option>
                                <option value="{{\App\Enums\OrderStatus::PROCESSING}}">{{\App\Enums\OrderStatus::PROCESSING}}</option>
                                <option value="{{\App\Enums\OrderStatus::DELIVERED}}">{{\App\Enums\OrderStatus::DELIVERED}}</option>
                                <option value="{{\App\Enums\OrderStatus::CANCELED}}">{{\App\Enums\OrderStatus::CANCELED}}</option>
                            @elseif($order->status == \App\Enums\OrderStatus::DELIVERED)
                                <option value="{{\App\Enums\OrderStatus::DELIVERED}}">{{\App\Enums\OrderStatus::DELIVERED}}</option>
                                <option value="{{\App\Enums\OrderStatus::WAIT_PAYMENT}}">{{\App\Enums\OrderStatus::WAIT_PAYMENT}}</option>
                                <option value="{{\App\Enums\OrderStatus::PROCESSING}}">{{\App\Enums\OrderStatus::PROCESSING}}</option>
                                <option value="{{\App\Enums\OrderStatus::SHIPPING}}">{{\App\Enums\OrderStatus::SHIPPING}}</option>
                                <option value="{{\App\Enums\OrderStatus::CANCELED}}">{{\App\Enums\OrderStatus::CANCELED}}</option>
                            @else
                                <option value="{{\App\Enums\OrderStatus::CANCELED}}">{{\App\Enums\OrderStatus::CANCELED}}</option>
                                <option value="{{\App\Enums\OrderStatus::WAIT_PAYMENT}}">{{\App\Enums\OrderStatus::WAIT_PAYMENT}}</option>
                                <option value="{{\App\Enums\OrderStatus::PROCESSING}}">{{\App\Enums\OrderStatus::PROCESSING}}</option>
                                <option value="{{\App\Enums\OrderStatus::SHIPPING}}">{{\App\Enums\OrderStatus::SHIPPING}}</option>
                                <option value="{{\App\Enums\OrderStatus::DELIVERED}}">{{\App\Enums\OrderStatus::DELIVERED}}</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Create At</label>
                        <input type="text" class="form-control" name="title" value="{{$order->created_at}}"
                               disabled>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </section>
@endsection