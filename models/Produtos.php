<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string $descricao
 * @property int $tamanho
 * @property string $cor
 * @property float $preco
 * @property string|null $tag
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'descricao', 'tamanho', 'cor', 'preco'], 'required'],
            [['id', 'tamanho'], 'integer'],
            [['descricao', 'cor'], 'string'],
            [['preco'], 'number'],
            [['tag'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'tamanho' => 'Tamanho',
            'cor' => 'Cor',
            'preco' => 'Preco',
            'tag' => 'Tag',
        ];
    }
}
