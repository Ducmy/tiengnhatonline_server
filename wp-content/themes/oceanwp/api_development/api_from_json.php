<?php  /* Template Name: call_API */

$json_file = get_template_directory().'/api_development/content_api/images_content.json';

$myfile = fopen($json_file, "r") or die("Unable to open file!");
$content = fread($myfile,filesize($json_file));
fclose($myfile);
$response = json_decode($content, true);
header("Content-Type: application/json; charset=utf-8");
echo json_encode($response, JSON_UNESCAPED_SLASHES);
exit;