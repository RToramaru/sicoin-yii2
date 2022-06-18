<?php

use yii\db\Migration;

/**
 * Class m220618_210100_create_nota_saida_produto
 */
class m220618_210100_create_nota_saida_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nota_saida_produto', [
            'nota_saida_id' => $this->integer()->notNull(),
            'produto_id' => $this->integer()->notNull(),
            'quantidade' =>  $this->integer(),
            'valor' => $this->double()->notNull(),
        ]);

        $this->addForeignKey('fk_notaSaidaProduto_nota_saida_id', 'nota_saida_produto', 'nota_saida_id', 'nota_saida', 'codigo');
        $this->addForeignKey('fk_notaSaidaProduto_produto_id', 'nota_saida_produto', 'produto_id', 'nota_saida', 'codigo');

        $this->addCommentOnColumn('nota_saida_produto','nota_saida_id' ,'Código da nota');
        $this->addCommentOnColumn('nota_saida_produto','produto_id' ,'Código do produto');
        $this->addCommentOnColumn('nota_saida_produto','quantidade' ,'Quantidade de produtos');
        $this->addCommentOnColumn('nota_saida_produto','valor' ,'Preço do produto');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_notaSaidaProduto_nota_saida_id','nota_saida_produto');
        $this->dropForeignKey('fk_notaSaidaProduto_produto_id','nota_saida_produto');
        $this->dropTable('nota_saida_produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_210100_create_nota_saida_produto cannot be reverted.\n";

        return false;
    }
    */
}
