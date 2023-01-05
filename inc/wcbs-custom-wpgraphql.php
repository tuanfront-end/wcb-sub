<?php
//
add_action('graphql_register_types', function () {
    register_graphql_field('ContentNode', 'contentOrigin', [
        'type' => 'String',
        'description' => __('Content origin of post', 'wcbs'),
        'resolve'       => function (\WPGraphQL\Model\Post $post, $args, $context, $info) {
            $postID = $post->databaseId;
            return get_post($postID)->post_content;
        }
    ]);
});
