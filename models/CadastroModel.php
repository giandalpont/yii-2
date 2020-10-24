<?php

namespace app\models;

use yii\base\Model;

class CadastroModel extends Model {
    public $nome;
    public $email;
    public $idade;

    // Régras do formulário
    public function rules() {
        return [
            // campos obrigatórios
            [['nome', 'email', 'idade'], 'required'],
            // ['nome', 'required'],
            // ['email', 'required'],
            // ['idade', 'required'],
            // Valida se é um e-mail
            ['email', 'email'],
            // Add type number e só pode ser um inteiro
            ['idade', 'number', 'integerOnly' => true],
        ];
    }

    // Alterando nome dos atribusto no Label
    public function attributesLabels() {
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade',
        ];
    }
}