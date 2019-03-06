<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix method can be used for the prefix of each
    | route in the administration panel. For example, you can change to 'admin'
    |
    */
    'prefix' => env('DASHBOARD_PREFIX', 'console'),

    /*
    |--------------------------------------------------------------------------
    | Application Currency
    |--------------------------------------------------------------------------
    |
    | This value is the default currency of your store. This value is used when the
    | orders price is given. Your can use it on your frontend
    |
    */
    'currency'  => env('CURRENCY_SYMBOL', 'XAF'),

    /*
    |--------------------------------------------------------------------------
    | Shopper Resource
    |--------------------------------------------------------------------------
    |
    | Automatically connect the stored links. For example js and css files
    |
    */
    'resource' => [
        'stylesheets' => [],
        'scripts'     => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Provide a convenient mechanism for filtering HTTP
    | requests entering your application.
    |
    */
    'middleware' => [
        'public'  => ['public', 'web', 'localizationRedirect'],
        'private' => ['web', 'dashboard', 'localizationRedirect'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Mail Directory
    |--------------------------------------------------------------------------
    |
    */
    'mail_dir' => app_path('Mail/'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Mail Directory
    |--------------------------------------------------------------------------
    |
    | If you don't want to use this package in production env
    | at all, you can restrict that using this option
    | rather than by using a middleware.
    |
    */

    'allowed_environments' => ['local', 'staging', 'testing'],

    /*
   |--------------------------------------------------------------------------
   | Templates
   |--------------------------------------------------------------------------
   |
   | List of pre-defined templates used by maileclipse (HTML/Markdown)
   |
   |
   */

    'skeletons' => [

        'html' => [

            'airmail' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'cerberus' => [
                'fluid',
                'hybrid',
                'responsive',
            ],

            'cleave' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'go' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'goldstar' => [
                'birthday',
                'confirm',
                'invite',
                'invoice',
                'progress',
                'reignite',
                'survey',
                'update',
                'welcome',
            ],

            'mantra' => [
                'activation',
                'birthday',
                'coupon',
                'progress',
                'rating',
                'receipt',
                'shipped',
                'update',
                'welcome',
            ],

            'meow' => [
                'confirmation',
                'coupon',
                'digest-left',
                'digest-right',
                'progress',
                'receipt',
                'survey',
                'two-column',
                'welcome'
            ],

            'narrative' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'neopolitan' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'oxygen' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'plain' => [
                'plain'
            ],

            'skyline' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'sunday' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

            'zenflat' => [
                'confirm',
                'invite',
                'invoice',
                'ping',
                'progress',
                'reignite',
                'survey',
                'upsell',
                'welcome',
            ],

        ],

        'markdown' => [
            'postmark' => [
                'blank',
                'comment-notification',
                'invoice',
                'receipt',
                'reset-password',
                'reset-password-help',
                'trial-expired',
                'trial-expiring',
                'user-invitation',
                'welcome',
            ],
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage & Filemanager
    |--------------------------------------------------------------------------
    |
    | Specifies the configuration for resource storage, such as media and
    | upload files. These resources are used:
    |
    | media   - create this folder for the media manager.
    | uploads - generated by attachment model relationships.
    |
    */
    'storage' => [

        'disk' => ['local'],

        'uploads' => [
            'folder' => 'uploads',
            'path'   => storage_path('app/uploads'),
        ],

        'media' => [
            'folder' => 'media',
            'path'   => storage_path('app/media'),
        ],

    ],

    /**
     * Default disk for left manager
     * null - auto select the first disk in the disk list
     */
    'leftDisk'  => null,

    /**
     * Default disk for right manager
     * null - auto select the first disk in the disk list
     */
    'rightDisk' => null,

    /**
     * Image cache ( Intervention Image Cache )
     * set null, 0 - if you don't need cache (default)
     * if you want use cache - set the number of minutes for which the value should be cached
     */
    'cache' => null,

    /**
     * File manager modules configuration
     * 1 - only one file manager window
     * 2 - one file manager window with directories tree module
     * 3 - two file manager windows
     */
    'windowsConfig' => 2,

    /*
    |--------------------------------------------------------------------------
    | Image resize
    |--------------------------------------------------------------------------
    |
    | Resize and create thumbnails for previewImage on Brand, Category and Product
    | Model.
    |
    */
    'quality' => 70,
    'upsize'  => true,
    'thumbnails' => [
        [
            'name'  => 'medium',
            'scale' => '50'
        ],
        [
            'name'  => 'small',
            'scale' => '25'
        ],
        [
            'name' => 'cropped',
            'crop' => [
                'brand' => [
                    '145x50'  => ['width'  => '145', 'height' => '50']
                ],
                'product' => [
                    '1000x1000' => ['width'  => '1000', 'height' => '1000']
                ],
                'category' => [
                    '220x197' => ['width'  => '220', 'height' => '197']
                ]
            ]
        ]
    ],

];
