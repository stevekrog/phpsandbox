<?php
    class SelectMenu {
        private $items;  // array of items.
        private $options; // hold all html options
        private $selectMenu; // final select menu
        private $menuDefault; // final select menu
        private $menuName; // final select menu

        function __construct($itemArray='', $menuDefault='Pick a selection', $menuName='myMenu') {
            $this->items = $itemArray;
            $this->menuDefault = $menuDefault;
            $this->menuName = $menuName;
        }

        private function buildOptions() {
            $this->options = "<option value=''>".$this->menuDefault."</option>";
            forEach($this->items as $item) {
                $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
            }
        }

        private function buildSelect($options) {
            $this->selectMenu = "<select name=".$this->menuName.">".$options."</select>";
        }

        public function setOptions($array) {
            $this->items = $array;
        }

        public function makeMenu() {
            $this->buildOptions();
            $this->buildSelect($this->options);
            return $this->selectMenu;
        }
    }
?>
