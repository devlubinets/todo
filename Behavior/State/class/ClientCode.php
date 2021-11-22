<?php
declare(strict_types=1);

class  ClientCode
{
    public static function businessCode():void
    {
        $article = new Article(new StateDraft());
        $article->publish();
        $article->publish();
    }
}