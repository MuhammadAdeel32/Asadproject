
<div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body rounded-1">

                        <div class="card bg-success text-white">
                            <div class="card-header border-0">
                                <i class="fa fa-plus-circle"></i> Add New Category
                            </div>
                        </div>

                     <form wire:submit.prevent="save">
                        <div class="row">
                        <!-- Title -->
                        <div class="mb-2 mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="title" type="text" id="title" class="form-control">
                            @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success rounded-2 me-2">Add</button>
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
