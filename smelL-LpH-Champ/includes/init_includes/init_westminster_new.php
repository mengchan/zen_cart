<?php
if (!defined('IS_ADMIN_FLAG'))
{
	die('Illegal Access');
}

// check that Westminster New is enabled
$template_select = $db->Execute("SELECT * FROM " . TABLE_TEMPLATE_SELECT . " WHERE template_dir = 'westminster_new' LIMIT 1;");
if ($template_select->RecordCount() > 0) {
  // add upgrade script
  $westminster_new_version = (defined('WESTMINSTER_NEW_VERSION') ? WESTMINSTER_NEW_VERSION : 'new');
  $current_version = '1.3';
  while ($westminster_new_version != $current_version)
  {
	  switch ($westminster_new_version)
	  {
		  case 'new':
			  // perform upgrade
			  if (file_exists(DIR_WS_INCLUDES . 'installers/westminster_new/1_3.php'))
			  {
				  include_once(DIR_WS_INCLUDES . 'installers/westminster_new/1_3.php');
				  $westminster_new_version = '1.0';
				  break;
			  }
			  else
			  {
				  break 2;
			  }
		  case '1.4':
			  // perform upgrade
			  if (file_exists(DIR_WS_INCLUDES . 'installers/westminster_new/1_4.php'))
			  {
				  include_once(DIR_WS_INCLUDES . 'installers/westminster_new/1_4.php');
				  $westminster_new_version = '1.1';
				  break;
			  }
			  else
			  {
				  break 2;
			  }
		  default:
			  $westminster_new_version = $current_version;
			  // break all the loops
			  break 2;
	  }
  }
  $zc150 = (PROJECT_VERSION_MAJOR > 1 || (PROJECT_VERSION_MAJOR == 1 && substr(PROJECT_VERSION_MINOR, 0, 3) >= 5));
  if ($zc150) // continue Zen Cart 1.5.0
  {
	  // add configuration menu
	  if (!zen_page_key_exists('configWestminster_New'))
	  {
		  $configuration          = $db->Execute("SELECT configuration_group_id FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = 'WESTMINSTER_NEW_VERSION' LIMIT 1;");
		  $configuration_group_id = $configuration->fields['configuration_group_id'];
		  if ((int) $configuration_group_id > 0)
		  {
			  zen_register_admin_page('configWestminster_New', 'BOX_CONFIGURATION_WESTMINSTER_NEW', 'FILENAME_CONFIGURATION', 'gID=' . $configuration_group_id, 'configuration', 'Y', $configuration_group_id);
			  
			  $messageStack->add('Added to Configuration menu.', 'success');
		  }
	  }
	  // add the template configuration page
  }
}