<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
$this->title = $continent->name;
$this->params['breadcrumbs'][] = ['label' => 'Continents', 'url' => ['continent/index']];
$this->params['breadcrumbs'][] = ['label' => $continent['name'], 'url' => ['continent/view', 'code' => $continent['code']]];
?>

<section id="continent-view">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>
        <p><?= Html::encode($continent->description) ?></p>
    </div>
</section>

<?= ListView::widget([
    'dataProvider' => $countriesDataProvider,
    'itemView' => '_country',
    'layout' => "{items}\n{summary}\n{pager}",
    'options' => [
        'class' => 'list-group'
    ],
    'itemOptions' => [
        'tag' => false,
    ],
]);?>
