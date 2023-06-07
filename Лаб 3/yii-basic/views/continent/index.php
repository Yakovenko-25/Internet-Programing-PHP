<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<main>
    <div class="container">
        <div class="row">
                <?php
                foreach ($continents as $continentItem): ?>
            <div class="col-6 col-md-4">
                <div class = "card p-2 mb-2">
                    <p class="card-title" style="background: blue; color: white"><?= Html::encode($continentItem['name']) ?></p>
                   <img class="card-img-top" src="/web/assets/Source%20Files/images/continents/<?= strtolower($continentItem['code']) ?>.png" alt="<?= $continentItem['name']; ?>">
                    <div class="card-body">
                        <a href='http://yii-basic/web/index.php?r=continent%2Fview&code=<?=Html::encode($continentItem['code'])?>'>
                        <p class="card-text"><?= Html::encode($continentItem['description']) ?></p>
                            </a>

<!--                        --><?//= Html::encode($continentItem['name']) ?>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
        </div>
    </div>
</main>

