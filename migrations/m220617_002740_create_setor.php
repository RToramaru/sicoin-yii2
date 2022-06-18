<?php

use yii\db\Migration;

/**
 * Class m220617_002740_create_setor
 */
class m220617_002740_create_setor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('setor', [
            'id' => $this->primaryKey(),
            'nome' => $this->text()->notNull(),
            'responsavel' => $this->text()->notNull(),
            'tipo' => $this->text()->notNull(),
            'cnpj' => $this->text(),
        ]);
        
        $this->addCommentOnColumn('setor', 'id', 'Identificador');
        $this->addCommentOnColumn('setor', 'nome', 'Nome do setor');
        $this->addCommentOnColumn('setor', 'responsavel', 'Responsável pelo setor');
        $this->addCommentOnColumn('setor', 'tipo', 'Tipo do Setor');
        $this->addCommentOnColumn('setor', 'cnpj', 'CNPJ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('setor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220617_002740_create_setor cannot be reverted.\n";

        return false;
    }
    */
}
