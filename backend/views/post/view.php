<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\db\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'postId' => $model->postId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'postId' => $model->postId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы хотите удалить данный пост?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'postId',
            'userId',
            'title',
            'body:ntext',
        ],
    ]) ?>

</div>
