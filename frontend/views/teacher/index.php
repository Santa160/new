<?php

use frontend\models\Teacher;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TeacherSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        
            'name',
            [
                'attribute' => 'gender',
                'filter' => [
                    'male' => 'Male',
                    'female' => 'Female',
                 
                ],
                
                'filterInputOptions' => ['class' => 'form-select', 'prompt' => 'All'],
            ],
            [
                'attribute' => 'dept_id',
                'value' => 'dept.name',
                'filter' => $dept,
                'filterInputOptions' => ['class' => 'form-select', 'prompt' => 'All']
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=> 'Action',
                'urlCreator' => function ($action, Teacher $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>