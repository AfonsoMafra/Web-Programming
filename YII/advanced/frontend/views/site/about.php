<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Sobre';
$this->params['breadcrumbs'][] = $this->title; //Mostra o caminho de diretórios
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Dia e hora atual:  </p>
    <p><?= $today ?></p>


</div>
