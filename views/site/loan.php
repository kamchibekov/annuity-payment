<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Loan';
$this->params['breadcrumbs'][] = ['label' => 'Loans', 'url' => ['site/loan-list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-loan">
    <h1><?= Html::encode($this->title) ?></h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'columns' => [
            //         'id',
            //     ]
            ]);
        ?>
</div>
