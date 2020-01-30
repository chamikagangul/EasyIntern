<?php

function inputBlock($type, $label, $name, $value = '', $inputAttrs = [], $divAttrs = [])
{
    $divString = stringfyAttrs($divAttrs);
    $inputstring = stringfyAttrs($inputAttrs);
    $html = '';
    $html .= "<div " . $divString . '>';
    $html .= '<label for="' . $name . '">' . $label . '</label>';
    $html .= '<input type="' . $type . '" id="' . $name . '" name="' . $name . '" value="' . $value . '"' . $inputstring . '/>';
    $html .= "</div>";
    return $html;
}

function submitTag($buttonTag, $inputAttrs = []){
    $inputstring = stringfyAttrs($inputAttrs);
    $html = '<input type="submit" value="'.$buttonTag.'"'.$inputstring.'/>';
    return $html;
}

function submitBlock($buttonText, $inputAttrs = [], $divAttrs = [])
{
    $divString = stringfyAttrs($divAttrs);
    $inputstring = stringfyAttrs($inputAttrs);
    $html = '';
    $html .= "<div " . $divString . '>';
    $html .= '<input type="submit" value="' . $buttonText . '"' . $inputstring . '/>';
    $html .= "</div>";
    return $html;
}

function stringfyAttrs($attrs)
{
    $string = "";
    foreach ($attrs as $key => $val) {
        $string .= ' ' . $key . '="' . $val . '"';
    }
    return $string;
}
