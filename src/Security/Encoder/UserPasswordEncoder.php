<?php


namespace App\Security\Encoder;


use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;

class UserPasswordEncoder extends BasePasswordEncoder
{
    /**
     * {@inheritdoc}
     */
    public function encodePassword($raw, $salt)
    {
        if ($salt === null) {
            $salt = substr(md5(uniqid(rand(), true)), 0, 9);
        } else {
            $salt = substr($salt, 0, 9);
        }

        $passwdString = $salt . sha1($salt . $raw);

        return $passwdString;
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        return $this->encodePassword($raw, $salt) === $encoded;
    }
}
