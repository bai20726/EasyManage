<?php
/**
 *  @package Contact Form
 */


   /*

Plugin Name: Contact-FORM
Plugin URI:https://github.com/bai20726/EasyManage.git
Author: Christine Mboya
Author URI: https://github.com/bai20726/EasyManage.git
Description: This is a custom plugin that collect information for easy-manage theme from the landing page where the user tells us more information
Version: 1.0
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: https://github.com/bai20726/EasyManage.git

*/

/**
 * Securing A plugin
 */

defined('ABSPATH') or die('gerara here!');



class ContactReg{
    function __construct(){
       

        $this->pass_data_to_db();   
    }

    function activate(){ 
        $this->create_table_to_db();
        flush_rewrite_rules();
    }

    function deactivate(){
   
        flush_rewrite_rules();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = 'wp_contacts';
       

        $contact_details = "CREATE TABLE $table_name(
            fullname text NOT NULL,
            email varchar(35) NOT NULL,
            message text NOT NULL
        );";

      

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($contact_details);
    }

    function pass_data_to_db(){
        if (isset($_POST['submitbtn'])){
            $data = array(
                'fullname'=>$_POST['fullname'],
                'message'=>$_POST['message']
            );
            if (isset($_POST['email'])) {
                $data['email'] = $_POST['email'];
            }
            global $wpdb;
            $tableName= 'wp_contacts';
            $result = $wpdb->insert($tableName, $data, $format=NULL);
        
            if($result == true){
                echo "<script>alert('Message sent successful. Thank you');</script>";
            }else{
                echo "<script>alert('Unable to submit request');</script>";
            }
        }
    }
} // add this closing brace

if (class_exists('ContactReg')){
    $contactRegInstance = new ContactReg();
}

//activation
register_activation_hook(__FILE__, array($contactRegInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($contactRegInstance, 'deactivate'));
