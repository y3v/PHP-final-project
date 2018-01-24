<?php 

include_once 'controller/controller.php';
require_once 'entity/Message.php';
require_once 'entity/User.php';

$messageRepo = $entityManager->getRepository('Message');
$userRepo = $entityManager->getRepositor('User');

$user = new User('yevoli', 'yevoli', 'yev', 'oli', false);
$user->save();

?>