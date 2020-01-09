<?php

namespace app\models;

use Yii;

/**
 * Signup form
 */
class SignupForm extends User
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $created_at;
    public $updated_at;
    public $status;
    public $old_password;
    public $new_password;
    public $confirm_password;

    const SCENARIO_SIGNUP = 'signup';
    const SCENARIO_UPDATE = 'update';

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_SIGNUP] = ['username', 'password', 'status', 'created_at', 'updated_at'];
        $scenarios[self::SCENARIO_UPDATE] = ['username', 'new_password', 'old_password', 'confirm_password', 'id', 'updated_at'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => '用户名不为空'],
            ['username', 'only_one', 'on' => 'signup'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['password', 'required', 'message' => '密码不可以为空', 'on' => 'signup'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码至少填写6位', 'on' => 'signup'],

            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],


            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s'), 'on' => 'signup'],

            [['old_password', 'new_password', 'confirm_password'], 'required', 'on' => 'update', 'message' => '密码不可以为空'],
            [['old_password', 'new_password', 'confirm_password'], 'string', 'min' => 6, 'on' => 'update', 'tooShort' => '密码至少填6位'],
            ['old_password', 'check_old'],
            ['confirm_password', 'compare', 'compareAttribute' => 'new_password', 'operator' => '==', 'message' => '新旧密码不相等', 'on' => 'update']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->status = $this->status;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->created_at = $this->created_at;
        $user->updated_at = $this->updated_at;
        return $user->save(false) ? $user : null;
    }

    public function change_password()
    {
        if (!$this->validate()) {
            return null;
        }
        //判断用户名重复
        $old_user = User::findByUsername($this->username);
        $user = User::findIdentity($this->id);
        if ($this->username == $user->username || !$old_user) {
            $user->username = $this->username;
            $user->updated_at = date('Y-m-d H:i:s');
            $user->setPassword($this->new_password);
            $user->generateAuthKey();
            return $user->save(false) ? $user : null;
        } else {
            return null;
        }
    }

    public function check_old($attribute)
    {
        $model = $this->findIdentity($this->id);
        if (!Yii::$app->getSecurity()->validatePassword($this->old_password, $model->password_hash)) {
            $this->addError($attribute, '旧密码不正确');
        }
    }

    public function only_one($attribute)
    {
        if ($this->findByUsername($this->username)) {
            $this->addError($attribute, '用户已存在');
        }
    }
}
