<?php
function getRoot() {
  if (getenv('HTTP_HOST') == 'localhost') {
    return 'http://localhost/~lmccart/DMA161/';
  } else return 'http://classes.dma.ucla.edu/Fall17/161/';
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php echo getRoot(); ?>css/normalize.min.css">
<link rel="stylesheet" href="<?php echo getRoot(); ?>css/style.css"></link>
<link rel="stylesheet" href="<?php echo getRoot(); ?>css/prism.css"></link>
<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<title>Network Media</title>