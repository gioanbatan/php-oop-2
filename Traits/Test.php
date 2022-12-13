<?php

trait Test
{
    protected $messageTest;

    public function setText($messageTest)
    {
        $this->messageTest = $messageTest;
    }

    public function getText()
    {
        return "sending:" . $this->messageTest;
    }
}
