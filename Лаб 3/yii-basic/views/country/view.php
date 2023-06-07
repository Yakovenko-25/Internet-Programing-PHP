<?php
use yii\helpers\Html;
$this->params['breadcrumbs'][] = ['label' => 'Continents', 'url' => ['continent/index']];
$this->params['breadcrumbs'][] = ['label' => $continent['name'], 'url' => ['continent/view', 'code' => $continent['code']]];
$this->params['breadcrumbs'][] = ['label' => $country['name'], 'url' => ['country/view', 'country_id' => $country['country_id']]];
?>

<section id="main" class="mt-3">
    <div class="container">
        <div class="row">
<!--            <div class="col-6 col-md-4 col-lg-3">-->
<!--                <div class="list-group">-->
<!--                    <a href="#" class="list-group-item list-group-item-action active">Zhytomyr</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Kyiv</a>-->
<!--                    <a href="#" class="list-group-item list-group-item-action">Vinnytsia</a>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-6 col-md-8 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= $country['name']?></h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Official Name</th>
                                <td><?= $country['official_name']?></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><?= Html::img('/web/assets/Source%20Files/images/countries/png100px/' . strtolower($country['code']) . '.png', ['alt' => $country['name']]) ?></td>
                            </tr>
                            <tr>
                                <th>Capital</th>
                                <td><?= $country['capital']?></td>
                            </tr>
                            <tr>
                                <th>Area</th>
                                <td><?= $country['area']?></td>
                            </tr>
                            <tr>
                                <th>Currency</th>
                                <td><?= $country['currency']?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="width: 100%"><iframe width="720" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=<?=$country['coords']?>+(My%20Business%20Name)&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/marine-gps/">navigation gps</a></iframe></div>

