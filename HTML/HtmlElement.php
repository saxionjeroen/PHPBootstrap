<?php
require_once "HtmlInterface.php";

class HtmlElement implements HtmlInterface
{
    protected $type;
    protected $attributes = [];
    protected $content = [];

    /**
     * HtmlElement constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function addContentHtmlElement(HtmlElement $element)
    {
        $this->content[] = $element;
        return $this;
    }

    public function addContentString(string $string)
    {
        $this->content[] = $string;
        return $this;
    }

    public function addAttribute(string $name, string $value)
    {
        if (!isset($this->attributes[$name])) {
            $this->attributes[$name] = $value;
        } else {
            $this->attributes[$name] = $this->attributes[$name] . " " . $value;
        }
        return $this;
    }

    public function attributesToString()
    {
        $optionstring = "";
        foreach ($this->attributes as $key => $item) {
            $optionstring .= $key . '="' . $item . '" ';
        }
        return $optionstring;
    }

    public function contentToString()
    {
        $p = "";
        foreach ($this->content as $key => $item) {
            if ($item instanceof HtmlElement) {
                $p .= $item->toString();
            } else {
                $p .= $item;
            }
        }
        return $p;
    }

    public function toString()
    {
        return '<' . $this->type . ' ' . $this->attributesToString() . ' >' . $this->contentToString() . '</' . $this->type . '>';
    }

    public function __toString()
    {
        return $this->toString();
    }


}