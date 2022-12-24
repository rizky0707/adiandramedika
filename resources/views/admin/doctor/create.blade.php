@extends('layouts.app')
@section('title', 'Create Doctor')   
   
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Form Doctor Create </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Create Doctor</h4>
                <p class="card-description"> adiandra.medika </p>
                <form class="forms-sample" method="POST" action="{{route('doctor.store')}}">
                    @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Name">
                    @if($errors->has('name'))
                    <small id="emailHelp" class="form-text text-warning">{{ $errors->first('name') }}</small>
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
                        <select class="form-control productname" name="id_service" id="sub_category">
                          <option value="0" disabled="true" selected="true">Pelayanan</option>
                        </select>
                        @if($errors->has('id_service'))
                        <small id="emailHelp" class="form-text text-warning">{{ $errors->first('id_service') }}</small>
                          @endif
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label for="jam">Jam Awal</label>
                        <input type="time" name="jam" class="form-control" id="jam" placeholder="jam">
                        @if($errors->has('jam'))
                        <small id="emailHelp" class="form-text text-warning">{{ $errors->first('jam') }}</small>
                          @endif
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="jam_akhir">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="jam_akhir" placeholder="jam">
                        @if($errors->has('jam_akhir'))
                <small id="emailHelp" class="form-text text-warning">{{ $errors->first('jam_akhir') }}</small>
                  @endif
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                        <label for="nohp">No hp</label>
                        <input type="number" name="nohp" class="form-control" id="nohp" placeholder="nohp">
                        @if($errors->has('nohp'))
                        <small id="emailHelp" class="form-text text-warning">{{ $errors->first('nohp') }}</small>
                          @endif
                      </div>
                  
                  <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                  {{-- <button class="btn btn-light">Cancel</button> --}}
                </form>
              </div>
            </div>
          </div>
    
    </div>
  </div>
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
  url: '../../GetSubCatAgainstMainCatEdit/' + id,
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
});
</script>

@endsection
