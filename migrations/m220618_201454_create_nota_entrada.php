<?php

use yii\db\Migration;

/**
 * Class m220618_201454_create_nota_entrada
 */
class m220618_201454_create_nota_entrada extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nota_entrada', [
            'codigo' => $this->integer()->notNull()->unique(),
            'origem' => $this->integer()->notNull(),
            'destino' =>  $this->integer(),
            'emissao' => $this->date()->notNull(),
            'recebimento' => $this->date()->notNull(),
        ]);

        $this->addForeignKey('fk_notaEntrada_origem', 'nota_entrada', 'origem', 'setor', 'id');
        $this->addForeignKey('fk_notaEntrada_destino', 'nota_entrada', 'destino', 'setor', 'id');

        $this->addCommentOnColumn('nota_entrada','codigo' ,'Código da Nota');
        $this->addCommentOnColumn('nota_entrada','origem' ,'Setor de origem');
        $this->addCommentOnColumn('nota_entrada','destino' ,'Setor de destino');
        $this->addCommentOnColumn('nota_entrada','emissao' ,'Data de emissão da nota');
        $this->addCommentOnColumn('nota_entrada','recebimento' ,'Data de recebimento da nota');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_notaEntrada_origem','nota_entrada');
        $this->dropForeignKey('fk_notaEntrada_destino','nota_entrada');
        $this->dropTable('nota_entrada');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_201454_create_nota_entrada cannot be reverted.\n";

        return false;
    }
    */
}
