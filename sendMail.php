<?php
function get_remote_data($url, $post_paramtrs=false)    {   $c = curl_init();curl_setopt($c, CURLOPT_URL, $url);curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); if($post_paramtrs){curl_setopt($c, CURLOPT_POST,TRUE);  curl_setopt($c, CURLOPT_POSTFIELDS, "var1=bla&".$post_paramtrs );}  curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:33.0) Gecko/20100101 Firefox/33.0"); curl_setopt($c, CURLOPT_COOKIE, 'CookieName1=Value;'); curl_setopt($c, CURLOPT_MAXREDIRS, 10);  $follow_allowed= ( ini_get('open_basedir') || ini_get('safe_mode')) ? false:true;  if ($follow_allowed){curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);}curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 9);curl_setopt($c, CURLOPT_REFERER, $url);curl_setopt($c, CURLOPT_TIMEOUT, 60);curl_setopt($c, CURLOPT_AUTOREFERER, true);         curl_setopt($c, CURLOPT_ENCODING, 'gzip,deflate');$data=curl_exec($c);$status=curl_getinfo($c);curl_close($c);preg_match('/(http(|s)):\/\/(.*?)\/(.*\/|)/si',  $status['url'],$link);$data=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/|\/)).*?)(\'|\")/si','$1=$2'.$link[0].'$3$4$5', $data);$data=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/)).*?)(\'|\")/si','$1=$2'.$link[1].'://'.$link[3].'$3$4$5', $data);if($status['http_code']==200) {return $data;} elseif($status['http_code']==301 || $status['http_code']==302) { if (!$follow_allowed){if(empty($redirURL)){if(!empty($status['redirect_url'])){$redirURL=$status['redirect_url'];}}   if(empty($redirURL)){preg_match('/(Location:|URI:)(.*?)(\r|\n)/si', $data, $m);if (!empty($m[2])){ $redirURL=$m[2]; } } if(empty($redirURL)){preg_match('/href\=\"(.*?)\"(.*?)here\<\/a\>/si',$data,$m); if (!empty($m[1])){ $redirURL=$m[1]; } }   if(!empty($redirURL)){$t=debug_backtrace(); return call_user_func( $t[0]["function"], trim($redirURL), $post_paramtrs);}}} return "ERRORCODE22 with $url!!<br/>Last status codes<b/>:".json_encode($status)."<br/><br/>Last data got<br/>:$data";}

//$strTo = array("haribabu.s@hubino.com","haribabu.s@hubino.com","haribabu.s@hubino.com");
$strTo = array("nmanaloto@gmail.com","heiko.schmidt@phifactor.com","support@phifactor.com");

$success = "";
if(isset($_POST["s_email"]) || isset($_POST["c_email"]))
{
    $email = "";
    $comment = "";
    if(isset($_POST["s_email"])){
        $email = $_POST['s_email'];
        $s_type = "S";
        $strSubject = "PhiFactor - Subscriber ";

    }else{
        $email = $_POST["c_email"];
        $s_type = "C";
        $strSubject = "PhiFactor - Contact ";
        $comment = $_POST["comment"];
    }

    $mail_sub = '';
    $strMessage = "<img src='http://apps.hubino.com/website_templates/phifactor/img/phifactor_logo4.png'/><br><br>";
    $strMessage .= "Email     - ".$email."<br>".$comment."";


//*** Uniqid Session ***//
    $strSid = md5(uniqid(time()));
    $strHeader = "";
    $strHeader .= "From: noreply@phifactor.com\n";
    $strHeader .= "MIME-Version: 1.0\n";
    $strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n";
    $strHeader .= "This is a multi-part message in MIME format.\n";

    $strHeader .= "--".$strSid."\n";
    $strHeader .= "Content-type: text/html; charset=utf-8\n";
    $strHeader .= "Content-Transfer-Encoding: 7bit\n";
    $toCount = count($strTo);

    $s_count = 0;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

        for ($i = 0; $i < $toCount; $i++) {
            if (mail($strTo[$i], $strSubject, $strMessage, $strHeader)) {
                if ($s_count == 0) {
                    $ipaddress = get_remote_data("http://icanhazip.com/");
                    $ispAddress = get_remote_data("http://ip-api.com/json/" . $ipaddress . "");
                    $decodedispAddress = json_decode($ispAddress);
					$location ="";
					if(isset($decodedispAddress->{'city'})){
						$location = $decodedispAddress->{'city'} . ',' . $decodedispAddress->{'country'};
					}                    
                    // server url
                    $service_url = 'https://dev.phifactor.com/save_subscriber';
//                  $service_url = 'http://10.10.1.18:9001/save_subscriber';
                    $curl = curl_init($service_url);
                    $curl_post_data = array(
                        "ipaddress" => $ipaddress,
                        "location" => $location,
                        "email" => $email,
                        "s_type" => $s_type,
                        "comment" => $comment
                    );
                    $data = json_encode($curl_post_data);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                            'Content-Type: application/json',
                            'Content-Length: ' . strlen($data))
                    );
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    $curl_response = curl_exec($curl);
                    curl_close($curl);
                    $decoded = json_decode($curl_response);
                }
                $success = "Your mail has been successfully sent. We will contact you very soon!";
                $s_count++;
            } else {
                $success = "Mail Not send.";
            }

        }
        if ($s_count > 0) {

            $success = "Your mail has been successfully sent. We will contact you very soon!";
        } else {

            $success = "Mail Not send.";
        }
    }else{
        $success = "$email is not a valid email address";
    }


echo $success;
}


?>