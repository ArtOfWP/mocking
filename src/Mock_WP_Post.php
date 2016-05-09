<?php
namespace ArtOfWP\WP\Mocking;

class Mock_WP_Post {
    public static function makeArray($values) {
        $post['ID'] = 0;
        $post['post_author'] = 0;
        $post['post_name'] = '';
        $post['post_type'] = '';
        $post['post_title'] = '';
        $post['post_date'] = date('Y-m-d hh:mm:ss');
        $post['post_date_gmt'] = gmdate('Y-m-d hh:mm:ss');
        $post['post_content'] = '';
        $post['post_excerpt'] = '';
        $post['post_status'] = '';
        $post['comment_status'] = 'closed';
        $post['ping_status'] = 'closed';
        $post['post_password'] = '';
        $post['post_parent'] = 0;
        $post['post_modified'] = date('Y-m-d hh:mm:ss');
        $post['post_modified_gmt'] = gmdate('Y-m-d hh:mm:ss');
        $post['comment_count'] = 0;
        $post['menu_order'] = 0;
        return array_merge($post, $values);
    }
}