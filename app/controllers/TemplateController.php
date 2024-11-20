<?php

class TemplateController {

    public function header()
    {
      require_once '../app/views/template/header.php';
    }

    public function footer()
    {
      require_once '../app/views/template/footer.php';
    }

}