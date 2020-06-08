<?php

return [


    /*
    |--------------------------------------------------------------------------
    |  Thumbnail Feature
    |--------------------------------------------------------------------------
    |
    | This option defines whether to use Package's Thumbnail Featured or not
    | Default option is true
    | 
    */
    'thumbnail' => true,

    /*
    |--------------------------------------------------------------------------
    | Thumbnail Qualities
    |--------------------------------------------------------------------------
    |
    | These options are default post image and its thumbnail quality
    | 
    | 
    */

    'image_quality' => 80,
    'medium_thumbnail_quality' => 60,
    'small_thumbnail_quality' => 30,

    /*
    |--------------------------------------------------------------------------
    | Default Image Fit Size
    |--------------------------------------------------------------------------
    |
    | These options is default post imahe height and width fit size
    | 
    | 
    */

    'img_width' => 1000,
    'img_height' => 800,

    'medium_thumbnail_width' => 800,
    'medium_thumbnail_height' => 600,

    'small_thumbnail_width' => 400,
    'small_thumbnail_height' => 300,

    /*
    |--------------------------------------------------------------------------
    | Image and Thumbnail Storage Path
    |--------------------------------------------------------------------------
    |
    | Define your default image storage location along with its thumbnail
    | 
    | 
    */

    "storage_path" => "uploads"

];
