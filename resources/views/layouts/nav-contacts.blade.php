@extends("layouts.Master")

@Section("content")
<!-- ======= Sidebar For contact ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

@if (isset($_SESSION['admin']))
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/admin')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @else
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/commerciale')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @endif

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('prospects')}}">
      <i class="bi bi-person-plus-fill"></i><span>Prospects</span>
    </a>
    
  </li><!-- End Prospects Nav -->

  <li class="nav-item">
    <a class="nav-link" href="{{ url('contacts')}}">
      <i class="bi bi-person-lines-fill"></i><span>Contacts</span>
    </a>
  </li><!-- End Contacts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('clients')}}">
      <i class="bi bi-person-check-fill"></i><span>Clients</span>
    </a>
  </li><!-- End Clients Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('opportunites')}}">
      <i class="bi bi-bar-chart"></i><span>Oppotunities</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  @if(isset($_SESSION['admin']))
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('produits')}}">
      <i class="bi bi-gem"></i><span>Products</span>
    </a>
  </li><!-- End Products Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('utilisateurs')}}">
      <i class="bi bi-person"></i>
      <span>Users</span>
    </a>
  </li><!-- End Users Nav -->
  @endif

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('rendez')}}">
      <i class="bi bi-envelope"></i>
      <span>Appointments</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->


@yield("contacts")

@endsection