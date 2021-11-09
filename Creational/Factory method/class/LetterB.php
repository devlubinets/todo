<?php

class LetterB implements ProductInterface
{
    private string $letter = 'B';

    /**
     * @param string $letter
     */
    public function show(): void
    {
        echo "<div class='cls1'><br>". __CLASS__ ."letter:$this->letter</div>";
    }

}