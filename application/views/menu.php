<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url() ?>">Registrace a přihlášení</a>
        </div>
        <ul class="nav navbar-nav">
           <li><?php echo anchor('register1', 'Registrovat - level1'); ?></li>
           <li><?php echo anchor('register2', 'Registrovat - level2'); ?></li>
           <li><?php echo anchor('register3', 'Registrovat - level3'); ?></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <li><?php echo anchor('register3', '<span class="fa fa-user"></span> Registrovat'); ?></li>
      <li><?php echo anchor('login', '<span class="fa fa-lock"></span> Přihlásit'); ?></li>
    </ul>
    </div>
</nav>  



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

