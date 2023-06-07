<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="/">WeatherInfo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/weather">Weather</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>
<section id="main" class="mt-3">
    <div class="container">
                            <?php Pjax::begin([
                                'id' => 'weather-form-container'
                            ]); ?>
                            <?php $form = ActiveForm::begin([
                                'options' => ['data' => ['pjax' => true],],
                                'id' => 'weather'
                            ]); ?>

                            <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map($citys, 'city_id', 'name_language'), [
                                'id' => 'field-continent-id',
                                'onchange' => '$("#field-continent-id").submit()'
                            ]) ?>
                            <?php ActiveForm::end(); ?>

                            <?php Pjax::end(); ?>
    </div>
    <div class="col-6 col-md-8 col-lg-9">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Погода в <?= $city->name_language?></h3>
                <!-- <img src="http://openweathermap.org/img/wn/{{icon}}@2x.png" alt="">-->
                <table class="table table-striped">
                    <tr>
                        <th>Тиск</th>
                        <!--                                <td>{{body.main.pressure}}</td>-->
                    </tr>
                    <tr>
                        <th>Вологість</th>
                        <!--<td>{{body.main.humidity}}</td-->
                    </tr>
                    <tr>
                        <th>Температура</th>
                        <!--<td>{{body.main.temp}}</td>-->
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<?php //ActiveForm::end(); ?>
<?php //Pjax::end(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>
