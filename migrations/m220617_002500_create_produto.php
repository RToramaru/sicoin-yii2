<?php

use yii\db\Migration;

/**
 * Class m220617_002500_create_produto
 */
class m220617_002500_create_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('produto', [
            'id' => $this->primaryKey(),
            'descricao' => $this->text()->notNull(),
            'estoque' => $this->double()->notNull(),
            'unidade_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('fk_produto_unidade_id', 'produto', 'unidade_id', 'unidade', 'id');

        $this->addCommentOnColumn('produto','id' ,'Identificador');
        $this->addCommentOnColumn('produto','descricao' ,'Descrição do produto');
        $this->addCommentOnColumn('produto','estoque' ,'Quantidade em estoque');
        $this->addCommentOnColumn('produto','unidade_id' ,'Sistema de unidade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_produto_unidade_id','produto');
        $this->dropTable('produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220617_002500_create_produto cannot be reverted.\n";

        return false;
    }
    */
}
