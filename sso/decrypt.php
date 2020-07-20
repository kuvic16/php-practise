<?php

/**
 * Decrypt biTS multipass token
 * 
 * @param string $data - multipass token
 * @param string $iv - public key
 * @param string $key - public key
 * 
 * @return string - decrypted data
 */
function decrypt_data($data, $iv, $key)
{
    $cypher = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
    if (is_null($iv)) {
        $ivlen = mcrypt_enc_get_iv_size($cypher);
        $iv = substr($data, 0, $ivlen);
        $data = substr($data, $ivlen);
    }

    // initialize encryption handle
    if (mcrypt_generic_init($cypher, $key, $iv) != -1) {
        // decrypt
        $decrypted = mdecrypt_generic($cypher, $data);
        // clean up
        mcrypt_generic_deinit($cypher);
        mcrypt_module_close($cypher);
        return $decrypted;
    }

    return false;
}


// work wayaround of the decription
$key = "sso.my8r4c.l1234";
$multipass = "tb9Uvc1ZrZujCl3L3CXLo3npYqBjA9%2BU%2FqVTd%2FwIkpGoty0DJnv1M8gvaVus25A5vcN6%2F5T%2FoKVFxI3g15QjZY5Gq4KtvjdDgHaT%2B8MLdqGFLGTp0EMB3tsDp7Oa4sCnq8ZohoF3533N56s%2FmOgKEYkJ88WQqCOSkBzs7sT3Ehp88BpZC80IjlzoFsuAnVUIYKKGe3HteAw39Gd%2F%2FWoFt%2FrHOPJTMDMAPtAQ5ZRW0eQxmy47qUELFp3eNxv2E7Jc296H%2Ba9THQbEgQhVmh3RbK0%2B11KgYhRaAjReg4S2Lj3Fi3zpUAjg2GuWauc2nC6H";
$multipass = urldecode($multipass);
$ssoSubject = base64_decode($multipass);

$ssoSubjectDecode = decrypt_data($ssoSubject, $key, $key);
$cleanData = preg_replace('/[\x00-\x1F\x7F]/', '', $ssoSubjectDecode);
$cleanData = str_replace($key, '', $cleanData);

$ssoInfo = explode("|", $cleanData);
$data = [];
foreach ($ssoInfo as $info) {
    $obj =  explode(":", $info);
    $data[$obj[0]] = $obj[1];
}
var_dump($data);
