<?php
//No OOP
function getDiskSpaceleftPercent($dir){
    if(!trim($dir)) return;
    return disk_free_space($dir)*100/disk_total_space($dir);
}

function sendanEmail($percentage,$dir){
    //email logic
    echo "Disk ".$dir." is ".(floor((100-$percentage)*100)/100)."% full.<br />";
}
//example dir to check
$dirs = array(
    'C:',
    'D:'
);

foreach($dirs as $dir){
    $freespace = getDiskSpaceleftPercent($dir);
    if($freespace<20){
        sendanEmail($freespace,$dir);
    }
}
