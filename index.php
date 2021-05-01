<?php
    require 'simple_html_dom.php';
    $html = file_get_html('https://dolarhoje.com/');

    foreach($html ->find('div#cotacao') as $inf){
       echo($inf);
    }
    

?>