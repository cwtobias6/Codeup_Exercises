<?php

function parseContacts($filename)
{
    $contacts = [];

    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", $contents);

    foreach ($contentsArray as $key => $value) {
    	explode("|", $contentsArray);
    }
    print_r($contentsArray);
    return $contacts;
    fclose($handle);
}

var_dump(parseContacts('contacts.txt'));
