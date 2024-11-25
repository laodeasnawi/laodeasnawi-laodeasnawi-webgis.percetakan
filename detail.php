<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID tidak valid atau tidak ditemukan.");
}

$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);

if (!$obj || !isset($obj->results) || count($obj->results) === 0) {
    die("Data tidak ditemukan atau terjadi kesalahan pada server.");
}

$item = $obj->results[0];
$title = "Detail dan Lokasi : " . $item->nama_perusahaan;

$titles = $item->nama_perusahaan;
$alamat = $item->alamat;
$kelurahan = $item->kelurahan;
$kecamatan = $item->kecamatan;
$hp = $item->no_hp;
$lat = $item->latitude;
$long = $item->longitude;

include_once "header.php";
?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBBnr6nal9QazFdNDkjnHkK0Mnyo_NJlBc"></script>

<script>
function initialize() {
    var lat = <?php echo $lat ?: 0; ?>;
    var lng = <?php echo $long ?: 0; ?>;
    var myLatlng = new google.maps.LatLng(lat, lng);

    var mapOptions = {
        zoom: 10,
        center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = `
        <div id="content">
            <h1 id="firstHeading"><?php echo addslashes($titles); ?></h1>
            <div id="bodyContent">
                <p><?php echo addslashes($alamat); ?></p>
            </div>
        </div>
    `;

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Maps Info',
        icon: 'img/marker.png'
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Lanjutkan dengan HTML untuk tabel detail -->
<div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>  
               </tr>
               <tr>
                 <td>Nama Perusahaan</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Kelurahan</td>
                 <td><h4><?php echo $kelurahan ?></h4></td>
               </tr>
               <tr>
                 <td>Kecamatan</td>
                 <td><h4><?php echo $kecamatan ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>