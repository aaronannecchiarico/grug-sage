<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SvgIcon extends Partial
{
    public $svgIcons = [
        'images.openai', 'images.wordpress', 'images.wordpress2', 'images.wordpress3', 'images.shopify', 'images.typeform', 'images.tailwind'
    ];

    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $svgIcon = new FieldsBuilder('svg_icon');

        $svgIcon->addGroup('svg_icon', ['label' => 'SVG Icon'])
            ->addSelect('icon', ['label' => 'Icon'])
                ->addChoices($this->svgIcons)
            ->endGroup();

        return $svgIcon;
    }

    public static function example() {
        return [
            'images.openai', 'images.wordpress', 'images.shopify', 'images.typeform'
        ];
    }
}
