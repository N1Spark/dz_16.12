<?php
class Menu {
    public $listItems = [];
    public function AddMenuItem($name, $url) {
        $menuItem = new MenuItem($name, $url);
        $this->listItems[] = $menuItem;
    }
    public function PrintMenu($width, $height, $backgroundColor, $color) {
        echo "<ul style='list-style: none; padding: 0; margin: 0;'>";
        foreach ($this->listItems as $item) {
            echo "<li style='background-color: $backgroundColor; width: {$width}px; height: {$height}px; float: left;'>";
            echo "<a href='{$item->url}' style='color: $color; text-decoration: none; display: flex; align-items: center; justify-content: center; height: 100%; font-size: 18px;'>{$item->name}</a>";
            echo "</li>";
        }
        echo "</ul>";
        echo "<div style='clear: both;'></div>";
    }
}
