<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="color: #1e3d73 !important">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title" style="font-weight: bold;">All Orders</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{ route('order.create') }}">
                                    <button class="btn btn-primary"><b><span style="font-size: 11px !important;">Create new
                                        order</span></b></button>
                                </a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Sender</th>
                                            <th scope="col">Receiver</th>
                                            <th scope="col">Created On</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($orders) >= 1)
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td><b>{{ $order->carrier_reference }}</b></td>
                                                    <td>{{ $order->sender_fullname }}</td>
                                                    <td>{{ $order->receiver_fullname }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>
                                                        <div class="badge badge-pill badge-primary">
                                                            {{ $order->status }}
                                                        </div>
                                                    </td>
                                                    <td class="pl-4">
                                                        <div class="dropdown">
                                                            <span class="text-primary" id="dropdownMenuButton5"
                                                                data-toggle="dropdown">
                                                                <i class="ri-settings-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-bottom"
                                                                aria-labelledby="dropdownMenuButton5">
                                                                <a class="dropdown-item" href="{{ route('order.edit', [$order->id]) }}"><i
                                                                        class="ri-ball-pen-fill mr-2"></i>Edit</a>
                                                                <a class="dropdown-item text-danger" href="{{ route('order.destroy', [$order->id]) }}"><i
                                                                        class="ri-delete-bin-2-fill mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/generate-pdf?order_id={{$order->id}}">
                                                            <button class="btn btn-primary"><b><span style="font-size: 11px !important;"><i class="fas fa-download"></i> Download Receipt</span></b></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <td colspan="10" style="font-size: 12px; text-align: center;">No recent
                                                orders.</td>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
