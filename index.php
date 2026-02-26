<?php

use core\Router\Router;

require __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/core/functions/functoins.php';
require_once __DIR__ . '/core/Database/DatabaseConnect.php';
require_once __DIR__ . '/core/Database/Model.php';
require_once __DIR__ . '/core/Router/Router.php';

require_once __DIR__ . '/app/Controllers/IndexController.php';
require_once __DIR__ . '/app/Controllers/CategoryController.php';
require_once __DIR__ . '/app/Controllers/ArticleController.php';
require_once __DIR__ . '/app/Models/Articles.php';
require_once __DIR__ . '/app/Models/Category.php';
require_once __DIR__ . '/app/Services/GetArticlesService.php';

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates/');
$smarty->setCompileDir(__DIR__ . '/templates_c/');
$smarty->setCacheDir(__DIR__ . '/cache/');
$smarty->setConfigDir(__DIR__ . '/configs/');

Router::dispatch($smarty);

