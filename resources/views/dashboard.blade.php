<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                       <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                          <i class="ri-pantone-line"></i>
                       </div>
                       <p class="text-secondary" style="font-weight: bold;">Total Orders</p>
                       <div class="d-flex align-items-center justify-content-between">
                          <h4><b>{{ $total_orders }}</b></h4>
                          {{-- <div id="iq-chart-box1"></div> --}}
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title" style="font-weight: bold;">Recent Orders</h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                        <a href="{{ route('order.create') }}">
                           <button class="btn btn-primary"><b><span style="font-size: 11px !important;">Create new order</span></b></button>
                        </a>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="table mb-0">
                             <thead class="thead-light">
                                <tr>
                                   <th scope="col">Tracking Code</th>
                                   <th scope="col">Sender</th>
                                   <th scope="col">Receiver</th>
                                   <th scope="col">Created On</th>
                                   <th scope="col">Status</th>
                                </tr>
                             </thead>
                             <tbody>
                                @if(count($most_recent_orders) >= 1)
                                @foreach($most_recent_orders as $order)
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
                                 </tr>
                                @endforeach
                                @else
                                 <td colspan="10" style="font-size: 12px; text-align: center;">No recent orders.</td>
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
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="p-6 text-gray-900">Balance: ${{ auth()->user()->balance }}</h3>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <h3 class="p-6 text-gray-900">Total Debit: ${{ auth()->user()->total_withdrawn }}</h3>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <h3 class="p-6 text-gray-900">Total Credit: ${{ auth()->user()->total_deposited }}</h3>
            </div>
        </div>
    </div> --}}
</x-app-layout>
