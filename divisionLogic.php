<?php
$print = false;
    for ($i=1; $i <=100; $i++) {
        if ($i % 3 == 0) {
            $test[$i]['divisibleBy3'] = true;
            $test[$i]['FBFB'] = true;
        }
        if ($i % 5 == 0) {
            $test[$i]['divisibleBy5'] = true;
            $test[$i]['FBFB'] = true;

            if ($i == 100) {
                $print = true;
            }
        }
        appendMessage($i,$test,$message);
    }
    if ($print) {
        echo $message;
    }
function appendMessage($i,$test, &$message){
//    Output 1, 2, foo, 4, bar, foo, 7, 8, foo, bar, 11, foo, 13, 14, foobar ...

    if ($test[$i]['divisibleBy3'] && !$test[$i]['divisibleBy5']){
        $message .= 'foo,' . ' ';
    }
    if ($i == 100){
        $message .= 'bar';
        return $message;
    }
    if ($test[$i]['divisibleBy5'] && !$test[$i]['divisibleBy3']) {
        $message .= 'bar,' . ' ';
    }
    if ($test[$i]['divisibleBy3'] && $test[$i]['divisibleBy5']){
        $message .= 'foobar,' . ' ';
    }

    if (!$test[$i]['FBFB']) {
        $message .= $i . ',' . ' ';
    }
    return $message;
}