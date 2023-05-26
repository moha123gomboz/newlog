<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    public static function find($slug)

    {
        $path = __dir__."/../resources/posts/{$slug}.html";
    }

    public static function all()
    {
$object=YamlFrontMatter::parseFile(resource_path("posts/first-post.html"));
    $files = file::files(resource_path("posts"));
    return collect($files)->map(function ($file){
        $object = YamlFrontMatter::parseFile($file);
        return $object->getContents();
    })->sort('date');
    }
}
