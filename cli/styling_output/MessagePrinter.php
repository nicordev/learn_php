<?php

class MessagePrinter
{
    public const STYLE_NORMAL = 0;
    public const STYLE_SUCCESS = 1;
    public const STYLE_WARNING = 2;
    public const STYLE_ERROR = 3;

    private $styles = ["\e[0m", "\e[32m", "\e[33m", "\e[31m"];

    public function __construct(?array $styles = null)
    {
        $this->styles = $styles ?? $this->styles;
    }

    public function print(string $message, int $style = self::STYLE_NORMAL)
    {
        echo $this->getFormattedMessage($message, $style);
    }

    public function getFormattedMessage(string $message, int $style = self::STYLE_NORMAL)
    {
        return "{$this->styles[$style]}{$message}{$this->styles[0]}\n";
    }

    public function setStyles(array $styles)
    {
        $this->styles = $styles;
    }
}
