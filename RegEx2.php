<?php
$str="(098)6576745;0996234444;056 999 66 55;+380664345412;(+38067)1234565;050 455-67-78;(+38067) 123 45 65;8 050 455-45-56; +3 8066 455 56 54; 123.001.123.001";

//getAllphones($str);
//getCorphones($str);
getAllIP($str);
function getAllphones($str){
    preg_match_all("/\(?\s?\+?\s?3?\s?8?\s?0\d{2}\)?\s?\d{3}\s?-?\d{2}-?\s?\d{2}/",$str,$arr);
    var_dump($arr[0]);
}

function getCorphones($str){
    preg_match_all("/\(?\s?\+?\s?3?\s?8?\s?0\d{2}\)?\s?\d{3}\s?-?\d{2}-?\s?\d{2}/",$str,$arr);
    $search=["(",")","+"," ","-"];
    $correctNumbers=str_replace($search,"",$arr[0]);
    for ($i=0;$i<count($correctNumbers);$i++){
        if (strlen($correctNumbers[$i])<11)echo "+38".$correctNumbers[$i]."\n";
        elseif (strlen($correctNumbers[$i])<12)echo "+3".$correctNumbers[$i]."\n";
        elseif (strlen($correctNumbers[$i])<13)echo "+".$correctNumbers[$i]."\n";
        elseif (strlen($correctNumbers[$i])<14)echo $correctNumbers[$i]."\n";

    }
}
function getAllIP($str){
    preg_match_all("/(\d{1,3}\.){3}\d{1,3}/",$str,$arr);
    var_dump($arr[0]);

}