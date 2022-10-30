<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\db\Post */

$this->title = 'Редактирование поста: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'postId' => $model->postId]];
$this->params['breadcrumbs'][] = 'Сохранить';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
