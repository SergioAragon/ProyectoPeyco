<?php

namespace backend\models;

use Yii;
use common\models\User;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\db\Expression;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $id_pedido
 * @property integer $cliente_id
 * @property string $nombre_expo
 * @property string $nombre_empresa
 * @property integer $frente
 * @property integer $fondo
 * @property string $Referencia_stand
 * @property integer $cantidad_stand
 * @property string $direccion
 * @property string $fecha_pedido
 * @property integer $telefono
 * @property integer $municipio_id
 * @property integer $estado_id
 *
 * @property Municipio $municipio
 * @property Estado $estado
 * @property User $cliente
 */
class Pedido extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'fecha_pedido',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_id', 'nombre_expo', 'frente', 'fondo', 'Referencia_stand', 'cantidad_stand', 'direccion', 'telefono'], 'required'],
            [['cliente_id', 'frente', 'fondo', 'cantidad_stand', 'telefono', 'municipio_id', 'estado_id'], 'integer'],
            [['fecha_pedido'], 'safe'],
            [['nombre_expo', 'nombre_empresa'], 'string', 'max' => 40],
            [['Referencia_stand', 'direccion'], 'string', 'max' => 20],
            [['municipio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Municipio::className(), 'targetAttribute' => ['municipio_id' => 'id_municipio']],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'id_estado']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedido' => 'Id Pedido',
            'cliente_id' => 'Cliente ID',
            'nombre_expo' => 'Nombre Expo',
            'nombre_empresa' => 'Nombre Empresa',
            'frente' => 'Frente',
            'fondo' => 'Fondo',
            'Referencia_stand' => 'Referencia Stand',
            'cantidad_stand' => 'Cantidad Stand',
            'direccion' => 'Direccion',
            'fecha_pedido' => 'Fecha Pedido',
            'telefono' => 'Telefono',
            'municipio_id' => 'Municipio ID',
            'estado_id' => 'Estado ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['id_municipio' => 'municipio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['id_estado' => 'estado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(User::className(), ['id' => 'cliente_id']);
    }
}
