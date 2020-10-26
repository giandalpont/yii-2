<?php

use yii\db\Migration;

class m201026_003426_create_produtos extends Migration {

    public function safeUp() {
        $this->createTable('produtos', [
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'create_at' => $this->dateTime()->notNull(),
            'nome' => $this->string(120)->notNull(),
            'descricao' => $this->text(),
            'valor' => $this->decimal(10, 2),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
        ]);

        $this->addForeignKey('fk_produtos_categoria', 'produtos', 'categoria_id', 'categoria', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown() {
        $this->dropTable('produtos');
    }
}
