<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\Icon;

class Features extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Features';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Features block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'common';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'star-filled';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'cards' => [
            [
                'icon' => [
                    'icon' => 'fas fa-code-branch',
                ],
                'title' => 'Web Design',
                'subtitle' => 'Best in class web design',
                'item' => 'Item',
            ],
            [
                'icon' => [
                    'icon' => 'fab fa-twitter',
                ],
                'title' => 'Title',
                'subtitle' => 'Subtitle',
                'item' => 'Item',
            ],
            [
                'icon' => [
                    'icon' => 'fab fa-wordpress-simple',
                ],
                'title' => 'Title',
                'subtitle' => 'Subtitle',
            ],
            [
                'icon' => [
                    'icon' => 'fas fa-robot',
                ],
                'title' => 'Title',
                'subtitle' => 'Subtitle',
            ],
            [
                'icon' => [
                    'icon' => 'fas fa-wand-magic-sparkles',
                ],
                'title' => 'Title',
                'subtitle' => 'Subtitle',
            ],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'cards' => $this->cards(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $features = new FieldsBuilder('features');

        $features
            ->addRepeater('cards')
                ->addText('title')
                ->addText('subtitle')
                ->addFields($this->get(Icon::class))
            ->endRepeater();

        return $features->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function cards()
    {
        return get_field('cards') ?: $this->example['cards'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
