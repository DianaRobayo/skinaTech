<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property Users|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
  public $name;
  public $email;
  public $password;

  private $_user = false;


  /**
   * @return array the validation rules.
   */
  public function rules()
  {
    return [
      // username and password are both required
      [['name', 'password','email'], 'required'],
      //el dato email debe ser una direccion valida
      ['email', 'email'],
     
    ];
  }



}
