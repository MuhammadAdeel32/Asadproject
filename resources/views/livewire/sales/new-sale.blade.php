<div>
    @include('includes.flash')

    <!-- Sale Form -->
    <div class="card">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <div>
                <i class="fa fa-plus-circle"></i> New Sale
            </div>
            <div>
                <label class="mb-0">Total: {{ number_format($this->getTotal(), 2) }}</label>
            </div>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-4 mb-2">
                    <label><i class="fa fa-user"></i> Customer</label>
                    <select wire:model.defer="customer_id" class="form-control">
                        <option value="">-- Select Customer --</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ ucfirst($customer->name) }}</option>
                        @endforeach
                    </select>
                    @error('customer_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-4 mb-2">
                    <label><i class="fa fa-box"></i> Product</label>
                    <select wire:model.defer="product_id" class="form-control">
                        <option value="">-- Select Product --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ ucfirst($product->title) }} (Stock: {{ $product->quantity }})</option>
                        @endforeach
                    </select>
                    @error('product_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-3 mb-2">
                    <label><i class="fa fa-sort-numeric-up"></i> Quantity</label>
                    <input type="number" wire:model.defer="quantity" class="form-control" min="1">
                    @error('quantity') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-1 d-flex align-items-end mb-2">
                    <button wire:click="addSale" class="btn btn-primary btn-sm w-100">
                        <i class="fa fa-plus-circle"></i> Add
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Sale Items -->
    <div class="mt-3">
        @if(count($cart) > 0)
           <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="fa fa-list"></i> Sale Items
                </div>
                  <table class="table table-bordered table-sm">
                    <thead class="table-light">
                        <tr>
                           <th><i class="fa fa-box"></i> Product</th>
                            <th><i class="fa fa-sort-numeric-up"></i> Qty</th>
                            <th><i class="fa fa-dollar-sign"></i> Price</th>
                            <th><i class="fa fa-calculator"></i> Subtotal</th>
                            <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $index => $item)
                            <tr>
                                <td>{{ $item['product_name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ number_format($item['price'], 2) }}</td>
                                <td>{{ number_format($item['subtotal'], 2) }}</td>
                                <td>
                                    <button wire:click="removeItem({{ $index }})" class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>

            <div class="d-flex justify-content-between align-items-center mt-2">
                <button wire:click="saveSale" class="btn btn-info float-end btn-sm"> <i class="fa fa-save"></i> Save Sale</button>
            </div>

        @else
            <div class="alert alert-info">
                No items in cart. Please add products.
            </div>
        @endif
    </div>
</div>
