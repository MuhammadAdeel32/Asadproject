<div>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sign In</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css')}}">
  </head>

  <body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> AKNUR TEXTILE <span class="tx-normal">]</span></div>
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
            <button type="submit" class="btn btn-info btn-block">Sign In</button>

            @if (session()->has('error'))
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
            @endif
        </form>

    </div>
  </div>

    <script src="{{ asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{ asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js')}}"></script>

  </body>
</html>


</div>
