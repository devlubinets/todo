<?php
declare(strict_types=1);

class User
{
    private CommandBoldText $commandBoldText;
    private CommandItalic $commandItalic;
    private CommandDBadd $commandDBadd;

    /**
     * @param CommandBoldText $commandBoldText
     */
    public function setCommandBoldText(CommandBoldText $commandBoldText): void
    {
        $this->commandBoldText = $commandBoldText;
    }

    /**
     * @param CommandItalic $commandItalic
     */
    public function setCommandItalic(CommandItalic $commandItalic): void
    {
        $this->commandItalic = $commandItalic;
    }

    /**
     * @param CommandDBadd $commandDBadd
     */
    public function setCommandDBadd(CommandDBadd $commandDBadd): void
    {
        $this->commandDBadd = $commandDBadd;
    }


    public function boldText():string
    {
        return $this->commandBoldText->execute();
    }

    public function italicText():string
    {
        return $this->commandItalic->execute();
    }

    public function addDBToString():string
    {
        return $this->commandDBadd->execute();
    }
}