<?php 
function is_Mobile(){
    if (isset($_SERVER['HTTP_VIA']) && stristr($_SERVER['HTTP_VIA'], "wap")) {
        return true;
    } elseif (isset($_SERVER['HTTP_ACCEPT']) && strpos(strtoupper($_SERVER['HTTP_ACCEPT']), "VND.WAP.WML")) {
        return true;
    } elseif (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])) {
        return true;
    } elseif (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(blackberry|configuration\/cldc|hp |hp-|htc |htc_|htc-|iemobile|kindle|midp|mmp|motorola|mobile|nokia|opera mini|opera |Googlebot-Mobile|YahooSeeker\/M1A1-R2D2|android|iphone|ipod|mobi|palm|palmos|pocket|portalmmm|ppc;|smartphone|sonyericsson|sqh|spv|symbian|treo|up.browser|up.link|vodafone|windows ce|xda |xda_)/i',$_SERVER['HTTP_USER_AGENT'])) {
        return true;
    } else {
        return false;
    }
}
?>

<?php if (is_Mobile()) {
   $img_array = glob("img/vertical/*.{gif,jpg,png,jpeg,GIF,JPG,PNG,JPEG}",GLOB_BRACE); 
}else{
   $img_array = glob("img/horizontal/*.{gif,jpg,png,jpeg,GIF,JPG,PNG,JPEG}",GLOB_BRACE); 
}
$img = array_rand($img_array);
$dz = $img_array[$img];
die(header("Location:".$dz));
?>