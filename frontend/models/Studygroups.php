<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studygroups".
 *
 * @property integer $id
 * @property string $name
 * @property string $descript
 * @property string $link
 *
 * @property Members[] $members
 * @property Studyclass[] $studyclasses
 */
class Studygroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studygroups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['descript'], 'string'],
            [['name', 'link'], 'string', 'max' => 255]
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
            'link' => 'Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers()
    {
        return $this->hasMany(Members::className(), ['group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyclasses()
    {
        return $this->hasMany(Studyclass::className(), ['group_id' => 'id']);
    }
}
