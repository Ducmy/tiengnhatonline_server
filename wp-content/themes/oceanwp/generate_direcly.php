<?php /* Template Name: call-api-direcly */
/* Time a a litlte bit long */

include('simple_html_dom.php');

$url = 'http://localhost/myblog/content-page/';
$html = file_get_html($url);

$myarray = array();
foreach($html->find('img') as $element) {
//    echo $element->src;
    array_push($myarray , ["body_image" => $element->src]);
}
//var_dump($myarray);
//jsonデータとして返却
header("Content-Type: application/json; charset=utf-8");
echo json_encode($myarray , JSON_UNESCAPED_SLASHES);
exit;