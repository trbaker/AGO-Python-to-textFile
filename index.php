<html><body>
<?php


$row = 1;
if (($handle = fopen("https://k12.maps.arcgis.com/sharing/rest/content/items/45f7b3b45a2048f6b6cd9d849342f97c/data", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "";
    }
  }
  fclose($handle);
}


?>
</body></html>
