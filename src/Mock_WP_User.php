<?php
namespace ArtOfWP\WP\Mocking;

class Mock_WP_User {
    private static $IDs=0;
    public static function overload() {

    }

    /**
     * @param $properties
     * @return \Mockery\MockInterface returns mock of WP_User
     */
    public static function make($properties, $namespace='') {
        self::$IDs++;
        $wp_user= new \stdClass(); //\Mockery::mock('WP_User');
        //$wp_user= \Mockery::mock("$namespace\\WP_User");
        foreach($properties as $name => $value)
            $wp_user->$name = $value;
        if(!isset($wp_user->ID))
            $wp_user->ID=self::$IDs;
        if(!isset($wp_user->display_name))
            $wp_user->display_name=$wp_user->user_login;
        return $wp_user;
    }
}