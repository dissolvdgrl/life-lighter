<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use A17\Twill\Models\Tag;
use A17\Twill\Models\Tagged;
use App\Models\Slugs\PostSlug;

class Post extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'publish_start_date',
        'author',
        'content',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'featured_image' => [
            'thumbnail' => [
                [
                    'name' => 'thumbnail',
                    'ratio' => 4 / 3,
                ],
            ],
            'cover' => [
                [
                    'name' => 'cover',
                    'ratio' => 16 / 9
                ]
            ]
        ],
    ];

    protected $casts = [
        'created_at' => 'date:d M Y',
    ];
}
