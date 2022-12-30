<?php

namespace App\Handlers;

use Parsedown;

class MarkdownHandler
{
    protected $htmlConverter;

    protected $markdownConverter;

    public function __construct()
    {
        $this->markdownConverter = new Parsedown();
    }

    public function convertMarkdownToHtml($markdown)
    {
        return $this
            ->markdownConverter
            ->setSafeMode(true)
            ->setBreaksEnabled(true)
            ->text($markdown);
    }
}
