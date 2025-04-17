<x-app-layout>
    <h1>Earnings history</h1>
    <p><b>Total earnings</b>: ${{ $total_earnings }}</p>
<br><br>
    <div class="card">
        <div class="card-header">
            <h4>View your earnings history below</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="table-2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped dataTable no-footer" id="table-2" role="grid"
                                aria-describedby="table-2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" rowspan="1" colspan="1" style="width: 277.617px;"
                                            aria-label="Date">Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 253.8px;" aria-label="Currency">Package</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1"
                                            colspan="1" style="width: 234.8px;"
                                            aria-label="Amount: activate to sort column ascending">Amount</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 313.783px;" aria-label="Status">Description</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    @foreach($matured_investments as $investment)
                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{ $investment->created_at }}</td>
                                        <td>{{ $investment->amount }}</td>
                                        <td>{{ $investment->payment_method }}</td>

                                        <td>
                                            <div class="badge badge-warning">{{ $investment->confirmation_status }}</div>
                                        </td>





                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
