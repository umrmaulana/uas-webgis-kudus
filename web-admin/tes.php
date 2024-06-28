<?php
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
echo $foto;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Choose file</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit">tes</button>
    </form>
</body>

</html>