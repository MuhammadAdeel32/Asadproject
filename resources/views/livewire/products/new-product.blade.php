
<div>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg mb-3">
                <div class="card-body rounded-1">

                        <div class="card bg-success text-white">
                            <div class="card-header border-0">
                                <i class="fa fa-plus-circle"></i> Add New Product
                            </div>
                        </div>

                     <form wire:submit.prevent="Add">
                        <div class="row">
                            <!-- category -->
                           
                             <div class="col-md-6 mb-2 mt-3">
                                <label for="brand_id" class="form-label"> <i class="fas fa-tags"></i> Brand</label>
                                <select wire:model.defer="brand_id" id="brand_id" class="form-control">
                                    <option value="">-- Select Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        




                            <div class="col-md-6 mb-2 mt-3">
                                <label for="category_id" class="form-label"> <i class="fas fa-folder-open"></i> Category</label>
                                <select wire:model="category_id" id="category_id" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                       </div>

                            <!-- Brand -->
                           

                        <!-- Title -->
                        <div class="mb-2 mt-2">
                            <label for="title" class="form-label"> <i class="fas fa-pen"></i> Title</label>
                            <input wire:model="title" type="text" id="title" class="form-control">
                            @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-2 mt-4">
                            <label for="description" class="form-label"> <i class="fas fa-file-lines"></i> Description (Optional)</label>
                            <textarea wire:model="description" id="description" rows="3" class="form-control"></textarea>
                            @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6 mb-2 mt-3">
                                <label for="price" class="form-label" > <i class="fas fa-money-bill-wave"></i> Price (Optional)</label>
                                <input wire:model="price" id="no-arrows" type="number" step="any" min="0" id="price" class="form-control">
                                @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6 mb-2 mt-3">
                                <label for="quantity" class="form-label"> <i class="fas fa-sort-numeric-up"></i> Quantity</label>
                                <input wire:model="quantity" type="number" id="quantity" class="form-control">
                                @error('quantity') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                        </div>

                        
                         <div class="mb-2 mt-4">
                            <label for="thumbnail" class="form-label"> <i class="fas fa-image"></i> Thumbnail (Optional)</label>
                            <input wire:model="thumbnail" type="file" id="thumbnail" class="form-control">
                            @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>


                        

                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success rounded-2 me-2">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Table or Preview Area -->
        <div class="col-lg-8"></div>
    </div>
</div>
</div>
