<?php

$auchats = array('-1001542184389');
$owner = '6058139652';
$preusers = array();

if($userId == '6058139652'){
    $user = "<a href='tg://user?id=6058139652'>Ⴆʅαȥҽ ✘</a>[𝗚ø𝗱]";
  $plan = 'God';
}
elseif(in_array($userId,$preusers)){
    $user = '@'.$username.'[𝗣𝗿𝗲𝗺𝗶𝘂𝗺✨]';
    $plan = 'premium';
}
else {
    $user = '@'.$username.'[𝗙𝗿𝗲𝗲]';
    $plan = 'free';
}

?>
