<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
            <div class="nk-app-root">
              <div class="nk-wrap">
                <div class="nk-content nk-content-lg nk-content-fluid">
                  <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                      <div class="nk-content-body">
                        <div class="card card-bordered mb-5">
                          <div class="card-header">
                            <h4 class="mb-0 py-1">Your Transactions</h4>
                            <div class="card-header-action"></div>
                          </div>
                          <div class="card-body p-0">
                            <div class="table-responsive">
                              <table class="table table-striped table-borderless">
                                <thead>
                                  <tr>
                                    <th class="text-primary">Date</th>
                                    <th class="text-primary">Invoice</th>
                                    <th class="text-primary">Amount</th>
                                    <th class="text-primary">Status</th>
                                    <th class="text-primary">Description</th>
                                  </tr>
                                </thead>
          
                                <tbody id="get_data">
                                    @if(count($deposits) >= 1)
                                    @foreach($deposits as $deposit)
                                    <tr>
                                        <td>{{ $deposit->created_at }}</td>
                                        <td style="font-size: 12px; font-weight: bold;">{{ $deposit->hash }}</td>
                                        <td>${{ $deposit->amount / 100 }}</td>
                                        <td style="font-size: 12px; font-weight: bold;"><p style="background-color: #ffbf43; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px;">{{ $deposit->confirmation_status }}</p></td>
                                        <td>{{ $deposit->description }}</td>
                                      </tr>
                                    @endforeach
                                    @endif

                                    @if(count($transfers) >= 1)
                                    @foreach($transfers as $transfer)
                                    <tr>
                                        <td>{{ $transfer->created_at }}</td>
                                        <td style="font-size: 12px; font-weight: bold;">{{ $transfer->hash }}</td>
                                        <td>${{ $transfer->amount / 100 }}</td>
                                        <td style="font-size: 12px; font-weight: bold;"><p style="background-color: #ffbf43; color: #fff; width: fit-content; padding: 2px 5px; border-radius: 5px;">{{ $transfer->status }}</p></td>
                                        <td>{{ $transfer->description }}</td>
                                      </tr>
                                    @endforeach
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
              </div>
            </div>
        </div>
      </div>      
</x-app-layout>