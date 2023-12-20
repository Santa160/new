<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property int $dept_id
 *
 * @property Department $dept
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'dept_id'], 'required'],
            [['gender'], 'string'],
            [['dept_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::class, 'targetAttribute' => ['dept_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'dept_id' => 'Dept ID',
        ];
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::class, ['id' => 'dept_id']);
    }

    public function name($data,$key){
        
        if($data->id % 2){

            return $data->name.' Texting '.$key;
        }else{

            return $data->name;
        }
    }
}
