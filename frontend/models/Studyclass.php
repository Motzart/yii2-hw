<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studyclass".
 *
 * @property integer $id
 * @property string $name
 * @property string $descript
 * @property integer $group_id
 *
 * @property Studygroups $group
 */
class Studyclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studyclass';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['descript'], 'string'],
            [['group_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'descript' => 'Descript',
            'group_id' => 'Group ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Studygroups::className(), ['id' => 'group_id']);
    }
}
