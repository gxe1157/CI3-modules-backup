<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rename Perfectcontroller to [Name]
class Musical extends MY_Controller
{

/* model name goes here */
var $mdl_name = 'mdl_';
var $store_controller = '';

var $column_rules = array(
        array('field' => ' ... ', 'label' => ' ... ', 'rules' => ' ... '),
);

function __construct() {
    parent::__construct();

}


/* ===================================================
    Controller functions goes here. Put all DRY
    functions in applications/core/My_Controller.php
  ==================================================== */
function instrument()
{
  // get item id from url
  $item_url = $this->uri->segment(3);
  $this->load->module('store_items');
  $item_id = $this->store_items->_get_item_id_from_item_url($item_url);
  $this->store_items->view($item_id);
  //echo "<h3>".$item_id."</h3>";
}




/* ===============================================
    Call backs go here...
  =============================================== */




/* ===============================================
    David Connelly's work from perfectcontroller
    is in applications/core/My_Controller.php which
    is extened here.
  =============================================== */


} // End class Controller
