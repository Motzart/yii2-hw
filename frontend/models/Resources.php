<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resources".
 *
 * @property integer $id
 * @property string $name
 * @property string $res_type
 * @property string $res_string
 * @property string $descipt
 */
class Resources extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resources';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'res_type', 'res_string'], 'required'],
            [['res_string', 'descipt'], 'string'],
            [['name', 'res_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'res_type' => 'Res Type',
            'res_string' => 'Res String',
            'descipt' => 'Descipt',
        ];
    }
}
