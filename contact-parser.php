<?php

function parseContacts($filename)
{
    $contacts = [];

    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", trim($contents));


    foreach ($contentsArray as $key => $value) {
    	$newcontacts = explode("|", $value);
    	$contacts[$key]['name'] = $newcontacts[0];
    	$contacts[$key]['phoneNumber'] = phoneNumberFormat($newcontacts[1]);

    }

    print_r($contacts);
    fclose($handle);
}

function phoneNumberFormat($phoneNumber){
	return substr($phoneNumber, 0,3) . '-' . substr($phoneNumber, 3,3) . 
	'-' . substr($phoneNumber, 6,4);

}

var_dump(parseContacts('contacts.txt'));
