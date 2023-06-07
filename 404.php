<?php
session_start();
require_once 'model/managers/CategoryManager.php';

$categories = CategoryManager::getAllCategories();

require_once 'views/404View.php';