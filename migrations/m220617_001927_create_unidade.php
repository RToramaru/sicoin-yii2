<?php

use yii\db\Migration;

/**
 * Class m220617_001927_create_unidade
 */
class m220617_001927_create_unidade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unidade', [
            'id' => $this->primaryKey(),
            'tipo' => $this->text()->notNull(),
        ]);
        $this->addCommentOnColumn('unidade', 'id', 'Identificador');
        $this->addCommentOnColumn('unidade', 'tipo', 'Tipo de unidade');
        $this->batchInsert('unidade',['tipo'],[
            ['Unidade'],
            ['Quilo'],
            ['Lote'],
            ['Pacote'],
            ['Arroba'],
            ['Pé'],
            ['Bandeja'],
            ['Tonelada'],
            ['Caixa'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('unidade');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220617_001927_create_unidade cannot be reverted.\n";

        return false;
    }
    */
}
