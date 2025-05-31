<div>
      <div class="container-fluid">
            <div class="row">
                   <div class="col-lg-12">

       <div class="card shadow">
    <div class="card-header  text-white fw-bold"  style="background-color:#009933;">
        <i class="fa fa-users"></i> Product List
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Catagory</th>
                    <th>Title</th>
                    <th>Description</th>
                   <th>Quantity</th>
                  <th>Price</th>
                  <th>Thumbnail</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                       <td>{{ $product->brand?->title ?? 'N/A' }}</td>
                        <td>{{ $product->category?->title ?? 'N/A' }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity}}</td>
                         <td>{{ $product->price }}</td>
                         <td>
                          @if ($product->thumbnail)
                        <img src="{{ asset('storage/' . $product->thumbnail) }}" width="100" alt="Product Thumbnail">
                    @else
                        N/A
                    @endif
                    </td>
                         <td>
                    <a href="{{ route('products.editproduct',$product->id)}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a>
                     <button class="btn btn-danger"  wire:click="deleteproduct({{$product->id}})"  wire:confirm="Realy You want to Delete it"><i class="fa-solid fa-trash"></i></button>

                   </td>
                    </tr>

                     @empty
                    <tr>
                        <td colspan="5" class="text-center"> Products Not found.</td>
                    </tr>
                  
                @endforelse
            </tbody>
        </table>
    </div>
</div>

       </div>

    </div>
</div>


</div> <!-- Single root element ends here -->



