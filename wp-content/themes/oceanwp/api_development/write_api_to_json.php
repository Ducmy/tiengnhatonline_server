<?php  /* Template Name: Write JSON file */

include('lib.php');

$url = 'http://localhost/myblog/content-api/';
$html = file_get_html($url);
$myarray = array();
foreach($html->find('img') as $element) {
//    echo $element->src;
    array_push($myarray , ["body_image" => $element->src]);
}
$fp = fopen( get_template_directory().'/api_development/content_api/images_content.json', 'w');
fwrite($fp, json_encode($myarray));
fclose($fp);