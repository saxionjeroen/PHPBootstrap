<?php
require_once "HtmlElement.php";

class Button extends HtmlElement
{
    /**
     * Button constructor.
     * @param string $color
     */
    public function __construct(string $color = HtmlColor::COLOR_DEFAULT)
    {
        $this->type = "button";
        $this->addAttribute("class", "btn btn-" . $color);
    }
}