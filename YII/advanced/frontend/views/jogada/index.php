<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JogadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogada-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Jogada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'pontuacao',
            'data_hora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
