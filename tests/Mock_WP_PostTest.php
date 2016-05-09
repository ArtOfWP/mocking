<?php

class Mock_WP_PostTest extends PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function makeAPost() {
        $post = \ArtOfWP\WP\Mocking\Mock_WP_Post::makeArray(['post_name' => 'test']);
        self::assertEquals('test', $post['post_name']);
    }
}
