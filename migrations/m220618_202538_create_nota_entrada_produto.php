<?php

use yii\db\Migration;

/**
 * Class m220618_202538_create_nota_entrada_produto
 */
class m220618_202538_create_nota_entrada_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nota_entrada_produto', [
            'nota_entrada_id' => $this->integer()->notNull(),
            'produto_id' => $this->integer()->notNull(),
            'quantidade' =>  $this->integer(),
            'valor' => $this->double()->notNull(),
        ]);

        $this->addForeignKey('fk_notaEntradaProduto_nota_entrada_id', 'nota_entrada_produto', 'nota_entrada_id', 'nota_entrada', 'codigo');
        $this->addForeignKey('fk_notaEntradaProduto_produto_id', 'nota_entrada_produto', 'produto_id', 'nota_entrada', 'codigo');

        $this->addCommentOnColumn('nota_entrada_produto','nota_entrada_id' ,'Código da nota');
        $this->addCommentOnColumn('nota_entrada_produto','produto_id' ,'Código do produto');
        $this->addCommentOnColumn('nota_entrada_produto','quantidade' ,'Quantidade de produtos');
        $this->addCommentOnColumn('nota_entrada_produto','valor' ,'Preço do produto');
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_notaEntradaProduto_nota_entrada_id','nota_entrada_produto');
        $this->dropForeignKey('fk_notaEntradaProduto_produto_id','nota_entrada_produto');
        $this->dropTable('nota_entrada_produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_202538_create_nota_entrada_produto cannot be reverted.\n";

        return false;
    }
    */
}
