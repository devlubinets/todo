<?php

class StatePublish implements StateInterface
{
    private Article $article;

    public function publish(): void
    {
        echo "<div class='cls2'><br>Работа модератора над статьей на этапе черновика окончена</div>";
    }

    public function setContext(Article $article): void
    {
        $this->article = $article;
    }

}