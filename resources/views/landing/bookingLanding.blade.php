<link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- Plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.css')}}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{asset('assets/admin/assets/images/logo-real.png')}}" />
<div class="jumbotron jumbotron-fluid d-flex flex-wrap align-items-center bg-light">
  <div class="container">
  <h3>Booking Form</h3>
    </div>
  </div>
<!-- search box -->
<div class="container shadow p-4 mb-1 bg-white rounded col-md-8">
  <form class="forms-sample" method="POST" action="{{route('storeBookingLanding')}}/#WA">
    @csrf
   
      @if (Route::has('login'))
      @auth

        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" name="nama" value="{{ Auth::user()->name }}"  class="form-control" id="name" placeholder="Name">
            @if($errors->has('nama'))
                <small id="emailHelp" class="form-text text-warning">{{ $errors->first('nama') }}</small>
            @endif
          </div>
          @else
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="nama" class="form-control" id="name" placeholder="Name">
            </div>
        @endauth
        @endif
  <div class="row">
    <div class="col">
      @if (Route::has('login'))
      @auth 
  <div class="form-group">
    <label for="name">No HP</label>
    <input type="number" value="{{ Auth::user()->no_hp }}" name="nohp" class="form-control" id="name" placeholder="No HP">
    @if($errors->has('nohp'))
    <small id="emailHelp" class="form-text text-warning">{{ $errors->first('nohp') }}</small>
    @endif
  </div>
  @else
  <div class="form-group">
    <label for="name">No HP</label>
    <input type="number" name="nohp" class="form-control" id="name" placeholder="No HP">
  </div>
  @endauth
  @endif

</div>
<div class="col">
  <div class="form-group">
    <label for="jam">Jam</label>
    <input type="time" value="{{old('jam')}}" name="jam" class="form-control" id="jam" placeholder="jam">
   
    @if($errors->has('jam'))
          <small id="emailHelp" class="form-text text-warning">{{ $errors->first('jam') }}</small>
      @endif
  </div>
</div>
  </div>
  <div class="form-group">
    <label>Lokasi</label>
      <select class="form-control productcategory" name="lokasi" id="lokasi">
        <option value="0" disabled selected>Pilih Lokasi*</option>
        <option value="Adiandra Medika Turangga - Bandung" {{ old("lokasi") == "Adiandra Medika Turangga - Bandung" ? "selected":"" }}>Adiandra Medika Turangga - Bandung</option>
        <option value="Adiandra Medika BSD - Jakarta" {{ old("lokasi") == "Adiandra Medika BSD - Jakarta" ? "selected":"" }}>Adiandra Medika BSD - Jakarta</option>
      </select>
      @if($errors->has('lokasi'))
      <small id="emailHelp" class="form-text text-warning">{{ $errors->first('lokasi') }}</small>
  @endif
  </div>
  <div class="row">
  <div class="col">
  <div class="form-group">
    <label>Kategori</label>
      <select class="form-control productcategory" name="id_category" id="sub_category_name">
        <option value="0" disabled selected>Select
          Main Category*</option>
        @foreach($category_service as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
      </select>
      @if($errors->has('id_category'))
      <small id="emailHelp" class="form-text text-warning">{{ $errors->first('id_category') }}</small>
  @endif
  </div>
</div>
  <div class="col">
    <div class="form-group">
      <label>Pelayanan</label>
        <select class="form-control productname"  name="id_service" id="sub_category">
          <option value="0" disabled="true" selected="true">Pelayanan</option>
        </select>
        @if($errors->has('id_service'))
        <small id="emailHelp" class="form-text text-warning">{{ $errors->first('id_service') }}</small>
    @endif
    </div>
    </div>
  </div>
  <div class="form-group">
    <label>Dokter</label>
      <select class="form-control productname" name="id_doctor" id="id_doctor">
        <option value="0" disabled="true" selected="true">Dokter</option>
      </select>
      @if($errors->has('id_doctor'))
      <small id="emailHelp" class="form-text text-warning">{{ $errors->first('id_doctor') }}</small>
  @endif
  </div>

  <div class="form-group">
    <label for="name">Tanggal</label>
    {{-- <input type="text" name="tanggal" value="{{old('tanggal')}}" class="form-control" id="datepicker" placeholder="tanggal"> --}}
    <input type="date" name="tanggal" value="{{old('tanggal')}}" class="form-control" placeholder="tanggal">
    
    @if($errors->has('tanggal'))
    <small id="emailHelp" class="form-text text-warning">{{ $errors->first('tanggal') }}</small>
@endif
  </div>
  @if (Route::has('login'))
    @auth
      <div class="form-group">
        <label for="nohp">Alamat</label>
        <textarea name="alamat"  class="form-control" cols="30" rows="10">{{ Auth::user()->alamat }}</textarea>
        @if($errors->has('alamat'))
          <small id="emailHelp" class="form-text text-warning">{{ $errors->first('alamat') }}</small>
      @endif
      </div>
      @else
<div class="form-group">
  <label for="nohp">Alamat</label>
  <textarea name="alamat"  class="form-control" cols="30" rows="10"></textarea>
  @if($errors->has('alamat'))
    <small id="emailHelp" class="form-text text-warning">{{ $errors->first('alamat') }}</small>
@endif
</div>
@endauth
@endif

      @guest
      @if (Route::has('login'))
      <div class="form-group" id="login">
      <a href="{{url('/login')}}" class="btn btn-block  btn-primary">Login</a>
      <small class="text-danger">*Login Terlebih dahulu untuk Booking (Terima Kasih)</small> 
    </div>
      @endif
      @else
      <button type="submit" class="btn btn-primary btn-block">Submit </button>
      @endguest
</form>
  </div>
</div>

<!-- penjelasan kartu -->

<link
  href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
  rel="stylesheet"
/>
<section class="pt-5 pb-5">
  <div class="container">
    <h5 class="text-center"></h5>
    <hr class="midline" />

    
           
          </div>
        </div>
    
</section>
    

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
 $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0 });
  } );
</script>
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




