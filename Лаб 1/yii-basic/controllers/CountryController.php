<?php

namespace app\controllers;

use app\models\Continent;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination(
            ['defaultPageSize' => 5,
                'totalCount' => $query->count(),]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination -> limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionView($country_id = null)
    {
        $country = Country::find()->where(['code' => $country_id]) ->one();

        $continent = Continent::find()->where(['continent_id' => $country['continent_id']])->one();

        return $this->render('view',compact('country','continent'));
    }

}