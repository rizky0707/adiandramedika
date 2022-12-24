@extends('layouts.app')
@section('title', 'Edit Service')   
   
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Form Service Edit </h3>
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
                <h4 class="card-title">Create Service</h4>
                <p class="card-description"> adiandra.medika </p>
                <form class="forms-sample" method="POST" action="{{route('service.update', $edit->id)}}">
                    @csrf
                    @method('PUT')
                  <div class="form-group">
                    <label for="Pelayanan">Pelayanan</label>
                    <input type="text" value="{{$edit->pelayanan}}" name="pelayanan" class="form-control" id="Pelayanan" placeholder="Pelayanan">
                    @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                    <small id="emailHelp" class="form-text text-warning">Category sudah ada / Category harus lebih dari 2 huruf</small>
                    @endforeach
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                      <select class="form-control productcategory" name="id_category" id="sub_category_name">
                        @foreach($category_services as $cat)
                        <option value="{{$cat->id}}" {{ $cat->id == $edit->id_category ? 'selected' : '' }}
                          class="form-control">{{$cat->name}}</option>
                        @endforeach
                      </select>
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
