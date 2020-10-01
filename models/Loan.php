<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use \Datetime;

/**
 * Loan is the model behind the Loan Annuity Payments Calculator form.
 */
class Loan extends ActiveRecord 
{
    /*
    public $id;
    public $loanStartDate;
    public $loanAmount;
    public $loanTerm;
    public $annualInterestRate;
    public $created_at;
    public $updated_at;
    */

    public static function tableName() {
        return 'loans';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at']
                ]
            ]
        ];
    }


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['loanStartDate', 'loanAmount', 'loanTerm', 'annualInterestRate'], 'required'],
            // loanStartDate has to be a valid date format
            ['loanStartDate', 'date', 'format' => 'd-M-yyyy'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'loanTerm' => 'Loan Term (in months)',
            'annualInterestRate' => 'Annual Interest Rate %'
        ];
    }

    public function beforeSave($insert)
    {
        if($this->loanStartDate){
            $this->loanStartDate = (string)$this->loanStartDate;
          }
          return parent::beforeSave($insert);
    }
    
}
