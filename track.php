<?php
    echo "##############################\n";
    echo "#      Tracker Location      #\n";
    echo "#       AnarchoXploit        #\n";
    echo "#     Create By MarsHall     #\n";
    echo "##############################\n";
    echo "Alamat IP : ";
    $ip = trim(fgets(STDIN));
    
 
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}
$kontol = http_request("https://api.ipfind.com/?ip=$ip&auth=d943aa64-9804-4e17-92f3-1790d1cc9333");
$kontol = json_decode($kontol, TRUE);
print_r($kontol);
?>
