<?php

use yii\db\Migration;

/**
 * Class m220618_205357_create_nota_saida
 */
class m220618_205357_create_nota_saida extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nota_saida', [
            'codigo' => $this->integer()->notNull()->unique(),
            'natureza_id' => $this->integer()->notNull(),
            'destino' =>  $this->integer(),
            'cnpj' => $this->integer(),
            'emissao' => $this->date()->notNull(),
        ]);

        $this->addForeignKey('fk_notaSaida_natureza_id', 'nota_saida', 'natureza_id', 'natureza', 'id');
        $this->addForeignKey('fk_notaSaida_destino', 'nota_saida', 'destino', 'setor', 'id');

        $this->addCommentOnColumn('nota_saida','codigo' ,'Código da Nota');
        $this->addCommentOnColumn('nota_saida','natureza_id' ,'Natureza da operação');
        $this->addCommentOnColumn('nota_saida','destino' ,'Setor de destino');
        $this->addCommentOnColumn('nota_saida','cnpj' ,'CNPJ');
        $this->addCommentOnColumn('nota_saida','emissao' ,'Data de emissão');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_notaSaida_natureza_id','nota_saida');
        $this->dropForeignKey('fk_notaSaida_destino','nota_saida');
        $this->dropTable('nota_saida');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_205357_create_nota_saida cannot be reverted.\n";

        return false;
    }
    */
}
