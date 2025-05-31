

 <div class="d-flex align-items-center justify-content-center ht-100v">
      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
          <span class="tx-normal">[</span> CHANGE PASSWORD <span class="tx-normal">]</span>
        </div>
        <div class="tx-center mg-b-20">Reset Password here</div>

        <form wire:submit.prevent="change">

           @if (session()->has('message'))
                <p class="text-success">{{ session('message') }}</p>
            @endif


            @if (session()->has('error'))
            <p class="alert alert-danger mt-2">{{ session('error') }}</p>
            @endif
             
            <div>
                <label for="current_password" class="form-label">
                </label>
                <input
                    type="password"
                    id="current_password"
                    wire:model.defer="current_password"
                    class="form-control"
                    placeholder="Enter Current Password";
                />
                @error('current_password')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password -->
            <div>
                <label for="new_password" class="form-label">
                </label>
                <input
                    type="password"
                    id="new_password"
                    wire:model.defer="new_password"
                    class="form-control"
                   placeholder="Enter New Password";

                />
                @error('new_password')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm New Password -->
            <div>
                <label for="confirm_new_password" class="form-label">
                </label>
                <input
                    type="password"
                    id="confirm_new_password"
                    wire:model.defer="confirm_new_password"
                    class="form-control"
                    placeholder="Confirm New Password";
                />
                @error('confirm_new_password')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between mt-3">
                <button type="submit" class="btn btn-info form-control">
                    Change Password
                </button>
            </div>

            <!-- Success Message -->
           
        </form>
    </div>
</div>
