<?php

class StateDraft implements StateInterface
{
    private Article $article;

    public function publish(): void
    {
        echo "<div class='cls1'><br>Работа над статьей на этапе черновика окончена</div>";
        $this->article->changeState(new StatePublish);
    }

    public function setContext(Article $article): void
    {
        $this->article = $article;
    }

}