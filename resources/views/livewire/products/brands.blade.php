<div class="container mt-4">
    @include('includes.flash')
    <div class="row">
        {{-- Left Side Form --}}
        <div class="col-lg-4">
            <div class="card shadow-lg">
                 <div class="card-header border-0 bg-success text-white">
                    <i class="fa fa-plus-circle"></i> {{ __('products.add_brand') }}
                </div>
                <form class="card-body" wire:submit.prevent="save">
                    <div class="mb-2 mt-3">
                        <label for="title" class="form-label"><i class="fas fa-pen"></i> {{ __('products.title') }}</label>
                        <input wire:model="title" type="text" id="title" class="form-control">
                        @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success rounded-2 me-2">
                            {{ __('products.add_button') }} <i class="fa fa-spin fa-spinner" wire:loading></i>
                        </button>
                    </div>
                </form>
            </div>   
        </div>

        {{-- Right Side Brand Table --}}
        <div class="col-lg-8">
            <div class="card shadow mb-3">
                <div class="card-header text-white fw-bold" style="background-color:#009933;">
                    <i class="fa fa-users"></i> {{ __('products.brands_list') }}
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('products.title') }}</th>
                                <th>{{ __('common.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($brands as $index => $brand)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $brand->title }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" wire:click="deletebrand({{ $brand->id }})" wire:confirm>
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">{{ __('products.not_found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
