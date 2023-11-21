<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Hero';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Hero block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

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
    public $keywords = ['hero', 'heading', 'title'];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['post', 'page'];

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
    public $hero = [
        'hero_heading' => 'Turn terminally online lurkers into',
        'hero_heading_focus' => 'lifetime customers',
        'hero_feature_text' => 'Capterra',
        'hero_feature_subtext' => 'Rated best over 37k reviews',
        'hero_subheading' => 'SMALL BUSINESS SOLUTIONS FOR THE MODERN WORLD',
        'hero_button' => [
            'hero_button_link' => '#',
            'hero_button_text' => 'Contact Us',
        ],
        'hero_form' => [
            'hero_form_name_label' => 'Name',
            'hero_form_name_placeholder' => 'grug',
            'hero_form_email_label' => 'Email',
            'hero_form_email_placeholder' => 'grug@somecompany.com',
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
            'hero' => $this->hero()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('hero_heading')
            ->addText('hero_heading_focus')
            ->addText('hero_subheading')
            ->addText('hero_feature_text')
            ->addLink('hero_feature_subtext')
            ->addLink('hero_button_link')
            ->addText('hero_button_text');

        return $hero->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function hero()
    {
        $hero_heading = get_field('hero_heading') ?: $this->hero['hero_heading'];
        $hero_heading_focus = get_field('hero_heading_focus') ?: $this->hero['hero_heading_focus'];
        $hero_subheading = get_field('hero_subheading') ?: $this->hero['hero_subheading'];
        $hero_feature_text = get_field('hero_feature_text') ?: $this->hero['hero_feature_text'];
        $hero_feature_subtext = get_field('hero_feature_subtext') ?: $this->hero['hero_feature_subtext'];
        $hero_button_link = get_field('hero_button_link') ?: $this->hero['hero_button']['hero_button_link'];
        $hero_button_text = get_field('hero_button_text') ?: $this->hero['hero_button']['hero_button_text'];
        $hero_form_name_label = get_field('hero_form_name_label') ?: $this->hero['hero_form']['hero_form_name_label'];
        $hero_form_name_placeholder = get_field('hero_form_name_placeholder') ?: $this->hero['hero_form']['hero_form_name_placeholder'];
        $hero_form_email_label = get_field('hero_form_email_label') ?: $this->hero['hero_form']['hero_form_email_label'];
        $hero_form_email_placeholder = get_field('hero_form_email_placeholder') ?: $this->hero['hero_form']['hero_form_email_placeholder'];

        return [
            'hero_heading' => $hero_heading,
            'hero_heading_focus' => $hero_heading_focus,
            'hero_subheading' => $hero_subheading,
            'hero_feature_text' => $hero_feature_text,
            'hero_feature_subtext' => $hero_feature_subtext,
            'hero_button' => [
                'hero_button_link' => $hero_button_link['url'],
                'hero_button_text' => $hero_button_text,
            ],
            'hero_form' => [
                'hero_form_name_label' => $hero_form_name_label,
                'hero_form_name_placeholder' => $hero_form_name_placeholder,
                'hero_form_email_label' => $hero_form_email_label,
                'hero_form_email_placeholder' => $hero_form_email_placeholder,
            ],
        ];
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
