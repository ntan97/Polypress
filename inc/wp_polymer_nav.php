<?php
class polymer_walker_nav_menu extends Walker_Nav_Menu {

    // Set the properties of the element which give the ID of the current item and its parent
    var $db_fields = array( 'parent' => 'parent_id', 'id' => 'object_id' );

    // Displays start of a level.
    // @see Walker::start_lvl()
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
  		$indent = str_repeat( "\t", $depth );
  		$output .= "\n$indent<paper-dropdown-menu label=\"Your favourite pastry\"><paper-dropdown-menu>\n";
  	}
    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</paper-menu></paper-dropdown-menu>\n";
    }

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= "<paper-item><a href=".$item->url.">".esc_attr($item->title);
    }

    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "</a></paper-item>\n";
    }

    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
          parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

} ?>
