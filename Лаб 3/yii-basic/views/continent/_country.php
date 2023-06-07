<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<a href="<?= Url::to(['country/view', 'country_id' => $model->code]);?>" class="list-group-item list-group-item-action">
    <?= Html::img('/web/assets/Source%20Files/images/countries/png100px/' . strtolower($model['code']) . '.png', ['alt' => $model['name']]) ?>
    <?= Html::encode($model->name) ?>
</a>
