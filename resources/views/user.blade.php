@extends('layout.app')
@section('content')
<!-- produk -->
<div class="card text-bg-dark border-0 rounded-0">
    <img src="img/bg2.jpeg" class="card-img" alt="img" height="550px" >
    <div class="card-img-overlay cntn-fasilitas">
      <h5 style="margin-top: 215px; text-align: center; font-size:60px;font-family: 'Dancing Script', cursive; color: #CF714E;" class="card-title">JAWIR FOOD</h5>
      <h6 style="text-align: center; font-size: 27px; font-family:Arial, Helvetica, sans-serif; color: #495E57;" class="card-title">Selamat Datang Di Jawir Food</h6>
    </div>
  </div>

<!-- content produk -->
  <div class="container">
    <div class>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-5">
        <div class="col">
          <div class="card rounded-0" style="border: 2px solid #F5EEC8;">
            <img src="img/pecel.jpeg" class="card-img-top rounded-0" alt="img" style="height: 370px;">
            <div class="card-body">
              <h5 class="card-title">PECEL</h5>
              <p class="card-text" style="height: 90px;">Pecel adalah makanan yang terdiri atas sayuran rebus, seperti kacang panjang, bayam, taoge yang disiram dengan kuah sambal kacang dan sebagainya.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card rounded-0" style="border: 2px solid #F5EEC8;">
            <img src="img/soto.jpeg" class="card-img-top rounded-0" alt="img" style="height: 370px;">
            <div class="card-body">
              <h5 class="card-title">SOTO</h5>
              <p class="card-text" style="height: 90px;">Soto adalah makanan khas Indonesia seperti sop yang terbuat dari kaldu daging Daging yang paling sering digunakan adalah daging sapi dan daging ayam</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card rounded-0" style="border: 2px solid #F5EEC8;">
            <img src="img/rawon.jpeg" class="card-img-top rounded-0" alt="img" style="height: 370px;">
            <div class="card-body">
              <h5 class="card-title">RAWON</h5>
              <p class="card-text" style="height: 90px;">Rawon adalah masakan khas Indonesia yang berasal dari Kabupaten Ponorogo yang berupa sup daging berkuah hitam dengan campuran bumbu khas yaitu kluwek</p>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  @endsection