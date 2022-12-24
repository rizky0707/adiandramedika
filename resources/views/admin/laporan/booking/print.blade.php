<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Print Laporan Reservasi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <style>
        .text-right {
            text-align: right;
        }

        .halaman{
          border: 1px solid;
          padding-top: 0px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>
</head>
<body class="bg-grey" onload="window.print();">

  <div class="container container-smaller">
    <div style="margin-bottom: 0px">&nbsp;</div>

    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">

            <div class="row">
                <div class="col-xs-6">
                    <img src="https://res.cloudinary.com/dy9csboff/image/upload/v1668697903/logo_kop_tglbrh.png" width="170px" alt="logo">

                </div>
    
                <div class="col-xs-6">
                    <address>
                       
                        <font color="blue">KLINIK ADIANDRA MEDIKA</font></br>
                        Jl. Reog No.17a, Turangga, Kec. Lengkong,</br>
                        Kota Bandung, Jawa Barat 40263</br>
                        +6281223236200</br>
                        adiandramedika@gmail.com</br>
                        www.adiandramedika.com</br>
                      </address>                
                    </div>
            </div>
            <div class="row">
              {{-- content isi   --}}
              <h5 align="center"><b><u>LAPORAN DATA BOOKING</u></b></h5>
              <center><p>Tanggal : {{date('d M Y', strtotime($start_date))}} - {{date('d M Y', strtotime($end_date))}}</p></center>
              <br><br>
              <table id="example" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Nama</th>
                    <th> No HP</th>
                    <th> Pelayanan </th>
                    <th> Doctor </th>
                    <th> Jam </th>
                    <th> Tanggal </th>
                    <th> Status </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no= 1; ?>
                  @foreach ($bookings as $item)   
                  <td> {{$no++}} </td>
                    <td> {{$item->nama}} </td>
                    <td> {{$item->nohp}}</td>
                    <td> {{$item->service->pelayanan}}</td>
                    <td> {{$item->doctor->name}}</td>
                    <td> {{$item->jam}}</td>
                    <td>{{date('d-M-y', strtotime($item->tanggal))}}</td>
  
                    <td> @if($item->status == "pending")
                      <?php
                        $date_now = date("Y-m-d");
                        $tgl_exp = $item->tanggal;
                        $date_now_plus = date("Y-m-d", strtotime('+1 days', strtotime($tgl_exp)));
  
                        ?>
                        @if($date_now >= $date_now_plus)
                        <span class="badge badge-gradient-danger">Expired
                          @else 
                          <span class="badge badge-gradient-info">           
                          {{$item->status}}
                        </span>
  
                          @endif
                      
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
                  @endforeach
  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
