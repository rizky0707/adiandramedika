@extends('layouts.app')
@section('title', 'Tables User')   
   
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Users Tables </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Users table</h4>
            <p class="card-description"> Data Users <code></code>
            </p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Name</th>
                  <th> Email </th>
                  <th> Register </th>
                </tr>
              </thead>
              <tbody>
                <?php $no= 1; ?>
                @foreach ($users as $item)   
                <tr>
                  <td> {{$no++}} </td>
                  <td> {{$item->name}} </td>
                  <td> {{$item->email}}</td>
                  <td> {{$item->created_at->format('Y-m-d')}}</td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection