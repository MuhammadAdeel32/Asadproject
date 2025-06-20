<div>

 @if($selectedSale && $selectedSaleProducts)
    <div class="container mb-3">
        <div class="row">
            <div class="col-sm-12">
        <div class="card shadow-lg bg-white">
            
            <div class="card-header text-white d-flex justify-content-between" style="background-color:#009933;" >
                <strong>Sale Detail - ID: {{ $selectedSale->id }}</strong>
                <a href="{{ route('sales.history')}}" class="btn btn-sm btn-light">
                    <i class="fa fa-times"></i>
                </a>
            </div>

            <div class="card-body">
                <p><strong>Customer:</strong> {{ ucfirst($selectedSale->customer?->name ?? 'N/A') }}</p>
                <p><strong>Date:</strong> {{ $selectedSale->created_at->format('d-M-Y h:i A') }}</p>

                <hr>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($selectedSaleProducts as $item)
                            <tr>
                                <td>{{ $item->product?->title ?? 'N/A' }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->amount, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>

                <p><strong>Total:</strong> Rs. {{ number_format($selectedSale->total, 2) }}</p>
                <p><strong>Discount:</strong> Rs. {{ number_format($selectedSale->discount, 2) }}</p>
                <p><strong>Final:</strong> Rs. {{ number_format($selectedSale->final, 2) }}</p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endif



</div>
