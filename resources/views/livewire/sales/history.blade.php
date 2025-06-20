<div>
    <div class="card shadow">
        <div class="card-header text-white fw-bold" style="background-color:#009933;">
            <i class="fa fa-users"></i> Sales History
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Discount</th>
                        <th>Final</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sales as $index => $sale)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $sale->customer?->name ?? 'N/A' }}</td>
                            <td>{{ $sale->total }}</td>
                            <td>{{ $sale->discount }}</td>
                            <td>{{ $sale->final }}</td>
                            
                            <td>
                                 <a href="{{ route('sales.detail',$sale->id)}}"  class="btn btn-info btn-sm" >
                                    <i class="fa fa-eye"></i> View
                                </a>
                                <button class="btn btn-danger btn-sm" wire:click="deleteSale({{ $sale->id }})" wire:confirm="Are you sure to delete it">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center">No sales found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
