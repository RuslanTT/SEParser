<?php
require_once 'SEParser.php';
$parser = new SEParser();
$options = array(
    CURLOPT_USERAGENT=>'Mozilla/4.0 (compatible; MSIE 14.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)',
    CURLOPT_RETURNTRANSFER=>1,
    CURLOPT_FOLLOWLOCATION=>1,
    );
$parser->IO->setOptions($options);
echo $page = $parser->IO->getPage('http://football.sport-express.ru/russia/premier/2013-2014/calendar/tours/');
?>
