<div class="d-flex align-items-center justify-content-center ht-100v">
    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
            <span class="tx-normal">[</span> {{ __('users.new_user') }} <span class="tx-normal">]</span>
        </div>
        <div class="tx-center mg-b-20">{{ __('users.register_title') }}</div>

        <form wire:submit.prevent="register">

            @if (session()->has('message'))
                <p class="text-success">{{ session('message') }}</p>
            @endif

            @if (session()->has('error'))
                <p class="alert alert-danger mt-2">{{ session('error') }}</p>
            @endif

            <!-- Name -->
            <div>
                <input 
                    type="text"
                    wire:model.defer="name"
                    class="form-control"
                    placeholder="{{ __('users.enter_name') }}"
                />
                @error('name') <p class="text-danger text-xs italic">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div>
                <input 
                    type="text"
                    wire:model.defer="email"
                    class="form-control"
                    placeholder="{{ __('users.enter_email') }}"
                />
                @error('email') <p class="text-danger text-xs italic">{{ $message }}</p> @enderror
            </div>

            <!-- Password -->
            <div>
                <input
                    type="password"
                    wire:model.defer="password"
                    class="form-control"
                    placeholder="{{ __('users.enter_password') }}"
                />
                @error('password') <p class="text-danger text-xs italic">{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <input
                    type="password"
                    wire:model.defer="password_confirmation"
                    class="form-control"
                    placeholder="{{ __('users.confirm_your_password') }}"
                />
                @error('password_confirmation') <p class="text-danger text-xs italic">{{ $message }}</p> @enderror
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-between mt-3">
                <button type="submit" class="btn btn-info form-control">
                    {{ __('users.create') }}
                </button>
            </div>
        </form>
    </div>
</div>
