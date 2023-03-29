<?php
echo 'pulling new';
echo system('git reset --hard');
echo system('git checkout -- .');
echo system('git pull https://github.com/lmccart/DMA161-networkmedia.git main');

// $contents = array('date'=>$lib_date);
// file_put_contents('date.json', json_encode($contents));

?>
