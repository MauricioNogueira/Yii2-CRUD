<?php

use yii\db\Migration;

/**
 * Handles the creation of table `usuarios`.
 * Has foreign keys to the tables:
 *
 * - `categorias`
 */
class m180123_151636_create_usuarios_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('usuarios', [
            'id' => $this->primaryKey(),
            'id_categoria' => $this->integer()->notNull(),
            'nomeu' => $this->string()->notNull(),
            'data_nascimento' => $this->date()->notNull()
        ]);

        // creates index for column `id_categoria`
        $this->createIndex(
            'idx-usuarios-id_categoria',
            'usuarios',
            'id_categoria'
        );

        // add foreign key for table `categorias`
        $this->addForeignKey(
            'fk-usuarios-id_categoria',
            'usuarios',
            'id_categoria',
            'categorias',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `categorias`
        $this->dropForeignKey(
            'fk-usuarios-id_categoria',
            'usuarios'
        );

        // drops index for column `id_categoria`
        $this->dropIndex(
            'idx-usuarios-id_categoria',
            'usuarios'
        );

        $this->dropTable('usuarios');
    }
}
