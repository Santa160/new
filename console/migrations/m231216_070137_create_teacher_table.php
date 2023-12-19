<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m231216_070137_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'dept_id'=>$this->integer()
        ],'ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teacher}}');
    }
}
