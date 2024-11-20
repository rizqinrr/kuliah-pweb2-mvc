<?php

class TemplateController {

    public function header()
    {
      require_once '../app/views/templates/header.php';
    }

    public function footer()
    {
      require_once '../app/views/templates/footer.php';
    }

}