

 <div class="d-flex align-items-center justify-content-center ht-100v">
      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
          <span class="tx-normal">[</span>  NEW USER  <span class="tx-normal">]</span>
        </div>
        <div class="tx-center mg-b-20">Admins Register here</div>

        <form wire:submit.prevent="register">

           @if (session()->has('message'))
                <p class="text-success">{{ session('message') }}</p>
            @endif


            @if (session()->has('error'))
            <p class="alert alert-danger mt-2">{{ session('error') }}</p>
            @endif
             
            <div>
                <label for="name" class="form-label">
                </label>
                <input 
                    type="text"
                    id="current_password"
                    wire:model.defer="name"
                    class="form-control"
                    placeholder="Enter Your Name";
                />
                @error('name')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>


                   <div>
                <label for="name" class="form-label">
                </label>
                <input 
                    type="text"
                    id="email"
                    wire:model.defer="email"
                    class="form-control"
                    placeholder="Enter Your email";
                />
                @error('email')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>


            <!-- New Password -->
            <div>
                <label for="password" class="form-label">
                </label>
                <input
                    type="password"
                    id="password"
                    wire:model.defer="password"
                    class="form-control"
                   placeholder="Enter Password";

                />
                @error('password')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm New Password -->
            <div>
                <label for="password_confirmation" class="form-label">
                </label>
                <input
                    type="password"
                    id="password_confirmation"
                    wire:model.defer="password_confirmation"
                    class="form-control"
                    placeholder="Confirm Password";
                />
                @error('password_confirmation')
                    <p class="text-danger text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between mt-3">
                <button type="submit" class="btn btn-info form-control">
                    Create
                </button>
            </div>

            <!-- Success Message -->
           
        </form>
    </div>
</div>
