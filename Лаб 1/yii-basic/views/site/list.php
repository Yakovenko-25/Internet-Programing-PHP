<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Животные</h1>
<?php debug($animals) ?>
<ul>
<?php foreach ($animals as $animal): ?>
   <li>
      <?= Html::encode($animal->name) ?>
      (любимая еда: <?= Html::encode($animal->food) ?>)
   </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>