<?php 
 //WARNING: The contents of this file are auto-generated


/**
 * @Author: Duong The
 * @Date:   2016-05-13 10:00:37
 * @Last Modified by:   Duong The
 * @Last Modified time: 2016-05-17 11:30:08
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

array_push($job_strings, 'geocode_standardised_addresses');

function geocode_standardised_addresses()
{
    $accountBean = BeanFactory::getBean('Accounts');

    $query    = "standardised_addresses_c IS NULL";
    $accounts = $accountBean->get_full_list('', $query);

    foreach ($accounts as $account) {

        if (!$account->standardised_addresses_c) {
            $standardisedBean            = BeanFactory::newBean('qsoft_standardised_addresses');
            $standardisedBean->name      = $account->name;
            $standardisedBean->street    = $account->billing_address_street;
            $standardisedBean->city      = $account->billing_address_city;
            $standardisedBean->state     = $account->billing_address_state;
            $standardisedBean->post_code = $account->billing_address_postalcode;
            $standardisedBean->country   = $account->billing_address_country;
            $address                     = implode(', ', array_filter([$standardisedBean->street, $standardisedBean->city, $standardisedBean->state, $standardisedBean->post_code, $standardisedBean->country]));
            $geocode                     = geo_call(null, 'GET', ['address' => $address]);

            if (count($geocode->results) > 0) {

                $standardisedBean->latitude  = $geocode->results[0]->geometry->location->lat;
                $standardisedBean->longitude = $geocode->results[0]->geometry->location->lng;
                $standardisedBean->save();
                $account->qsoft_standardised_addresses_id_c = $standardisedBean->id;
                $account->save();
            }

        }

    }

    return true;
}

/**
 * [geo_call description]
 * @param  string  $oauthtoken    [description]
 * @param  string  $type          [description]
 * @param  array   $arguments     [description]
 * @param  boolean $encodeData    [description]
 * @param  boolean $returnHeaders [description]
 * @return [type]                 [description]
 */
function geo_call($oauthtoken = '', $type = 'GET', $arguments = array(), $encodeData = true, $returnHeaders = false)
{
    $url  = 'http://maps.googleapis.com/maps/api/geocode/json';
    $type = strtoupper($type);

    if ($type == 'GET') {
        $url .= "?" . http_build_query($arguments);
    }
    $curl_request = curl_init($url);
    if ($type == 'POST') {
        curl_setopt($curl_request, CURLOPT_POST, 1);
    } elseif ($type == 'PUT') {
        curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "PUT");
    } elseif ($type == 'DELETE') {
        curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "DELETE");
    }
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, $returnHeaders);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
    if (!empty($oauthtoken)) {
        $token = array("oauth-token: {$oauthtoken}");
        curl_setopt($curl_request, CURLOPT_HTTPHEADER, $token);
    }
    if (!empty($arguments) && $type !== 'GET') {
        if ($encodeData) {$arguments = json_encode($arguments);}
        curl_setopt($curl_request, CURLOPT_POSTFIELDS, $arguments);
    }
    $result = curl_exec($curl_request);
    if ($returnHeaders) {
        list($headers, $content) = explode("\r\n\r\n", $result, 2);
        foreach (explode("\r\n", $headers) as $header) {header($header);}
        return trim($content);
    }
    curl_close($curl_request);
    $response = json_decode($result);
    return $response;
}

?>