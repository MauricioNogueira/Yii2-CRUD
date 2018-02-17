<?php

use yii\db\Migration;

/**
 * Class m180123_144454_categoria
 */
class m180123_144454_categoria extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180123_144454_categoria cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('categorias', [
            'id' => $this->primaryKey(),
            'nomec' => $this->string()->notNull()->unique(),
        ]);
    }

    public function down()
    {
        return $this->dropTable('categorias');
    }
}
