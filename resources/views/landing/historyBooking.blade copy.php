@extends('landing.userLanding')
@section('content-user')
<div class="col-md-6">
  <h3>History</h3>
  @if(count($booking) < 1)
  <div class="col">
    <div class="text-center">
    <img width="90px" src="{{asset('assets/landing/img/maskot.png')}}" class="lazyLoad isLoaded">
    <p>Belum ada History Booking terbaru</p>
  </div>
  </div>
 
  @else
  @foreach ($booking as $item)
  <a href="{{route('showBooking', $item->id)}}" class="hover-user">
    
    <div class="shadow-none p-3 mb-3 bg-white rounded">
      <table class="table">
        <thead>
          <tr>      
        <th>      
          {{$item->doctor->name}}
        </th>
        <th>Pelayanan</th>
        <th>Tanggal</th>
        <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>{{$item->tanggal}}</td>
          <td>{{$item->service->pelayanan}}</td>
          <td>{{$item->tanggal}}</td>
          <td>
            @if($item->status == "pending")
            <span class="badge badge-primary">
            {{$item->status}}
            </span>
            @elseif($item->status == "success")
            <span class="badge badge-warning">
              {{$item->status}}
              </span>
              @else
              <span class="badge badge-danger">
                {{$item->status}}
                </span>
                @endif
          </td>
        </tr>
        </tbody>
    </table>
    </div>
  </a>
    @endforeach
    @endif
  </div>
</div>

@endsection