<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $postId
 * @property int $userId
 * @property string|null $title
 * @property string|null $body
 *
 * @property User $user0
 */
class Post extends \common\models\db\BasePost
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId'], 'required'],
            [['userId'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'userId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'postId' => 'Post ID',
            'userId' => 'User ID',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['userId' => 'userId']);
    }
}
