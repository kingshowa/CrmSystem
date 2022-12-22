@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")


<main id="main" class="main">
@if(session()->has('echec'))
      <div class="alert alert-warning">
        {{session()->get('echec')}}
      </div>
    @endif

<div class="pagetitle">
  <h1>Add Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="utilisateurs-view">Utilisateurs</a></li>
      <li class="breadcrumb-item active">Add Utilisateurs</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">
        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Role</label>
                  
                
              <!-- <input type="checkbox" id="contactChoice1" name="role" value="radio1"id="myCheck" >
               <label for="contactChoice1">Admin</label> -->
               <input type="checkbox" id="myCheck" onclick="myFunction()">
              <label for="contactChoice2">Admin</label>

               <input type="checkbox" id="myCheck2" onclick="myFunction()">
              <label for="contactChoice2">Commercial</label>

               <input type="checkbox" id="myCheck3" onclick="myFunction()">
              <label for="contactChoice2">Contact</label>
              <!-- <input type="checkbox" id="contactChoice3"name="role" value="radio3"id="contactCheck" onclick="contactCheck()">
              <label for="contactChoice3">Contact</label> -->

             
        <form id="form1" action="{{url('utilisateurs/store')}}" style="display:none;"method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}  
              
                <div class="row mb-3" id="id1">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="firstName" type="text" class="form-control" id="firstName">
                  </div>
                </div>
                

                <div class="row mb-3" id="id2">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Surname</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="surName" type="text" class="form-control" id="surName">
                  </div>
                </div>

                <div class="row mb-3" >
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email">
                  </div>
                </div>
                <div>
                <div class="row mb-3" id="id4">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="pass">
                  </div>
                  
                  <div class="row mb-3" id="id7">
                 
                  </div>
                </div>
                <div>
                <div class="row mb-3" id="id5">
                      <label for="Photo" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="image" type="file" class="form-control" id="Photo" width="60px" height="60px" accept="image/png, image/jpeg">
                      </div>
                    </div>
                  <div>
                  </div>
                  <div class="row mb-3" id="id3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" id="select_box" name="contactID">
                          <option selected>Choose Contact</option>
                          @foreach($contact as $contact)
                          <option  value="{{$contact->id}}">{{$contact->nom}} {{$contact->prenom}}</option>
                          @endforeach
                        </select>
                        <!-- <input name="client"  type="text" class="form-control" id="Email" required> -->
                       
                      </div>
                    </div>
                 
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Utilisateurs</button>
                </div>
              </form><!-- End Profile Edit Form -->

              <script>
                function myFunction() {
                var checkBox = document.getElementById("myCheck");
                var checkBox2 = document.getElementById("myCheck2");
                var checkBox3 = document.getElementById("myCheck3");
                var form1 = document.getElementById("form1");
               
                var id1 = document.getElementById("id1");
                var id2 = document.getElementById("id2");
                var id3 = document.getElementById("id3");

                if (checkBox.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio1'>";
                  id3.style.display = "none";
                }else if(checkBox2.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio2'>";
                  id3.style.display = "none";

                }else if(checkBox3.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio3'>";
                  id1.style.display = "none";
                  id2.style.display = "none";
                  id3.style.display = "block";

                }
                 else {
                  form1.style.display = "none";
                 
               }
               }
         
               
              
               
</script>


              <script>
                function myFunction3() {
                var checkBox = document.getElementById("myCheck3");
                var form1 = document.getElementById("form1");
                var id1 = document.getElementById("id1");
                var id2 = document.getElementById("id2");
                var id3 = document.getElementById("id3");
                if (checkBox.checked == true){
                  form1.style.display = "block";
                  document.getElementById("radio").innerHTML = "radio3";
                  id1.style.display = "none";
                  id2.style.display = "none";
                  id3.style.display = "block";
                  
               }else {
                  form1.style.display = "none";
                  id1.style.display = "block";
                  id2.style.display = "block";
                 
               }
               }
</script>
        
            </div>
      </div>

    </div>

  </div>
</section>




</main><!-- End #main -->

@endsection