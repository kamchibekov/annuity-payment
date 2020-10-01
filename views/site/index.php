<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

$this->title = 'LAPC';
?>
<div class="site-index">

    <div class="body-content">
        <h2>Loan Annuity Payments Calculator</h2>
        <br>
            <?php $form = ActiveForm::begin([
                'id' => 'lapc-form',
                'method' => 'POST',
                'action' => ['site/index'],
            ]); ?>

            <?= $form->field($model, 'loanStartDate')->widget(DatePicker::class,
                        [
                            'dateFormat' => 'd-M-yyyy',
                            'options' => [
                                'class' => 'form-control laod-datepicker__addon',
                                'required' => true                            ],
                            'clientOptions' => [
                                'showAnim'=>'fold',
                                'yearRange' => 'c-100:c+100',
                                'changeMonth'=> true,
                                'changeYear'=> true,
                                'autoSize'=>true,
                                'showOn'=> "button",
                                'buttonText' => '<span class="glyphicon glyphicon-calendar"></span>'
                            ]
                        ]
                    )
            ?>
            <?= $form->field($model, 'loanAmount', ['options' => ['required' => true, 'min' => 0]])->input('number') ?>
            <?= $form->field($model, 'loanTerm', ['options' => ['required' => true, 'min' => 0]])->input('number') ?>
            <?= $form->field($model, 'annualInterestRate', ['options' => ['required' => true, 'min' => 0]])->input('number') ?>
            <div class="form-group">
                <?= Html::submitButton('Calculate', ['class' => 'btn btn-primary']); ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

</div>
