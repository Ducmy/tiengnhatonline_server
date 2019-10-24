<?php /* Template Name: call_API*/

$myfile = fopen(get_template_directory().'/content_api/images_content.json', "r") or die("Unable to open file!");
$content = fread($myfile,filesize(get_template_directory().'/content_api/images_content.json'));
fclose($myfile);
$response = json_decode($content, true);
header("Content-Type: application/json; charset=utf-8");
echo json_encode($response, JSON_UNESCAPED_SLASHES);
exit;