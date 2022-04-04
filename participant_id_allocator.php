<?php
header('Access-Control-Allow-Origin: *');

// $id_filename = 'https://rcweb.dartmouth.edu/homes/f004p59/madlibs_full_task_3random/participant_id.txt';
$id_filename = '/dartfs-hpc/rc/home/9/f004p59/public_html/madlibs_full_task_3random/server_data/participant_id.txt';
//$destination = 'index.html?participant=';
$destination = 'index_new_appraisal.html?participant=';
//$destination = 'memory.html?participant=';

$last_id = file_get_contents($id_filename);
echo $last_id;

if ($last_id === FALSE) {
  $id = 0;
} else {
  $id = (int)$last_id;
}
$id += 1;
echo $id;
file_put_contents($id_filename, strval($id));
header('Location: '.$destination.$id);
?>