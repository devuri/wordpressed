<?php namespace Square1\Wordpressed;

use Square1\Wordpressed\Post as Post;

class Attachment extends Post
{
    /**
     * @var string The type of WP post
     */
    protected $postType = 'attachment';

    /**
     * @var array Models to lazy load
     */
    protected $with = ['meta'];
}
