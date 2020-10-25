<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $cabeca
 * @property string|null $corpo
 * @property int|null $statu
 * @property string $create_at
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'cabeca'], 'required'],
            [['cabeca', 'corpo'], 'string'],
            [['statu'], 'integer'],
            [['create_at'], 'safe'],
            [['titulo'], 'string', 'max' => 130],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'cabeca' => 'Cabeca',
            'corpo' => 'Corpo',
            'statu' => 'Status',
            'create_at' => 'Create At',
        ];
    }

    /*
        Filtro para API
        Retornando id, title e status.
    */
    public function fields() {
        return [
            'id',
            'title' => 'titulo',
            'status' => function(Noticia $model) {
                return ($model->statu == '1' ? 'Ativo' : 'Inativo');
            }
        ];
    }
}
