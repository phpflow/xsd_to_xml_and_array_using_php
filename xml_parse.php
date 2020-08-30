<?php
/*$xmlfile = file_get_contents('test.xsd');
			$ob= simplexml_load_string($xmlfile);
			$json  = json_encode($ob);
			$data = json_decode($json, true);
			echo "<pre>";
			print_r($data);*/
			/*$doc = new DOMDocument();
$doc->load('test.xsd');
$nxml = $doc->save('t.xml');
$xmlfile = file_get_contents('t.xml');
$ob= simplexml_load_string($xmlfile);
$json  = json_encode($ob);
			$data = json_decode($json, true);
			echo "<pre>";
			print_r($ob);*/
/*$attributes = array(); 
$xsdstring = "test.xsd"; 
$XSDDOC = new DOMDocument(); 
$XSDDOC->preserveWhiteSpace = false; 
if ($XSDDOC->load($xsdstring)) 
{ 
    $xsdpath = new DOMXPath($XSDDOC); 
    $attributeNodes = 
              $xsdpath-> query('name')->item(0);
			  print_R($attributeNodes);
    foreach ($attributeNodes->childNodes as $attr) 
    { 
        $attributes[ $attr->getAttribute('value') ] = $attr->getAttribute('name'); 
    } 
    unset($xsdpath); 
} 
print_r($attributes); */

$doc = new DOMDocument();
$doc->preserveWhiteSpace = true;
$doc->load('test.xsd');
$doc->save('t.xml');
$xmlfile = file_get_contents('t.xml');

$parseObj = str_replace($doc->lastChild->prefix.':',"",$xmlfile);
 //$doc->doc->textContent;
// echo "<pre>";
//print_r($doc->lastChild->prefix);

$ob= simplexml_load_string($parseObj);
			$json  = json_encode($ob);
			$data = json_decode($json, true);
			echo "<pre>";
			print_r($data);
?>