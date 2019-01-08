<div class="container">

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
?>
 <h1 class="title">Articles</h1>
 <?php 
foreach($articles as $row) { ?>
    <a href="#" class="article">
        <h1><?php echo $row->title ?></h1>
        <p><?php echo $row->text ?></p>
    </a>
<?php
};


?>

</div>