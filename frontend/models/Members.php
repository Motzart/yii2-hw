<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $skypename
 * @property string $birthday
 * @property integer $group_id
 * @property integer $status_id
 * @property integer $class_id
 *
 * @property Studygroups $class
 * @property Edstatus $status
 * @property Studygroups $group
 */
class Members extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['birthday'], 'safe'],
            [['group_id', 'status_id', 'class_id'], 'integer'],
            [['firstname', 'lastname', 'email', 'skypename'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'skypename' => 'Skypename',
            'birthday' => 'Birthday',
            'group_id' => 'Group ID',
            'status_id' => 'Status ID',
            'class_id' => 'Class ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Studygroups::className(), ['id' => 'class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Edstatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Studygroups::className(), ['id' => 'group_id']);
    }
}
