<?php

return [
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => false,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
    'publish_date_24h' => true, // enable 24h format in publisher dates
    'publish_date_format' => 'd F Y H:i', // format used by publication date pickers
    'publish_date_display_format' => 'DD MMMM YYYY HH:mm', // format used when displaying the publication date
    'media-library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'public'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', true), // also delete off disk
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', '/'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Glide'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 8),
        'allowed_extenstions' => ['jpg', 'jpeg', 'png'],
        'init_alt_text_from_filename' => true,
    ],
    'auth_login_redirect_path' => '/admin',
];

// what is buckets?
// https://twill.io/docs/getting-started/configuration.html#enabled-features
