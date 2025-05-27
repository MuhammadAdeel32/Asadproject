<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
     <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bracket.css')}}">
    @livewireStyles
  </head>

  <body>
    <div class="d-flex align-items-center justify-content-center ht-100v">
      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
          <span class="tx-normal">[</span> Sign Up <span class="tx-normal">]</span>
        </div>
        <div class="tx-center mg-b-40">Admins Register here</div>

        <form wire:submit.prevent="register">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Your Name" wire:model.defer="name">
            @error('name') <span class="text-danger tx-12">{{ $message }}</span> @enderror
          </div>

          <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter Your Email" wire:model.defer="email">
            @error('email') <span class="text-danger tx-12">{{ $message }}</span> @enderror
          </div>

          <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter Your Password" wire:model.defer="password" autocomplete="new-password">
            @error('password') <span class="text-danger tx-12">{{ $message }}</span> @enderror
          </div>

          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" wire:model.defer="password_confirmation" autocomplete="new-password">
          </div>

          <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

      </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
    @livewireScripts

    <script>
      Livewire.on('redirect-to-login', () => {
        setTimeout(() => {
          window.location.href = "#";
        }, 1500);
      });
    </script>
  </body>
</html>

