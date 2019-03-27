<?php

$xml=simplexml_load_file("index_messages_en.xml") or die("Error: Cannot create object");
foreach ($xml->data as $data){
	if (substr($data['name'], 0, 7) === "en_pano" && substr($data['name'],-5) === "title" && strpos($data['name'], "group") === FALSE && strpos($data['name'], "map") === FALSE ) {
		echo str_replace("en_","",str_replace("_title","",$data['name'])).", ".ucwords(strtolower($data))."\n";
	}
}

?>