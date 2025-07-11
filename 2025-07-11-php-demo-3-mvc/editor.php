<?php
function adminer_object() {

  class AdminerSoftware extends Adminer\Adminer {

    function database() {
      // database name, will be escaped by Adminer
      return 'quotes';
    }
  }

  return new AdminerSoftware;
}

include './adminer-editor.php';