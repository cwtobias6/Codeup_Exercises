<?php

function parseContacts($filename)
{
    // $contacts = array();

    $handle = fopen($filename, 'r');

    $contents = fread($handle, filesize($filename));

    $contacts = explode("\n", trim($contents));

    $sepContacts = [];

    foreach ($contacts as $key => $value) {
	    $newcontacts = explode("|", $value);
    	$sepContacts[$key]["name"] = $newcontacts[0];
    	$sepContacts[$key]["number"] = $newcontacts[1];
    }

    for


   	print_r($sepContacts);

    // return $contacts;

    fclose($handle);
}

// var_dump(parseContacts('contacts.txt'));
parseContacts('contacts.txt');
