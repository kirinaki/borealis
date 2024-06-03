<?php

namespace Core;

use Core\Contracts\Registrable;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

class View implements Registrable
{
    private \Twig\Environment $twig;

    public function register(): void
    {
        global $loader;

        $loader = new FilesystemLoader([
            dirname(__DIR__) . '/resources'
        ]);

        $this->twig = new Environment($loader, [
            'debug' => \Core\Facades\Config::get("app.debug"),
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->setupBaseFunctions();

    }

    private function setupBaseFunctions(): void
    {
        $this->twig->addFunction(new TwigFunction('wp_head', function () {
            do_action('wp_head');
        }));

        $this->twig->addFunction(new TwigFunction('wp_footer', function () {
            do_action('wp_footer');
        }));

        $this->twig->addFunction(new TwigFunction('body_class', function ($css_class = '') {
            echo sprintf("class=\"%s index-two\"", esc_attr(implode(' ', get_body_class($css_class))));
        }));

        $this->twig->addFunction(new TwigFunction("attach", function ($id) {
            return wp_get_attachment_url($id);
        }));
    }

    public function addFunction(TwigFunction $twigFunction): void
    {
        $this->twig->addFunction($twigFunction);
    }

    public function make(string $view, $context): string
    {
        return $this->twig->render($view . ".twig", $context);
    }

    public function render(string $view, $context): void
    {
        echo $this->make($view, $context);
    }
}