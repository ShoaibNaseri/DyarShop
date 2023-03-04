     <!-- Navbar STart -->
     <header id="topnav" class="defaultscroll sticky">
         <div class="container">
             <!-- Logo container-->
             <a class="logo" href="index.html">
                 <img src="{{url('front/assets')}}/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                 <img src="{{url('front/assets')}}/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
             </a>

             <!-- Logo End -->

             <!-- End Logo container-->
             <div class="menu-extras">
                 <div class="menu-item">
                     <!-- Mobile menu toggle-->
                     <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                         <div class="lines">
                             <span></span>
                             <span></span>
                             <span></span>
                         </div>
                     </a>
                     <!-- End mobile menu toggle-->
                 </div>
             </div>



             <div id="navigation">
                 <!-- Navigation Menu-->
                 <ul class="navigation-menu @yield('navStyle')">
                     <li><a href="{{route('home')}}" onclick="" class=" sub-menu-item">Home</a></li>

                     <li><a href="#contact" onclick="" class="btn sub-menu-item">Contact</a></li>

                     <li><a href="#team" onclick="scrollElement()" class="btn sub-menu-item">Team</a></li>


                     <li><a href="{{route('productIndex')}}" onclick="scrollElement()" class="btn sub-menu-item">Products</a></li>

                     <li><a href="#about" class="sub-menu-item">About</a></li>
                     <li class="has-submenu parent-parent-menu-item">
                         <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                     </li>
                 </ul><!--end navigation menu-->
             </div><!--end navigation-->
         </div><!--end container-->
     </header><!--end header-->
     <!-- Navbar End -->