<div>
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-lg-12">

                <div class="card shadow">
                    <div class="card-header text-white fw-bold" style="background-color:#009933;">
                        <i class="fa fa-users"></i> {{ __('products.product_list') }}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('products.title')}}</th>
                                    <th>{{ __('products.quantity')}}</th>
                                    <th>{{ __('products.price')}}</th>
                                    <th>{{ __('products.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $product->title}}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> {{ __('products.view') }}
                                            </a>
                                            <a href="#" class="btn btn-success btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i> 
                                            </a>
                                            <button wire:click="#" wire:confirm="Are you want to delete it" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">{{ __('products.products_not_found') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

