<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_deposit".
 *
 * @property int $id
 * @property float|null $amount
 * @property string|null $reason
 * @property string|null $deposited_on
 */
class Deposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount'], 'number'],
            [['amount'], 'required'],
            [['deposited_on'], 'safe'],
            [['reason'], 'string', 'max' => 255],
            [['reason'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'reason' => 'Reason',
            'deposited_on' => 'Deposited On',
        ];
    }
}
