<?php
    class book
    {
        public $name;
        public $no_pages;
        public $type;



        function open()
        {
            echo "opening....";
        }

        function close()
        {
            echo "closing....";
        }

        function page_turn()
        {
            echo "page turning....";
        }

    }
?>