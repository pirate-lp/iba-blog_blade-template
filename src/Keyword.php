<?php

namespace LILPLP\IBAsBlog;

use LILPLP\IBA\Keyword as KeywordBase;
use LILPLP\IBAsBlog\Post as Post;

class Keyword extends KeywordBase
{
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'keywordable');
	}
}
