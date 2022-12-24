@extends('welcome')
@section('content')
<img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/UY8l-banner+web.png" class="full-width-image" alt="banner" id="home" />

<!-- search box -->
<div class="container shadow p-4 mb-1 bg-white rounded">
    <form action="{{route('bookingLanding')}}#login">
    <div class="row">
    <div class="col">
       
      <label for="inputState">Lokasi</label>
      <select id="inputState" class="form-control no-border" >
        <option value="0" disabled selected>Pilih Lokasi*</option>
        <option value="Adiandra Medika Turangga - Bandung">Adiandra Medika Turangga - Bandung</option>
        <option value="Adiandra Medika BSD - Jakarta">Adiandra Medika BSD - Jakarta</option>
      </select>
    </div>

    <div class="col">
      <label for="inputState">Kategori</label>
      <select class="form-control no-border productcategory" name="id_category" id="sub_category_name" required="required">
        <option value="0" disabled selected>Select
          Main Category*</option>
        @foreach($category_service as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
        <label for="inputState">Pelayanan</label>
        <select class="form-control no-border productname" name="id_service" id="sub_category">
            <option value="0" disabled="true" selected="true">Select
                Service*</option>
          </select>
      </div>
    <div class="col">
      <label>Dokter</label>
      <select class="form-control no-border productname" name="id_doctor" id="id_doctor">
        <option value="0" disabled="true" selected="true">Select
            Doctor*</option>
      </select>
    </div>


    <div class="col-md-12 mt-3">
    <input type="submit" value="Booking" class="btn-md rounded-pill btn-primary btn-block shadow-sm">
    </div>
    </form>
  </div>
</div>

<!-- penjelasan kartu -->

<h2 style="padding-bottom: 20px; padding-top: 20px; font-size: 2rem;">
  <center>Keuntungan Member Bobobox</center>
</h2>
<!--card-->
<center>
  <div id="slide" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="2000">
        <img
          src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/-c3f-card2.jpg"
          class="d-block w-60 rounded-lg"
          alt="..."
        />
      </div>
      <div class="carousel-item" data-interval="2000">
        <img
          src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/-c3f-card2.jpg"
          class="d-block w-60 rounded-lg"
          alt="..."
        />
      </div>
      <div class="carousel-item" data-interval="2000">
        <img
          src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/-c3f-card2.jpg"
          class="d-block w-60 rounded-lg"
          alt="..."
        />
      </div>
    </div>

    <button
      class="carousel-control-prev"
      type="button"
      data-target="#slide"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-target="#slide"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
</center>
<!-- informasi-->
<h2 style="padding-bottom: 20px; padding-top: 20px; font-size: 2rem;">
  <center>Informasi Terbaru</center>
</h2>
<!-- gambar card -->
<div class="container d-flex flex-wrap align-items-center">
  <div class="row">
    <div class="card-deck">
        
      <div class="col-md-6">
        <div class="card" style="display: flex;">
          <img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/JqM7-Long+stay+-+twitter-05.jpg" class="rounded" alt="..." />
       
      </div>
    </div>
      
      <div class="col-md-6">
        <div class="card" style="display: flex;">
          <img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/JqM7-Long+stay+-+twitter-05.jpg" class="rounded" alt="..." />
        </div>
      </div>
   
      </div>
    </div>
  </div>
</div>

<!-- kenapa bobobox -->

<h2 style="padding-bottom: 20px; padding-top: 20px; font-size: 2rem;">
  <center>Kenapa Bobobox Lebih Seru?</center>
</h2>

<!-- card post -->

  <div class="jumbotron jumbotron-fluid d-flex flex-wrap align-items-center bg-light">
    <div class="container">
    <div class="card-deck">
      
        <div class="card">
          <img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/JqM7-Long+stay+-+twitter-05.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
          </div>           
        </div>
      

      
        <div class="card">
          <img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/JqM7-Long+stay+-+twitter-05.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This card has supporting text below as a natural lead-in to
              additional content.
            </p>
          </div>
          
        </div>
     

      
        <div class="card">
          <img src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/JqM7-Long+stay+-+twitter-05.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This card has even longer
              content than the first to show that equal height action.
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </div>

<!-- jumbotron-->

<link
  href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
  rel="stylesheet"
/>
<section class="pt-5 pb-5">
  <div class="container">
    <h5 class="text-center">Apa Kata Mereka</h5>
    <hr class="midline" />

    <div class="card col-md-12 mt-2">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
        data-interval="100000"
      >
        <div class="w-100 carousel-inner mb-5" role="listbox">
          <div class="carousel-item active">
            <div class="bg"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3 col-4 align-items-start">
                      <img
                        src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/HfnH-rama.png"
                        alt=""
                        class="rounded-circle img-fluid"
                      />
                    </div>
                    <div class="col-sm-9 col-8">
                      <h5>Micheal Smith - <span>Web Developer</span></h5>
                      <small
                        >Well incremented. Comes with recommended workout.
                        I'm using it to help with bladder leakage issues
                        that I've been experiencing since a recent
                        vasectomy.</small
                      >
                      <small class="smallest mute">- willi</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3 col-4 align-items-start">
                      <img
                        src="https://uploads.codesandbox.io/uploads/user/8e41599d-1575-4a05-b4b9-4673af3feb4f/HfnH-rama.png"
                        alt=""
                        class="rounded-circle img-fluid"
                      />
                    </div>
                    <div class="col-sm-9 col-8">
                      <h5>Helena Doe - <span>Architect</span></h5>
                      <small
                        >Well incremented. Comes with recommended workout.
                        I'm using it to help with bladder leakage issues
                        that I've been experiencing since a recent
                        vasectomy.</small
                      >
                      <small class="smallest mute">- willi</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="bg"></div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3 col-4 align-items-start">
                      <img
                        src="img/rama.png"
                        alt=""
                        class="rounded-circle img-fluid"
                      />
                    </div>
                    <div class="col-sm-9 col-8">
                      <h5>John Doe - <span>Ceo Mobile company</span></h5>
                      <small
                        >Well incremented. Comes with recommended workout.
                        I'm using it to help with bladder leakage issues
                        that I've been experiencing since a recent
                        vasectomy.</small
                      >
                      <small class="smallest mute">- willi</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3 col-4 align-items-start">
                      <img
                        src="img/rama.png"
                        alt=""
                        class="rounded-circle img-fluid"
                      />
                    </div>
                    <div class="col-sm-9 col-8">
                      <h5>Helena Doe - <span>Architect</span></h5>
                      <small
                        >Well incremented. Comes with recommended workout.
                        I'm using it to help with bladder leakage issues
                        that I've been experiencing since a recent
                        vasectomy.</small
                      >
                      <small class="smallest mute">- willi</small>
                    </div>
                  </div>
                </div>
              </div>
           
          </div>
        </div>
    
</section>
    
@endsection

@section('script')
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script>
  $(document).ready(function () {

  $('#sub_category_name').on('change', function () {
  let id = $(this).val();
  $('#sub_category').empty();
  $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
  $.ajax({
  type: 'GET',
  url: 'GetService/' + id,
  success: function (response) {
  var response = JSON.parse(response);
  console.log(response);   
  $('#sub_category').empty();
  $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
  response.forEach(element => {
      $('#sub_category').append(`<option value="${element['id']}">${element['pelayanan']}</option>`);
      });
  }
 });
});
 $('#sub_category').on('change', function () {
  let id = $(this).val();
 $('#id_doctor').empty();
  $('#id_doctor').append(`<option value="0" disabled selected>Processing...</option>`);
  $.ajax({
  type: 'GET',
  url: 'GetDoctor/' + id,
  success: function (response) {
  var response = JSON.parse(response);
  console.log(response);   
  $('#id_doctor').empty();
  $('#id_doctor').append(`<option value="0" disabled selected>Select Name Doctor*</option>`);
  response.forEach(element => {
      $('#id_doctor').append(`<option value="${element['id']}">${element['name']}</option>`);
      });
  }
 });
 });
 });


</script>

@endsection


