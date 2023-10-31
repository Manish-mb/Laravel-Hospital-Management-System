<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="admin/assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Manish Bisen</span>
                  <span class="text-secondary text-small">Project Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('add_doctor_view')}}">
                <span class="menu-title">Add Doctors</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('show_appointment')}}">
                <span class="menu-title">Appointment</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('show_doctor')}}">
                <span class="menu-title">All Doctors</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Department</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
           
            
          </ul>
        </nav>