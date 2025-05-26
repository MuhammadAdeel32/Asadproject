<!-- resources/views/components/layouts/app.blade.php -->
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
     
    <!-- vendor css -->
    <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css')}}" rel="stylesheet">
      @livewireStyles
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css')}}">
    
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css" rel="stylesheet">
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBgzWqIDvrjhnNEDuoFI06UyZYvBRhQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>

     

    <div class="app-wrapper"> 
        <main>
            {{ $slot }}
        </main>
    </div>


    <script src="{{ asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{ asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ asset('lib/moment/moment.js')}}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{ asset('lib/peity/jquery.peity.js')}}"></script>
    <script src="{{ asset('lib/chartist/chartist.js')}}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('lib/d3/d3.js')}}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js')}}"></script>


    <script src="{{ asset('js/bracket.js')}}"></script>
    <script src="{{ asset('js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('js/dashboard.js')}}"></script>
    <script>

      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
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

