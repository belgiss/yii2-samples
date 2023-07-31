<?php

namespace app\models;

use yii\db\ActiveRecord;

class Okrb extends ActiveRecord
{
    public static function tableName()
    {
        return 'api_data_okrb5_5';
    }

    public function findSearch($id = 0)
    {
        $data = parent::find()
            ->select('OKED_ID as id, OKED_NAME as text')
            ->andWhere(['=', 'OKE_OKED_ID', $id])
            ->asArray()
            ->all();


        return array_map(function($item) {
            return [
                'id' => $item['id'],
                'text' => $item['text'],
                'children' => true
            ];
        }, $data);
    }
}
