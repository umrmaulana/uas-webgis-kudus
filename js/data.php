<?php
include '../koneksi.php';
?>

OrgChart.templates.myTemplate = Object.assign({}, OrgChart.templates.ana);

var chart = new OrgChart(document.getElementById("tree"), {
template: "diva",
scaleInitial: OrgChart.match.boundary,

nodeBinding: {
field_0: "name",
field_1: "title",
img_0: "img",
},
nodes: [
<?php $hasil = "select * from struktur_or";
foreach ($conn->query($hasil) as $row)
: ?>
  {
  id: <?php echo $row['id']; ?>,
  pid: <?php echo $row['pid']; ?>,
  name: "<?php echo $row['nama']; ?>",
  title: "<?php echo $row['jabatan']; ?>",
  img: "<?php echo $row['foto']; ?>",
  },
<?php endforeach ?>
],
});