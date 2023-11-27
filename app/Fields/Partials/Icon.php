<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Icon extends Partial
{
    public $icons = [
        [
            'name' => 'facebook',
            'icon' => 'fab fa-facebook'
        ],
        [
            'name' => 'twitter',
            'icon' => 'fab fa-twitter'
        ],
        [
            'name' => 'wordpress',
            'icon' => 'fab fa-wordpress-simple'
        ],
        [
            'name' => 'code-branch',
            'icon' => 'fas fa-code-branch'
        ],
        [
            'name' => 'robot',
            'icon' => 'fas fa-robot'
        ],
        [
            'name' => 'lock',
            'icon' => 'fas fa-lock'
        ],
        [
            'name' => 'moneybill',
            'icon' => 'fas fa-money-bill'
        ],
        [
            'name' => 'moneybills',
            'icon' => 'fas fa-money-bills'
        ],
        [
            'name' => 'magic-wand-sparkles',
            'icon' => 'fas fa-wand-magic-sparkles'
        ],
        [
            'name' => 'eye',
            'icon' => 'fas fa-eye'
        ]
    ];
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $faIcon = new FieldsBuilder('icon');

        $faIcon->addGroup('icon', ['label' => 'Icon'])
            ->addSelect('icon',
                [
                    'label' => 'Icon',
                    'choices' => array_reduce($this->icons, function ($carry, $item) {
                        $carry[$item['icon']] = $item['name'];
                        return $carry;
                    }, []),
                    'default_value' => 'fas fa-robot',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ]
            )
            ->endGroup();

        return $faIcon;
    }
}
