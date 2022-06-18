<?php

use yii\db\Migration;

/**
 * Class m220617_002711_create_usuario
 */
class m220617_002711_create_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'nome' => $this->text()->notNull(),
            'endereco' => $this->text(),
            'telefone' => $this->text(),
            'tipo' => $this->text()->notNull(),
            'usuario' => $this->text()->notNull(),
            'senha' => $this->text()->notNull(),
        ]);
        
        $this->addCommentOnColumn('usuario', 'id', 'Identificador');
        $this->addCommentOnColumn('usuario', 'nome', 'Nome');
        $this->addCommentOnColumn('usuario', 'endereco', 'Endereço');
        $this->addCommentOnColumn('usuario', 'telefone', 'Telefone');
        $this->addCommentOnColumn('usuario', 'tipo', 'Tipo de acesso');
        $this->addCommentOnColumn('usuario', 'usuario', 'Nome de usuario');
        $this->addCommentOnColumn('usuario', 'senha', 'Senha');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220617_002711_create_usuario cannot be reverted.\n";

        return false;
    }
    */
}
