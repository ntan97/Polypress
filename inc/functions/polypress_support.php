<?php

/**
 * Name: PolymerStructure
 * Description: Adds polymer features dynamically, based on an array input.
 *
 * @package polypress
 * @author Nathan Gould
 * @version 0.1b
 *
 */
  class PolymerStructure {

    /**
     * Name: Constructor
     * Description: Adds in globals, and sends in required polymer elements,
     * and sets us up for success.
     *
     */
    function  __construct() {
      $this->polymer_support = array();
      $this->add_to_polymer_support('polymer');

    }

    function add_to_polymer_support( $feature ) {
      array_push($this->polymer_support, $feature);
      return;
    }

    /**
     * Name: Get Polymer Files
     * Description: Public function to only be used in wp_head. Prints
     * formatted link meta tags.
     *
     */
    public function get_polymer_files() {
      // set local varibale
      $features = $this->polymer_support;
      // set polymer directory
      $polymer_directory = get_template_directory_uri()."/bower_components";

      foreach ($features as $feature) {
        if ($feature == 'roboto') {
          // added relative path for file exists check
          $feature_directory = './wp-content/themes/polypress/bower_components/font-roboto/'.$feature.'.html';
          // added absolute path for the printed meta tags
          $feature_directory_abs = './wp-content/themes/polypress/bower_components/font-roboto/'.$feature.'.html';
        } else {
          // added relative path for file exists check
          $feature_directory = './wp-content/themes/polypress/bower_components'.'/'.$feature.'/'.$feature.'.html';
          // added absolute path for the printed meta tags
          $feature_directory_abs = $feature_directory;
        }

        /** @TODO Double Check efficience of class, and all use cases */
        switch (file_exists($feature_directory)) {
          // on true print meta tag
          case true:
            echo '<link rel="import" href="'.$feature_directory_abs.'">';
            break;
          case false:
          /** @TODO Add in proper WP_Error() support, and trigger error */
            // $error = new WP_Error();
            // $error->add_data('404', 'test', 'data');
        }
      }
    }

    /**
     * Name: DESTRUCTION
     * Description: Just in case we need to destroy or reset anything
     *
     */
    public function __destruct() {
      return;
    }
  }

/**
 * Name: Add Polymer Support
 * Description: Runs through each feature presented in the array, adds to
 * the Polymer Support array. After everything has been added, add action to
 * head that fires the print method.
 *
 */
function add_polymer_support($features) {

  // initiate PolymerStructure
  $polymer_structure = new PolymerStructure;

  // loop through all features that have been added
  foreach ($features as $feature) {
    $polymer_structure->add_to_polymer_support($feature);
  }

  /** @TODO Figure out the best ordering for polymer elements */
  // print out the link rel="import" meta tags.
  add_action( 'wp_head', array($polymer_structure, 'get_polymer_files') );
}


?>
