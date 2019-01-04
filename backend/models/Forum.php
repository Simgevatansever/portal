<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "forum".
 *
 * @property int $id
 * @property int $topicid
 * @property string $title
 * @property int $userid
 * @property string $questiontime
 * @property int $questionid
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['topicid', 'title', 'userid', 'questiontime', 'questionid'], 'required'],
            [['topicid', 'userid', 'questionid'], 'integer'],
            [['questiontime'], 'safe'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topicid' => 'Topicid',
            'title' => 'Title',
            'userid' => 'Userid',
            'questiontime' => 'Questiontime',
            'questionid' => 'Questionid',
        ];
    }
}
