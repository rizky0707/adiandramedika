<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Pencarian</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Buat Janji</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    {{-- <div class="row"> --}}
      <div class="container">
        
      <div class="shadow p-1 mb-3 bg-white rounded">
        <form style="
        padding-top: 15px;">
          <div class="form-row justify-content-center">
            <div class="form-group col-md-3">
              <select id="inputState" class="form-control">
                <option selected>Bandung</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <select id="inputState" class="form-control">
                <option selected>Poli Gigi</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <input type="date" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-primary" style="
            padding-right: 45px;
            border-right-width: 1px;
            border-left-width: 1px;
            padding-left: 45px;
            border-radius: 25px;
        ">Cari</button>
                  </div>
        </div>

        </form>

      </div>
      <div class="shadow-sm p-1 mb-3 bg-white rounded">
      <div class="row">
        <div class="col-md-4" style="
        padding-left: 105px;
        padding-right: 105px;
        padding-top: 35px;
        padding-bottom: 35px;
    ">
              <img src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/doctor/thumb/1127_54_drg-arlan-akbari.jpg" class="rounded-circle" width="170px">
             
              <div class="shadow-lg p-1 mb-0 bg-white rounded"><center>GIGI POLI</center></div>
              <center>
              <p class="font-weight-bold" style="font-size: 14px;">Drg. Arlan Akbari,</p>
            </center>
            </div>
        <div class="col-md-8">
          <div class="row">
          <p class="card-text col-3">@adiandra.medika</p>
            <p class="card-text col-8" style="font-size: 12px;">Pilih periode jadwal konsultasi rawat jalan yang Anda inginkan
              Waktu pelayanan konsultasi oleh dokter dapat berbeda dari perkiraan slot waktu konsultasi yang diberikan
              bergantung pada kondisi pasien masing-masing</p>
          </div>
          <hr>
          <div class="card" style="width: 10rem;">
            <div class="card-body">
              <center>
              <h5 class="card-title">01</h5>
              <h5 class="card-title">Minggu</h5>
              
              <button type="button" class="btn btn-outline-primary" style="font-size: 12px;">07.00 - 10.00</button>
            </center>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
      </div>
    </div>
      </div>
    {{-- </div> --}}

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  
  </body>
</html>