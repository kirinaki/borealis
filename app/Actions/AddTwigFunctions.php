<?php

namespace App\Actions;


use Core\Contracts\Registrable;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AddTwigFunctions implements Registrable
{

    public function register(): void
    {
        global $twig;

        $twig->addFunction(new TwigFunction('wp_head', function () {
            do_action('wp_head');
        }));

        $twig->addFunction(new TwigFunction('wp_footer', function () {
            do_action('wp_footer');
        }));

        $twig->addFunction(new TwigFunction('body_class', function ($css_class = '') {
            echo sprintf("class=\"%s index-two\"", esc_attr(implode(' ', get_body_class($css_class))));
        }));

        $twig->addFunction(new TwigFunction("attach", function ($id) {
            return wp_get_attachment_url($id);
        }));

        $twig->addFilter(new TwigFilter("sanitize_phone", function ($phone) {
            return preg_replace('/[^0-9]/', '', $phone);
        }));
    }
}