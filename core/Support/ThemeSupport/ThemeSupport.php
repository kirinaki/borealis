<?php

namespace Core\Support\ThemeSupport;

use Core\Contracts\Registrable;

abstract class ThemeSupport implements Registrable
{
    const ADMIN_BAR = 'admin-bar';
    const ALIGN_WIDE = 'align-wide';
    const APPEARANCE_TOOLS = 'appearance-tools';
    const AUTOMATIC_FEED_LINKS = 'automatic-feed-links';
    const BLOCK_TEMPLATES = 'block-templates';
    const BLOCK_TEMPLATE_PARTS = 'block-template-parts';
    const BORDER = 'border';
    const CORE_BLOCK_PATTERNS = 'core-block-patterns';
    const CUSTOM_BACKGROUND = 'custom-background';
    const CUSTOM_HEADER = 'custom-header';
    const CUSTOM_LINE_HEIGHT = 'custom-line-height';
    const CUSTOM_LOGO = 'custom-logo';
    const CUSTOMIZE_SELECTIVE_REFRESH_WIDGETS = 'customize-selective-refresh-widgets';
    const CUSTOM_SPACING = 'custom-spacing';
    const CUSTOM_UNITS = 'custom-units';
    const DARK_EDITOR_STYLE = 'dark-editor-style';
    const DISABLE_CUSTOM_COLORS = 'disable-custom-colors';
    const DISABLE_CUSTOM_FONT_SIZES = 'disable-custom-font-sizes';
    const DISABLE_CUSTOM_GRADIENTS = 'disable-custom-gradients';
    const DISABLE_LAYOUT_STYLES = 'disable-layout-styles';
    const EDITOR_COLOR_PALETTE = 'editor-color-palette';
    const EDITOR_GRADIENT_PRESETS = 'editor-gradient-presets';
    const EDITOR_FONT_SIZES = 'editor-font-sizes';
    const EDITOR_STYLES = 'editor-styles';
    const FEATURED_CONTENT = 'featured-content';
    const HTML5 = 'html5';
    const LINK_COLOR = 'link-color';
    const MENUS = 'menus';
    const POST_FORMATS = 'post-formats';
    const POST_THUMBNAILS = 'post-thumbnails';
    const RESPONSIVE_EMBEDS = 'responsive-embeds';
    const STARTER_CONTENT = 'starter-content';
    const TITLE_TAG = 'title-tag';
    const WIDGETS = 'widgets';
    const WIDGETS_BLOCK_EDITOR = 'widgets-block-editor';
    const WP_BLOCK_STYLES = 'wp-block-styles';


    abstract function definition(): string;

    protected function options()
    {
        return null;
    }

    public function register(): void
    {
        $options = $this->options();
        if ($options == null) {
            add_theme_support($this->definition());
            return;
        }
        add_theme_support($this->definition(), $this->options());
    }
}