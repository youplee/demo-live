<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * test function create new user.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $user = new User;
        $data = ['name' => 'bon codeur', 'email' => time().'@gmail.com', 'password' => '123456'];
        $this->assertIsObject($user->createUser($data));
    }
    /**
     * test function get all users.
     *
     * @return void
     */
    public function testGetUsers()
    {
        $user = new User;
        $this->assertIsObject($user->getUsers());
    }

    /**
     * test function delete user.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = new User;
        $userToDelete = $user->getFirstUser();
        $this->assertTrue($user->deleteUser($userToDelete->id));
    }

    /**
     * test function existing users.
     *
     * @return void
     */
    public function testExistingUsers()
    {
        $user = new User;
        $data = ['name' => 'bon codeur', 'email' => time().'test@gmail.com', 'password' => '123456'];
        $user->createUser($data);
        $this->assertTrue($user->checkExistingUsers());
    }

    /**
     * test function existing users.
     *
     * @return void
     */
    public function testNoExistingUsers()
    {
        $user = new User;
        $user->deleteAllUsers();
        $this->assertFalse($user->checkExistingUsers());
    }


}
