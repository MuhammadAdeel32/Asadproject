<div>
  
  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Crony <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-30">Sign in to continue</div>

        <form wire:submit.prevent="login">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your email" wire:model="email">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your password" wire:model="password">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign In <i class="fa fa-spin fa-spinner" wire:loading></i> </button>

            @if (session()->has('error'))
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
            @endif
        </form>

    </div>
  </div>
 
</div>