
<?php

class Header_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = \null)
    {
        $output .= "<ul>";
    }

    function start_el(&$output, $item, $depth = 0, $args = \null, $id = 0)
    {
        if ($args->walker->has_children) {
            $output .= "<li class='dropdown'><a href='$item->url'>$item->title</a>";
        } else {
            $output .= "<li><a href='$item->url'>$item->title</a>";
        }
    }
}
