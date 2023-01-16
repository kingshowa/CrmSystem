@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")


<main id="main" class="main">
@if(session()->has('echec'))
      <div class="alert alert-warning">
        {{session()->get('echec')}}
      </div>
    @endif

<div class="pagetitle">
  <h1>Add User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="utilisateurs-view">Users</a></li>
      <li class="breadcrumb-item active">Add User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">
        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Role</label>
                  
               <input type="radio" name="nwe" id="myCheck" onclick="myFunction()">
              <label for="myCheck">Admin</label>

               <input type="radio" name="nwe" id="myCheck2" onclick="myFunction()">
              <label for="myCheck2">Commercial</label>

               <input type="radio" name="nwe" id="myCheck3" onclick="myFunction()">
              <label for="myCheck3">Contact</label>
              
             
        <form id="form1" action="{{url('utilisateurs/store')}}" style="display:none;"method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}  

              <div class="row mb-3">
                <label  id="id3" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                <div class="col-md-8 col-lg-9" id="id31">
                  <select class="form-select" id="select_box" name="contactID">
                    <option selected>Choose Contact</option>
                    @foreach($contact as $contact)
                    <option  value="{{$contact->id}}">{{$contact->nom}} {{$contact->prenom}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              
                <div class="row mb-3">
                  <label for="firstName" id="id1" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="firstName" id="id11" type="text" class="form-control" id="firstName">
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label for="surName" id="id2" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="surName" id="id21" type="text" class="form-control" id="surName">
                  </div>
                </div>


                <div class="row mb-3" >
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email">
                  </div>
                </div>
                
                <div class="row mb-3" id="id4">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="pass">
                  </div>
                  
                  <div class="row mb-3" id="id7">
                 
                  </div>
                </div>

                  
                <div class="row mb-3" >
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                   <button type="submit" class="btn btn-primary">Save User</button>
                  </div>
                </div>  
                  
                
              </form><!-- End Profile Edit Form -->

                 
            </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->

<script>
                function myFunction() {
                var checkBox = document.getElementById("myCheck");
                var checkBox2 = document.getElementById("myCheck2");
                var checkBox3 = document.getElementById("myCheck3");
                var form1 = document.getElementById("form1");
               
                var id1 = document.getElementById("id1");
                var id11 = document.getElementById("id11");
                var id2 = document.getElementById("id2");
                var id21 = document.getElementById("id21");
                var id3 = document.getElementById("id3");
                var id31 = document.getElementById("id31");
                var id5 = document.getElementById("id5");
                var id51 = document.getElementById("id51");

                if (checkBox.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio1'>";
                  id3.style.display = "none";
                  id31.style.display = "none";
                  id1.style.display = "block";
                  id11.style.display = "block";
                  id2.style.display = "block";
                  id21.style.display = "block";
                  id5.style.display = "block";
                  id51.style.display = "block";
                  }else if(checkBox2.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio2'>";
                  id3.style.display = "none";
                  id31.style.display = "none";
                  id1.style.display = "block";
                  id11.style.display = "block";
                  id2.style.display = "block";
                  id21.style.display = "block";
                  id5.style.display = "block";
                  id51.style.display = "block";

                  }else if(checkBox3.checked == true){
                  form1.style.display = "block";
                  document.getElementById("id7").innerHTML ="<input id='roleUser'  type='hidden' name='role' value='radio3'>";
                  id3.style.display = "block";
                  id31.style.display = "block";
                  id1.style.display = "none";
                  id11.style.display = "none";
                  id2.style.display = "none";
                  id21.style.display = "none";
                  id5.style.display = "none";
                  id51.style.display = "none";

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



@endsection