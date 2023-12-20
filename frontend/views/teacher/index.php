<?php

use frontend\models\Teacher;
use yii\helpers\Html;
use yii\helpers\Url;

use yii\grid\GridView;


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
            
            'id',
            [
                'attribute' => 'name',
                // 'label' => 'testing',
                // 'value'=> function($data,$key,$index){
                //     if($data->id % 2){

                //         return $data->name.' '.$key;
                //     }else{

                //         return $data->name;
                //     }
                // }
                'value'=>'name'

               
                // 'visible' => false,

            ],

            [
                'attribute' => 'gender',
                'filter' => [
                    'male' => 'Male',
                    'female' => 'Female',
                    'others' => 'Others'

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
                'header' => 'Action',
                'urlCreator' => function ($action, Teacher $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>