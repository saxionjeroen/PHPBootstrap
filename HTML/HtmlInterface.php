<?php


interface HtmlInterface
{
    function addContentHtmlElement(HtmlElement $element);

    function addContentString(string $string);

    function addAttribute(string $name, string $value);

    function attributesToString();

    function contentToString();

    function toString();

    function __toString();

}