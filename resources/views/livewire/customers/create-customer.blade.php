<div>
<div class="container-fluid mb-3">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <!-- Card Start -->
            <div class="card shadow">
                <div class="card-header border-0 text-light fw-bold" style="background-color:#009933;">
                    <i class="fa fa-plus-circle"></i> {{ __('customers.create_customer') }}
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="customersave">
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="form-label">
                                <i class="fa-solid fa-user"></i> {{ __('customers.name') }}
                            </label>
                            <input type="text" class="form-control" wire:model="name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">
                                <i class="fa-solid fa-envelope"></i> {{ __('customers.email') }}
                            </label>
                            <input type="text" class="form-control" wire:model="email">
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="number" class="form-label">
                                <i class="fa-solid fa-phone"></i> {{ __('customers.phone') }}
                            </label>
                            <input type="tel" class="form-control" wire:model="phone" required>
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address" class="form-label">
                                <i class="fa-solid fa-location-dot"></i> {{ __('customers.address') }}
                            </label>
                            <textarea class="form-control" wire:model="address" rows="3" required></textarea>
                        </div>

                        <div class="d-flex mt-1">
                            <button type="submit" class="btn text-white fw-bold" style="background-color:#009933;">
                                {{ __('customers.create_button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Card End -->
        </div>

        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header text-white fw-bold" style="background-color:#009933;">
                    <i class="fa fa-users"></i> {{ __('customers.customer_list') }}
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('customers.name') }}</th>
                                <th>{{ __('customers.email') }}</th>
                                <th>{{ __('customers.phone') }}</th>
                                <th>{{ __('customers.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($customers as $index => $customer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email ?? __('customers.na') }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>
                                        <a href="{{ route('customers.edit.customer', $customer->id) }}">
                                            <button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
                                        </a>
                                        <button class="btn btn-danger" wire:click="customerDelete({{ $customer->id }})" wire:confirm="{{ __('customers.confirm_delete') }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">{{ __('customers.address') }}</th>
                                </tr>
                                <tr>
                                    <td colspan="4">{{ $customer->address }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">{{ __('customers.no_customers') }}</td>
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
