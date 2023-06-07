<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
            public $id;
            public $first_name;
            public $last_name;
            public $password;
            public $authKey;
            public $accessToken;
            /**
             * {@inheritdoc}
             */
            public static function findIdentity($id)
            {
                return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
            }

            /**
             * {@inheritdoc}
             */
            public static function findIdentityByAccessToken($token, $type = null)
            {
                foreach (self::$users as $user) {
                    if ($user['accessToken'] === $token) {
                        return new static($user);
                    }
                }

                return null;
            }

            /**
             * Finds user by username
             *
             * @param string $first_name
             * @param string $last_name
             * @return static|null
             */
            public static function findByUsername($first_name, $last_name)
            {
                    $user = User::find()->where(['first_name' => $first_name , 'last_name' => $last_name])->one();
                    if($user) {
                        return new static($user);
                    }

                return null;
            }

            /**
             * {@inheritdoc}
             */
            public function getId()
            {
                return $this->id;
            }

            /**
             * {@inheritdoc}
             */
            public function getAuthKey()
            {
                return $this->authKey;
            }

            /**
             * {@inheritdoc}
             */
            public function validateAuthKey($authKey)
            {
                return $this->authKey === $authKey;
            }

            /**
             * Validates password
             *
             * @param string $password password to validate
             * @return bool if password provided is valid for current user
             */
            public function validatePassword($password)
            {
                return $this->password === $password;
            }

}