<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header text-white fw-bold" style="background-color:#009933;">
            <i class="fa fa-box"></i> {{ __('products.product_detail') }}
        </div>
        <div class="card-body">

            {{-- Horizontal Product Info Table --}}
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped w-100 text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>{{ __('products.brand') }}</th>
                            <th>{{ __('products.category') }}</th>
                            <th>{{ __('products.title') }}</th>
                            <th>{{ __('products.quantity') }}</th>
                            <th>{{ __('products.price') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->brand?->title ?? __('products.not_available') }}</td>
                            <td>{{ $product->category?->title ?? __('products.not_available') }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Thumbnail --}}
            <div class="mb-3">
                <h5><strong>{{ __('products.thumbnail') }}: </strong></h5>
                @if ($product->thumbnail)
                    <img src="https://aknurtextile.com/storage/app/public/thumbnail/{{ $product->thumbnail }}" class="img-fluid rounded" style="max-width: 400px;" alt="Product Thumbnail">
                @else
                    <p>{{ __('products.not_available') }}</p>
                @endif
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <h5><strong>{{ __('products.description') }}:</strong></h5>
                <p>{{ $product->description ?? __('products.not_available') }}</p>
            </div>

            <a href="{{ route('products.stock-management') }}" class="btn btn-success">
                {{ __('products.back_to_list') }}
            </a>

        </div>
    </div>
</div>
