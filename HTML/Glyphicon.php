<?php
require_once "HtmlElement.php";

class Glyphicon extends HtmlElement{


    /**
     * Glyphicon constructor.
     */
    public function __construct(string $symbol)
    {
        $this->type = "span";
        $this->addAttribute("class", "glyphicon glyphicon-" . $symbol);
    }
}