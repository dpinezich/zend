<?php
$doc = new DOMDocument();
$proc = new XSLTProcessor();
$doc->load( "./stockList.xslt" );
$proc->importStyleSheet( $doc );
$doc->load( "./stockList.xml" );
echo $proc->transformToXML( $doc );
?>