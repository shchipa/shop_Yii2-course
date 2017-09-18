<?php
/**
 * Created by PhpStorm.
 * User: Shchipa
 * Date: 06.06.17
 * Time: 13:38
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}