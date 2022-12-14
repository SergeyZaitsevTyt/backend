<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\db\User */

$this->title = 'Редактирование пользователя: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'userId' => $model->userId]];
$this->params['breadcrumbs'][] = 'Сохранить';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
