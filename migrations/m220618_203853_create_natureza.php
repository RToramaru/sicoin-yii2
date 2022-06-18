<?php

use yii\db\Migration;

/**
 * Class m220618_203853_create_natureza
 */
class m220618_203853_create_natureza extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('natureza', [
            'id' => $this->primaryKey(),
            'descricao' => $this->text()->notNull(),
        ]);

        $this->addCommentOnColumn('natureza','id' ,'Código da natureza');
        $this->addCommentOnColumn('natureza','descricao' ,'Descrição da natureza');

        $this->batchInsert('natureza',['descricao'],[
            ['Remessa para consumo'],
            ['Venda'],
            ['Doação'],
            ['Transferência'],
            ['Estorno'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('natureza');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_203853_create_natureza cannot be reverted.\n";

        return false;
    }
    */
}
