<?php
$FIREBASE = "https://YOUR-PROJECT-ID.firebaseio.com/";
$NODE_GET = "artists.json";
$curl = curl_init();
curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
$response = curl_exec( $curl );
curl_close( $curl );
echo $response . "\n";
?>