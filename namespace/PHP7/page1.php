<?php 
namespace PHP7;
    class page1
    {
        public $content;
        public function __construct($title, $content)
        {
            $this->title = $title;
            $this->content = $content;
        }
        public function get()
        {
            echo "ыамумумуми";
        }
    }