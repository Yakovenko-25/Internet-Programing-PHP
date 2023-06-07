<?php

namespace app\controllers;


use app\models\City;
use app\models\City_language;
use app\models\WeatherForm;
use Yii;
use yii\web\Controller;

class WeatherController extends Controller
{
    public function actionWeatherForm()
    {
        $model = new WeatherForm();
        $citys = City_language::find()->asArray()->where(['language' => 'en'])->all();

        $city = null;

        if (Yii::$app->request->isPjax) {
            $model->load(Yii::$app->request->post());
            $city = City_language::find()->where(['city_id' => $model->city_id , 'language' => 'en'])->one();
        }


        return $this->render('weather-form', [
            'model' => $model,
            'citys' => $citys,
            'city' => $city
        ]);
    }
}