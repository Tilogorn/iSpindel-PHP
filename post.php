<?php

// JSON-POST-Body einlesen
// https://stackoverflow.com/a/14794856
$rest_json = file_get_contents("php://input");
$info_arr = json_decode($rest_json, true);

// Ein Beispiel-JSON sieht zB so aus:



// file_put_contents('./post_log.txt', date('Y-m-d H:i:s') . '-----------------------' . PHP_EOL, FILE_APPEND);

foreach ($info_arr as $key => $value) {
	file_put_contents('./post_log.txt', date('Y-m-d H:i:s') . ': Key: "' . $key . '", Value: "' . $value . '"' . PHP_EOL, FILE_APPEND);
}

// 2019-09-09 21:02:08: Key: "name", Value: "iSpindel_Daniel"
// 2019-09-09 21:02:08: Key: "ID", Value: "1019442"
// 2019-09-09 21:02:08: Key: "angle", Value: "19.18629"
// 2019-09-09 21:02:08: Key: "temperature", Value: "26.4375"
// 2019-09-09 21:02:08: Key: "temp_units", Value: "C"
// 2019-09-09 21:02:08: Key: "battery", Value: "3.733055"
// 2019-09-09 21:02:08: Key: "gravity", Value: "-3.481352"
// 2019-09-09 21:02:08: Key: "interval", Value: "10"
// 2019-09-09 21:02:08: Key: "RSSI", Value: "-64"

?>
