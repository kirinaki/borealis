<?php

namespace Core\Fieldsets;

class Field
{
    public static function image(string $id, string $label): \Carbon_Fields\Field\Field
    {
        return \Carbon_Fields\Field::make("image", "crb_$id", $label);
    }

    public static function text(string $id, string $label): \Carbon_Fields\Field\Field
    {
        return \Carbon_Fields\Field::make("text", "crb_$id", $label);
    }

    public static function textarea(string $id, string $label): \Carbon_Fields\Field\Field
    {
        return \Carbon_Fields\Field::make("textarea", "crb_$id", $label);
    }

    public static function richText(string $id, string $label): \Carbon_Fields\Field\Field
    {
        return \Carbon_Fields\Field::make("rich_text", "crb_$id", $label);
    }

    public static function complex(string $id, string $label): \Carbon_Fields\Field\Field
    {
        return \Carbon_Fields\Field::make("complex", "crb_$id", $label);
    }
}