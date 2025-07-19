<table>
    <thead>
        <tr>
            <th>Brand</th>
            <th>Category</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->brand->title ?? 'N/A' }}</td>
                <td>{{ $product->category->title ?? 'N/A' }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
