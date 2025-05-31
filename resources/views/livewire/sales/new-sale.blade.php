<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle"></i> New Sale
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Select Product</th>
                    <th>Select Customer</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select wire:model.defer="product_id" id="product_id" class="form-control">
                            <option value="">-- Select Product --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                            @endforeach
                        </select>
                        @error('product_id') 
                            <div class="text-danger small">{{ $message }}</div> 
                        @enderror
                    </td>
                    <td>
                        <select wire:model.defer="customer_id" class="form-control">
                            <option value="">-- Select Customer --</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                        @error('customer_id') 
                            <div class="text-danger small">{{ $message }}</div> 
                        @enderror
                    </td>
                    <td>
                        <input type="number" wire:model.defer="quantity" class="form-control" min="1">
                        @error('quantity') 
                            <div class="text-danger small">{{ $message }}</div> 
                        @enderror
                    </td>
                    <td>
                        <button wire:click="addSale" class="btn btn-primary btn-sm">Add</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
