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
 * @property User $user
 */
class Post extends BasePost
{
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'postId' => 'ID поста',
            'userId' => 'ID пользователя',
            'title' => 'Название',
            'body' => 'Текст',
        ];
    }
}
