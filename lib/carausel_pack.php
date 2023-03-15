<?php
    $images = array('../lib/img/1.jpg', '../lib/img/2.jpg', '../lib/img/3.jpg');
?>
<?php
    $random_image = array_rand($images);
?>
<img src="<?php echo $images[$random_image]; ?>" />