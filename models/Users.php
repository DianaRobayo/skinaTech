<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $identification 
 * @property string $name
 * @property int|null $state
 * @property string|null $password
 * @property int $rol
 * @property string $email 
 * @property string $address 
 * @property int $code 
 * @property string $phone 
 * @property string $date 
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface{

    // public $id;
    // public $name;
    // public $password;
    // public $state;
    // public $rol;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rol'], 'required'],
            [['state', 'rol', 'code'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 255],
            [['date'], 'safe'],
            [['identification'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identification' => 'Identification',
            'name' => 'Name',
            'state' => 'State',
            'password' => 'Password',
            'rol' => 'Rol',
            'email' => 'Email',
            'address' => 'Address',
            'code' => 'Code',
            'phone' => 'Phone',
            'date' => 'Date', 
        ];
    }

    /******************/

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds user by username and state = 1
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($name)
    {
        /* $prueba = self::findOne(['name' => $name, 'state' => 1]);
        echo '<pre>';
        print_r($prueba);
        exit; */
        return self::findOne(['name' => $name, 'state' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    /**
     * @return int|string current user ID
     */
    public function getId(){
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey() {
       // return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) {
        //return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password === $password;
    }


}
