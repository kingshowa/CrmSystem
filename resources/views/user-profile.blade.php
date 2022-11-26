@extends("layouts.Master")

@Section("content")

<!-- ======= Sidebar For contact ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('admin')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('prospects')}}">
      <i class="bi bi-person-plus-fill"></i><span>Prospects</span>
    </a>
    
  </li><!-- End Prospects Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('contacts')}}">
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
      <i class="bi bi-bar-chart"></i><span>Oppotunites</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('produits')}}">
      <i class="bi bi-gem"></i><span>Produits</span>
    </a>
  </li><!-- End Products Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('utilisateurs')}}">
      <i class="bi bi-person"></i>
      <span>Utilisateurs</span>
    </a>
  </li><!-- End Users Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('rendez')}}">
      <i class="bi bi-envelope"></i>
      <span>Rendez-Vous</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">
    @if($profile != null)
      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <h2>Kevin Anderson</h2>
          <h3>Stock Manager</h3>
          
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

          </ul>
          <div class="tab-content pt-2">
        
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
             

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nom</div>
                <div class="col-lg-9 col-md-8">{{$profile->nom}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Prenom</div>
                <div class="col-lg-9 col-md-8">{{$profile->prenom}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{$profile->email}}</div>
              </div>

              

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="" method="">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="../assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nom" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Prenom</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="prenom" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                  </div>
                   </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="" method="">

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>
      @endif
    </div>
  </div>
</section>
</main><!-- End #main -->

@endsection