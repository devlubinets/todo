<?php

class LetterA implements ProductInterface
{
    private string $letter = 'A';

    /**
     * @param string $letter
     */
    public function show(): void
    {
        echo "<div class='cls1'><br> Class: ". __CLASS__ ."consist letter:$this->letter</div>";
    }

}