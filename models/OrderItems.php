<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "order_items".
 *
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $name
 * @property double $price
 * @property integer $qty_item
 * @property double $sum_item
 */
class OrderItems extends ActiveRecord
{

    public static function tableName(){
        return 'order_items';
    }

    public function getOrder(){
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }


    public function rules(){
        return [
            [['order_id', 'product_id', 'name', 'price', 'qty_item', 'sum_item'], 'required'],
            [['order_id', 'product_id', 'qty_item'], 'integer'],
            [['price', 'sum_item'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

}
