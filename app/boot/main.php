<?php
session_start();
/* Подключение конфига */
require_once __DIR__.'/../config/config.app.php';
require_once __DIR__.'/../config/config.bd.php';

/* Подключение загрузщика */
require_once 'boot.php';

/* Подключение роутера */
require_once 'router.php';

/* Подключение отображения */
require_once 'view.php';

