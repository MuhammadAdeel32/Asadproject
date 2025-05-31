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

    <title> New Project System | Web Technologies</title>

    <link href="{{ asset('assets/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- SweetAlert2 JS -->

<!-- Bootstrap Icons -->
     <link href="{{ asset('assets/bootstrap-icons-1.13.1/font/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- vendor css -->
    <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/all.min.css') }}">

      @livewireStyles
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css')}}">
  </head>

  <body>
   
 <div class="br-logo"><a href="#"><span>[</span>AKNUR TEXTILE<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-10">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div>
        </a>
        

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-box-open"></i>
                <span class="menu-item-label">Products</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
          
            <li class="nav-item"><a href="{{ route('products.brand')}}" class="nav-link">Brand</a></li>
            <li class="nav-item"><a href="{{ route('products.category')}}" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="{{ route('products.new')}}" class="nav-link">New Product</a></li>
            <li class="nav-item"><a href="{{ route('products.stock-management')}}" class="nav-link">Stock Management</a></li>
           
        </ul>

       

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-cart-shopping"></i>
                <span class="menu-item-label">Sales</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('sales.new')}}" class="nav-link">New Sales</a></li>
            <li class="nav-item"><a href="{{ route('sales.history')}}" class="nav-link">History</a></li>
            </ul>


             <a href="{{ route('analytics')}}" class="text-white">
            <div class="br-menu-item">
               <i class="fas fa-chart-pie"></i>
                <span class="menu-item-label">Analytics</span>
            </div>
        </a>

         <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-users"></i>
                <span class="menu-item-label">Customers</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('customers.create')}}" class="nav-link">Create Customer</a></li>
            <li class="nav-item"><a href="{{ route('customers.history')}}" class="nav-link">History</a></li>
            
        </ul>
       

         <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-users"></i>
                <span class="menu-item-label">Users</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('users.create')}}" class="nav-link">Create User</a></li>
            <li class="nav-item"><a href="{{ route('users.all')}}" class="nav-link">All Users</a></li>
            
        </ul>
       
             

         <a href="{{ route('setting')}}" class="text-white">
            <div class="br-menu-item">
                <i class="fas fa-cogs"></i>
                <span class="menu-item-label">Settings</span>
            </div>
        </a>


       
    
        <a href="{{ route('logout')}}" class="text-white">
            <div class="br-menu-item">
                <i class="fas fa-sign-out-alt"></i>
                <span class="menu-item-label">Log Out</span>
            </div>
        </a>
    </div>
</div>

<label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>


    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
       
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 " data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div>
        
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Katherine</span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- br-sideright -->
    <div class="br-mainpanel">
      <div class="br-content">
        <div class="content-wrapper">
          {{-- Menu --}}
          <div class="container-fluid ">
            {{$slot}}
          </div>
      </div>
      <!-- <footer class="br-footer">
            <div class="footer-left">
              <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
              <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
              <span class="tx-uppercase mg-r-10">Share:</span>
              <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
              <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer> -->
    </div>
</div>
@livewireScripts


    <script src="{{ asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{ asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ asset('lib/moment/moment.js')}}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{ asset('lib/peity/jquery.peity.js')}}"></script>
    <script src="{{ asset('lib/chartist/chartist.js')}}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('lib/d3/d3.js')}}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{ asset('assets/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js') }}"></script>


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
  </body>
</html>
