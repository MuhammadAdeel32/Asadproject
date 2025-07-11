<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Card Start -->
                <div class="card shadow">
                    <div class="card-header text-center bg-success text-white">
                        <h5 class="mb-0">{{ __('customers.edit_info') }}</h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="updateCustomer">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('customers.name') }}:</label>
                                <input type="text" class="form-control" wire:model="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('customers.email') }}:</label>
                                <input type="text" class="form-control" wire:model="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">{{ __('customers.phone') }}:</label>
                                <input type="tel" class="form-control" wire:model="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('customers.address') }}:</label>
                                <textarea class="form-control" wire:model="address" rows="3" required></textarea>
                            </div>

                            <div class="d-flex">
                                <button type="submit" class="btn btn-success me-2">
                                    {{ __('customers.update_button') }}
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    {{ __('customers.reset_button') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Card End -->
            </div>
        </div>
    </div>
</div>
