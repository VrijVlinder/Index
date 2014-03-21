<?php if (!defined('APPLICATION')) exit();


// Define the plugin:


$PluginInfo['Index'] = array(
   'Name'=>'Index',
   'Description' => "This plugin adds css dropdown menu to the menu.",
   'Version' => '1.1',
   'MobileFriendly'=>TRUE,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class Index_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }


public function Base_Render_Before($Sender) {
$Sender->AddJsFile('plugins/Index/index.js');
$Sender->AddCssFile('plugins/Index/design/index.css');
}


           















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
