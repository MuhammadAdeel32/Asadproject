<div class="container mt-3 mb-3">
    <div class="card shadow">
        <div class="card-header bg-info text-white fw-bold">
            <i class="fa fa-chart-line"></i> Sales Analytics
        </div>
        <div class="card-body">

            {{-- Date Filters --}}
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label>Start Date</label>
                    <input type="date" class="form-control" wire:model="startDate">
                </div>
                <div class="col-md-4">
                    <label>End Date</label>
                    <input type="date" class="form-control" wire:model="endDate">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button class="btn btn-primary w-100" wire:click="search">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>

            {{-- Results --}}
            @if($sales && count($sales))
                <div class="table-responsive mt-3 mb-2">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Discount</th>
                                <th>Final</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $index => $sale)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $sale->customer->name ?? 'N/A' }}</td>
                                    <td>{{ $sale->total }}</td>
                                    <td>{{ $sale->discount }}</td>
                                    <td>{{ $sale->final }}</td>
                                    <td>{{ $sale->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @elseif($startDate && $endDate)
                <p class="text-danger mt-3">No sales found for the selected date range.</p>
            @endif

        </div>
    </div>
</div>

