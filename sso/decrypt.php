<?php
// Report all PHP errors (see changelog)
error_reporting(E_ALL);

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
        //echo $decrypted;

        // clean up

        mcrypt_generic_deinit($cypher);

        mcrypt_module_close($cypher);


        return $decrypted;
    }


    return false;
}


$multipass = "tb9Uvc1ZrZujCl3L3CXLo5eLJwG2S8ruX45cFQdp%2Fu3Cbm27%2FqowOaBjw9OAflH7hCWswsynhlmevyhNhxdd4G%2Bafl6ph2vpGDbs6tCrf%2BwYp0UUeepjE68QSo9873sgFZDe4rwdydPdwx5FC6rC6Vr9XpBv8hUhyEG48%2FcAN5qb0Ybvkdj2MapIk2%2BepBAsK4624z4Q%2FkZvhmhzezvHO3%2BGufnBk2XybJazrN16xIBfq9dGIsSaE1zhlDLfbeEufrm7OZrsmppaDN%2FYYQ56Ey1lexNJr1IuYZ5bH6auKOW0gx6JaVHvIemUdz8qzSSI";
$key = "sso.my8r4c.l1234";
$ssoSubject = base64_decode($multipass);
$ssoSubjectDecode = decrypt_data($ssoSubject, $key, $key);
$cleanData = preg_replace('/[\x00-\x1F\x7F]/', '', $ssoSubjectDecode);
$cleanData = str_replace($key, '', $cleanData);
echo $ssoSubjectDecode;
