<?php
echo system('git reset --hard');
echo system('git checkout -- .');
echo system('git pull https://github.com/lmccart/24H_HOST.git master');

?>
