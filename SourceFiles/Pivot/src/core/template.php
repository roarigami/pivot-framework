<?php
declare(strict_types=1);

namespace Pivot\src\core;
class Template
{

  private $template;

  public function __construct($template) {
      $this->template = $template;
  }

  function view($template, $variables) {

      extract($variables);
      include $this->template . '.php';
  }

}
