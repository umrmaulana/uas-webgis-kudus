<?php
include '../../koneksi.php';
$sql = "select * from sebaran_objek where lng > 0";
$result = mysqli_query($conn, $sql);
?>
var json_objek_1 = {
type: "FeatureCollection",
name: "objek_1",
crs: { type: "name", properties: { name: "urn:ogc:def:crs:OGC:1.3:CRS84" } },
features: [
<?php
while ($data = mysqli_fetch_assoc($result)) {
  $id = $data['id'];
  $nama = $data['nama'];
  $kategori = $data['kategori'];
  $nmr_tlp = $data['nmr_tlp'];
  $lng = $data['lng'];
  $lat = $data['lat'];
  ?>
  {
  type: "Feature",
  properties: {
  id: "<?php echo $id; ?>",
  nama: "<?php echo $nama; ?>",
  kategori: "<?php echo $kategori; ?>",
  nmr_tlp: "<?php echo $nmr_tlp; ?>",
  },
  geometry: {
  type: "Point",
  coordinates: ["<?php echo $lng; ?>", "<?php echo $lat; ?>"],
  },
  },
  <?php
}
?>
],
};