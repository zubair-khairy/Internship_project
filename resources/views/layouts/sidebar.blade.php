  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

       <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <!--  companies Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Companies-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Companies</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Companies-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{route('companies.index')}}">
              <i class="bi bi-circle"></i><span>Companies</span>
            </a>
          </li> 
        <li>
            <a href="{{route('companies.create')}}">
              <i class="bi bi-calendar2-plus-fill"></i><span>create company</span>
            </a>
          </li>
        </ul>
      </li><!-- End Companies  Nav -->



       <!--  employee Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#employee-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="employee-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{route('employees.index')}}">
              <i class="bi bi-circle"></i><span>employees</span>
            </a>
          </li> 
        <li>
            <a href="{{route('employees.create')}}">
              <i class="bi bi-calendar2-plus-fill"></i><span>create employee</span>
            </a>
          </li>

        </ul>
      </li><!-- End employess  Nav -->

    
     

     <li class="nav-heading">settings </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log out</span>
        </a>
      </li><!-- End Login Page Nav -->

     

    </ul>
       


  </aside>
  <!-- End Sidebar-->