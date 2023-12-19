<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%department}}`.
 */
class m231216_070200_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%department}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()
        ],'ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%department}}');
    }
}
