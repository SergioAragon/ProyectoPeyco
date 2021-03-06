<?php

namespace backend\models;

use Yii;
use yii\web;
use yii\base\Model;
// use yii2fullcalendar\models\Event;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $created_date
 */
class Event extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'created_date', 'end_date'], 'required'],
            [['created_date', 'end_date', 'color'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_date' => 'Created Date',
            'end_date' => 'End Date',
            // 'color' => 'Color',
        ];
    }

    
}
