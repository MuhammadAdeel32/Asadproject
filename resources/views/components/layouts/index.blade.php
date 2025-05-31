<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Installment Management System | Web Technologies</title>

    <!-- Local Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Local Bootstrap Icons -->
    <link href="{{ asset('assets/bootstrap-icons-1.13.1/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">

    <!-- Font Awesome (CDN) -->
<link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/all.min.css') }}">

    <!-- Livewire Styles -->
    @livewireStyles
  </head>

  <body>
    <div class="app-wrapper"> 
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Vendor JS -->
    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('lib/moment/moment.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/d3/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>

    <!-- Local Bootstrap JS -->
    <script src="{{ asset('assets/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- App Scripts -->
    <script src="{{ asset('js/bracket.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <script>
      $(function(){
        'use strict'

        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>

    @livewireScripts

    <script>
      Livewire.on('swal:modal', data => {
          Swal.fire({
              icon: data.type,
              title: data.title,
              text: data.text,
              timer: 3000
          });
      });
    </script>

  </body>
</html>
