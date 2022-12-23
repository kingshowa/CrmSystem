@extends("layouts.frontOfficeMaster")

@Section("frontContent")

@php ($label = 'login')

@if(1==1)
@php ($label = 'account')
@endif

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front-office')}}" class="logo">KMHI<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front-office')}}">Home</a></li>
                            <li><a href="{{url('front-office/cars')}}">Cars</a></li>

                            <li><a href="{{url('front-office/team')}}">Team</a></li>
                            
                            <li><a href="{{url('front-office/contact')}}">Contact</a></li>

                            <li id="login"><a href="{{url('front-office/'.$label)}}" class="active">{{ $label }}</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('assets-front/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>feel free to manage your <em>details</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section profile" style="margin-top:40px;" >
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" style="background-color: gray; border-radius: 5px;">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">My Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview1">Company Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit My Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit1">Edit Company Profile</button>
                            </li>
                            
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Oppotunities</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2 col-lg-7">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Contact Details</h5>

                                @if($contact != null)

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->nom}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Prenom</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->prenom}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Fonction</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->fonction}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telephone</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->telephone}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->email}}</div>
                                </div>

                                @endif
                            </div>

                            <div class="tab-pane fade profile-overview" id="profile-overview1">

                                <h5 class="card-title">Company Details</h5>

                                @if($contact != null)

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Company Name</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->societe}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->adresse}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone Number</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->telephone}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Website</div>
                                    <div class="col-lg-9 col-md-8">{{$contact->site_web}}</div>
                                </div>
                                @endif
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            @if($contact != null)
                                <!-- Profile Edit Form -->
                                <form action="{{url('contact/update_by_contact/'.$contact->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    
                                    <div class="row mb-3">
                                    <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nom" type="text" class="form-control" id="firstName" value="{{$contact->nom}}">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="surName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="prenom" type="text" class="form-control" id="surName" value="{{$contact->prenom}}">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fonction" type="text" class="form-control" id="company" value="{{$contact->fonction}}">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="client" type="text" class="form-control" id="Job" value="{{$contact->societe}}" disabled>
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="telephone" type="text" class="form-control" id="Phone" value="{{$contact->telephone}}">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email" value="{{$contact->email}}">
                                    </div>
                                    </div>

                                    <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>

                                    
                                </form><!-- End Profile Edit Form -->
                                @endif
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit1">
                                
                                @if($contact != null)
                                <!-- company Profile Edit Form -->
                                <form action="{{ url('client/update_by_contact/'.$contact->clientID)}}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}

                                    <div class="row mb-3">
                                        <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Company Name</label>
                                        <div class="col-md-8 col-lg-9">
                                        <input name="societe" type="text" class="form-control" id="firstName" value="{{$contact->societe}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                        <textarea name="adresse" class="form-control" id="about" style="height: 30px">{{$contact->adresse}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                        <input name="telephone" type="text" class="form-control" id="Phone" value="{{$contact->telephone}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Website</label>
                                        <div class="col-md-8 col-lg-9">
                                        <input name="site_web" type="text" class="form-control" id="Email" value="{{$contact->site_web}}">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                                @endif
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="{{url('changepassword/'.$contact->id)}}" method="POST">
                                <input type="hidden" name="_method" value="PUT" >
                                        {{ csrf_field() }}

                                    <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword1" type="password" class="form-control" id="newPassword">
                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword2" type="password" class="form-control" id="renewPassword">
                                    </div>
                                    </div>

                                    <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                                </div>
                        </div><!-- End Bordered Tabs -->

                        <div class="tab-content pt-2 col-lg-12">
                            <div class="tab-pane fade pt-3 " id="profile-settings">

                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Stage</th>
                                        <th scope="col">Closing Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($opps as $opp)
                                    <tr>
                                        <th scope="row"><a href="#">{{$opp->id}}</a></th>
                                        <td>{{$opp->nom}}</td>
                                        <td>{{$opp->etape}}</td>
                                        <td>{{$opp->date_cloture}}</td>
                                        
                                        <td>
                                            <a class="collapsed" href="{{url('acc-opportunite/'.$opp->id)}}">
                                                <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                                            </a>
                                        </td>
                                        <!-- <td>
                                            <a class="collapsed" href="{{url('')}}">
                                                <button class="btn btn-light btn-sm"><i class="bi bi-paper-fill"></i></button>
                                            </a>
                                        </td> -->
                                    </tr>

                                    @endforeach
                                    
                                    </tbody> 
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection