<?php

use yii\db\Migration;

class m201026_002105_create_categoria extends Migration {
    public function safeUp() {
        $this->createTable('categoria', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'create_at' => $this->dateTime()->notNull(),
        ]);

        $this->insert('categoria', [
            'nome' => 'Categoria Padrão',
            'create_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown() {
        $this->dropTable('categoria');
    }
}
