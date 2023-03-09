  <div class="app-sidebar">
      <div class="logo">
          <a href="index-2.html" class="logo-icon"><span class="logo-text">DyarShop</span></a>
      </div>
      <div class="app-menu">
          <ul class="accordion-menu">
              <li class="sidebar-title">
                  Main
              </li>
              <li class="active-page">
                  <a href="{{route('adminDashboard')}}" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
              </li>

              <li>
                  <a href="#"><i class="material-icons-two-tone">star</i>Front End<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                  <ul class="sub-menu">
                      <li>
                          <a href="{{route('slider.index')}}">Home Page Slider</a>
                      </li>
                      <li>
                          <a href="{{route('contact.index')}}">Contact</a>
                      </li>
                      <li>
                          <a href="{{route('team.index')}}">Team</a>
                      </li>
                      <li>
                          <a href="{{route('work.index')}}">Ho Do We Work</a>
                      </li>
                      <li>
                          <a href="{{route('service.index')}}">What We Do</a>
                      </li>



                  </ul>
              </li>




          </ul>
          <ul class="accordion-menu">
              <li class="sidebar-title">
                  Product Controll
              </li>

              <li>
                  <a href="#"><i class="material-icons-two-tone">menu</i>Product<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                  <ul class="sub-menu">
                      <li>
                          <a href="{{route('category.index')}}">Category</a>
                      </li>
                      <li>
                          <a href="{{route('product.index')}}">Products</a>
                      </li>




                  </ul>
              </li>




      </div>
  </div>
  <div class="app-container">
      <div class="search">
          <form>
              <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
          </form>
          <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
      </div>
      <div class="app-header">
          <nav class="navbar navbar-light navbar-expand-lg">
              <div class="container-fluid">
                  <div class="navbar-nav" id="navbarNav">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                          </li>

                      </ul>

                  </div>
                  <div class="d-flex">
                      <ul class="navbar-nav">



                          <li class="nav-item">
                              <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                          </li>


                          <li class="nav-item hidden-on-mobile">
                              <a class="nav-link" href="{{route('adminLogout')}}">Logout</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
      </div>