<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<body>


<div class="header">
    <a href="/" class="home-link">Главная</a>
    <div class="auth-links">
        <a href="/login" class="login-link">Вход</a>
        <a href="/register" class="register-link">Регистрация</a>
    </div>
</div>
<div class="container">

<div class="head">
    <img src="/../web/img/849855ca1a56361f128987bde5f62a48.png" alt="">
    <p class="marketplace-description">Valkyrie - это онлайн-рынок, где вы можете найти все, что нужно настоящему воину: от блестящих мечей и крепких доспехов до исторических реконструкций и редких артефактов.  Здесь вы найдете  как  классическое оружие, так и уникальные изделия ручной работы. Valkyrie - это место, где история оживает, а меч  становится  более  чем  просто  оружием.</p>
</div>

<div class="filter-section">
    <div class="category-filters">
        <button class="filter-button" data-category="cold-weapons">Холодное оружие</button>
        <button class="filter-button" data-category="armors">Доспехи</button>
        <button class="filter-button" data-category="throwing-weapons">Оружие для метания</button>
        <button class="filter-button" data-category="maintenance">Средства для ухода за мечами и доспехами</button>
        <button class="filter-button" data-category="decor">Предметы декора</button>
    </div>
</div>

<div>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
</div>
</div>

<div class="footer">
    <p class="footer-text">© 2024 Маркетплейс. Все права защищены.</p>
</div>

</body>
</html>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<div></div>