<?php

namespace app\controllers;

use app\models\Continent;
use app\models\Country;
use PHPUnit\Framework\Constraint\Count;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ContinentController extends Controller
{
    public function actionIndex(){

        $continents = Continent::find()->asArray()->all();
        return $this->render('index', ['continents' => $continents]);
    }

    public function actionView($code = null, $country_id = null)
    {
        $continent = Continent::find()->where(['code' => $code])->one();

        $countriesDataProvider = new ActiveDataProvider([
            'query' => Country::find()->where(['continent_id' => $continent['continent_id']]),
            'pagination' =>[
                'pageSize' => 20,
            ]
        ]);

       $country = Country::find()->where(['code' => $country_id]) ->one();

        return $this->render('view',compact('continent','countriesDataProvider','country'));
    }

}