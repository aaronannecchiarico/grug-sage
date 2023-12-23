<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\SvgIcon;

class Client extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Client', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'client';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Client block.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'formatting';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'star-filled';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = ['client', 'heading', 'title'];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = ['post', 'page'];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'preview';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
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
        $this->styles = [
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
        $this->example = [
            'client' => [
                'client_icons' => SvgIcon::example(),
                'client_text' => '',
            ]
        ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'client' => $this->client(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $client = new FieldsBuilder('client');

        $client
        ->addText('client_text', [
            'label' => __('Client Text', 'sage'),
            'default_value' => 'We work with the best',
        ])
        ->addRepeater('client_icons', [
            'label' => __('Client Icons', 'sage'),
            'layout' => 'block',
            'button_label' => __('Add Icon', 'sage'),
        ])
            ->addFields($this->get(SvgIcon::class))
        ->endRepeater();

        return $client->build();
    }

    /**
     * Return the client field.
     *
     * @return array
     */
    public function client()
    {
        return [
            'client_text' => get_field('client_text') ?: $this->example['client_text'],
            'client_icons' => get_field('client_icons') ?: $this->example['client_icons'],
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
