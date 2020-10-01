<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = 'Loan list';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-loan-list">
    <h1><?= Html::encode($this->title) ?></h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                    'id',
                    'loanStartDate', 
                    'loanAmount', 
                    'loanTerm', 
                    'annualInterestRate',
                    [
                        'format' => 'raw',
                        'value' => function($model, $key, $index, $column) {
                                return Html::a('View',
                                        Url::to(['site/loan', 'id' => $model->id]),
                                        [
                                        'class'=>'button btn btn-primary'
                                        ]
                                );
        
                        }
        
                    ]
                ]
            ]);
        ?>

</div>
