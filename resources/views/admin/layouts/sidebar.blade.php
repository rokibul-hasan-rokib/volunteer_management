  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          {{-- @if (auth()->user()->role == \App\Models\User::ROLE_ADMIN) --}}



          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('user.index') }}">
                  <i class="bi bi-person"></i>
                  <span>User</span>
              </a>
          </li><!-- End Profile Page Nav -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('project.index') }}">
                  <i class="bi bi-person"></i>
                  <span>Project</span>
              </a>
          </li><!-- End Profile Page Nav -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('event.index') }}">
                  <i class="bi bi-person"></i>
                  <span>Event</span>
              </a>
          </li><!-- End Profile Page Nav -->
          {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('abouts.index')}}">
          <i class="bi bi-envelope"></i>
          <span>About</span>
        </a>
      </li><!-- End Contact Page Nav --> --}}




          {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('services.index')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Service</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('contacts') }}">
                  <i class="bi bi-question-circle"></i>
                  <span>Contact</span>
              </a>
          </li><!-- End F.A.Q Page Nav -->
          {{-- @elseif(auth()->user()->role == \App\Models\User::ROLE_USER) --}}

          <li class="nav-item">
              <a class="nav-link collapsed" href="">
                  <i class="bi bi-question-circle"></i>
                  <span>Task</span>
              </a>
          </li>
          {{-- @else
      <p>You do not have access to this section.</p>
      @endif --}}

      </ul>

  </aside><!-- End Sidebar-->
