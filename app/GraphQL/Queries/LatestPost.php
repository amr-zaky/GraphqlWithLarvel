<?php

namespace App\GraphQL\Queries;

class LatestPost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return \App\Models\Post::all()->last();
    }
}
