<?php


use PHPUnit\Framework\TestCase;
//use users\user;

class UserServiceTest extends TestCase
{
    private static $user;

    public static function setUpBeforeClass() : void
    {
        self::$user=new users();
        self::$user->setName("Dina");
        self::$user->setEmail("Dina@gmail.com");

    }

    public function test_getName()
    {
        $this->assertTrue(self::$user->getName() === "Dina");
    }
    public function test_getEmail()
    {
        $this->assertTrue(self::$user->getEmail() === "Dina@gmail.com");
    }
    public function test_setName()
    {
        $name = "Youssef";
        self::$user->setName($name);
        $this->assertTrue(
            self::$user->getName() === $name
        );
    }
    public function test_set_email()
    {
        $email = "Youssef@google.com";
        self::$user->setName($email);
        $this->assertTrue(
            self::$user->getName() === $email
        );
    }
}
