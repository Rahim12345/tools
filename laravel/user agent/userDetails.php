<?php
//IP almaq==============>
// PHP program to get IP address of client 
$IP = $_SERVER['REMOTE_ADDR']; 
  
// $IP stores the ip address of client 
echo "Client's IP address is: $IP"; 

//MAC almaq==============>
// PHP code to get the MAC address of Client 
$MAC = exec('getmac'); 
  
// Storing 'getmac' value in $MAC 
$MAC = strtok($MAC, ' '); 
  
// Updating $MAC value using strtok function,  
// strtok is used to split the string into tokens 
// split character of strtok is defined as a space 
// because getmac returns transport name after 
// MAC address    
echo "MAC address of client is: $MAC"; 

//ISP almaq==============>
$json=file_get_contents("https://extreme-ip-lookup.com/json/$ip");
extract(json_decode($json,true));
echo "ISP: $isp ($city, $region, $country)<br>";


//Daha cox ==============>
function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("https://ipinfo.io/".$_SERVER['REMOTE_ADDR']);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}

function displayIpInfo($ipinfo_json) {
    var_dump($ipinfo_json);
    echo <<<END
<pre>
ip      : {$ipinfo_json['ip']}
city    : {$ipinfo_json['city']}
region  : {$ipinfo_json['region']}
country : {$ipinfo_json['country']}
loc     : {$ipinfo_json['loc']}
postal  : {$ipinfo_json['postal']}
org     : {$ipinfo_json['org']}
</pre>
END;
}

function main() {
    $ipinfo_json = getIpInfo();

    print_r($ipinfo_json);
}

main();