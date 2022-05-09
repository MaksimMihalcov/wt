<?php
require 'Article.php';
require  'DBProvider.php';

    $provider = new DBProvider();
    $provider->insert(new Article($_POST['dname'], $_POST['recipe'], $_POST['uname']));