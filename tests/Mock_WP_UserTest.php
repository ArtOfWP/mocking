<?php

class Mock_WP_UserTest extends PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function makeAPost() {
        $user = \ArtOfWP\Mocking\Mock_WP_User::make(['user_login' => 'test']);
        self::assertEquals('test', $user->user_login);
    }
}
