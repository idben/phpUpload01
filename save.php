<?php
$roomImages = array();
$timestemp = time();
if (!empty($_FILES['file0']['name'])) {
  $img0 = $_FILES['file0']['name'];
  $ext = pathinfo($img0, PATHINFO_EXTENSION);
  $newFileName = $timestemp . "." . $ext;
  $path = "images/$newFileName";
  copy($_FILES['file0']['tmp_name'], $path);
  array_push($roomImages, $path);
}
if (!empty($_FILES['file1']['name'])) {
  $img0 = $_FILES['file1']['name'];
  $timestemp = time();
  $ext = pathinfo($img0, PATHINFO_EXTENSION);
  $newFileName = ($timestemp + 11) . "." . $ext;
  $path = "images/$newFileName";
  copy($_FILES['file1']['tmp_name'], $path);
  array_push($roomImages, $path);
}
if (!empty($_FILES['file2']['name'])) {
  $img0 = $_FILES['file2']['name'];
  $timestemp = time();
  $ext = pathinfo($img0, PATHINFO_EXTENSION);
  $newFileName = ($timestemp + 22) . "." . $ext;
  $path = "images/$newFileName";
  copy($_FILES['file2']['tmp_name'], $path);
  array_push($roomImages, $path);
}

$a = json_encode($roomImages);
$b = $_POST["roomTags"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/save.css" />
  <title>結果頁面</title>
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <?php
      echo "以下是格式化好要寫進圖片欄位的內容<br>";
      print_r($a);
      echo "<br><br>以下是格式化好要寫進 tags 欄位的內容<br>";
      print_r($b);
      echo "<br><br>以下是目前上傳的圖片：<br>";
      ?>
      <div class="imgs">
        <?php
        foreach ($roomImages as $path) {
          echo "<img src='$path' />";
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>