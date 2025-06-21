<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header  text-white fw-bold"  style="background-color:#009933;">
            <i class="fa fa-box"></i> Product Detail
        </div>
        <div class="card-body">

            {{-- Horizontal Product Info Table --}}
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped w-100 text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->brand?->title ?? 'N/A' }}</td>
                            <td>{{ $product->category?->title ?? 'N/A' }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Description --}}
            

            {{-- Thumbnail --}}
            <div class="mb-3">
                <h5><strong>Thumbnail:</strong></h5>
                @if ($product->thumbnail)
                    <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-fluid rounded" style="max-width: 400px;" alt="Product Thumbnail">
                @else
                    <p>N/A</p>
                @endif
            </div>

            <div class="mb-3">
                <h5><strong>Description:</strong></h5>
                <p>{{ $product->description ?? 'N/A' }}</p>
            </div>

            <a href="{{ route('products.stock-management') }}" class="btn btn-success">← Back to Product List</a>

        </div>
    </div>
</div>
