<?php

namespace App\Actions;

class SetGeneralContext extends Action
{
    public function handle(): void
    {
        global $context;

        $context['site'] = [
            'locale' => get_language_attributes(),
            'url' => site_url(),
            'public' => get_template_directory_uri() . "/public",
            'assets' => get_template_directory_uri() . "/resources/assets",
            'description' => get_bloginfo('description'),
            'charset' => get_bloginfo('charset'),
            'pingback_url' => get_bloginfo('pingback_url'),
            'form' => esc_url(admin_url('admin-post.php'))
        ];
    }
}