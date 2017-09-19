<?php
echo system('git reset --hard');
echo system('git checkout -- .');
echo system('git pull https://github.com/lmccart/DMA161-networkmedia.git master');

?>
