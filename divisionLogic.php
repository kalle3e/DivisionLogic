<?php
$message = "";
$at100 = false;
    for ($i=1; $i <=100; $i++){
        if ($i%3 == 0){
            $message  .= "foo";
            appendMessage($i, $message);
            $message .= $i;

        if ($i%5 == 0){
        $message  .= "bar";
        appendMessage($i, $message);
        $message .= $i;
        }
        $message .= $i;
        appendMessage($i, $message);

    }
function appendMessage($i, &$message){
    if ($i == 100){
        $at100 = true;
    }
    if (!$at100) {
        $message = $message . ', ';
        return $message;
    }
    return $message;
}
