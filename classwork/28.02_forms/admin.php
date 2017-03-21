<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 28.02.2017
 * Time: 19:53
 */
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true){
    print 'панель администрирования привествтует вас';
}
else{
    print 'У вас нет прав доступа';
}
