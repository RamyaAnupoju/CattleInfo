<?php
  namespace cow;

  class Cow {
    // Properties
    public $name;
    public $imagePath;
    public $details;

    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_imagePath($imagePath) {
      $this->imagePath = $imagePath;
    }
    function get_imagePath() {
      return $this->imagePath;
    }
    function set_details($details) {
      $this->details = $details;
    }
    function get_details() {
      return $this->details;
    }
  }
?>