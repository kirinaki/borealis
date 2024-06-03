<?php

$context['post'] = $post;
\Core\Facades\View::render("views/single", $context);
