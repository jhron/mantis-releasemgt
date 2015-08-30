# Installation #

## Fresh install ##
  1. Extract zip content into plugins folder
  1. In Mantis go to _Manage_ -> _Manage plugins_ menu
  1. In section **Available Plugins** click to Install

## When upgrading from original plugin ##
  1. Upgrade Mantis to version 1.2+
  1. Install plugin as in **fresh install**
  1. Drop table created during install. The name is **mantis\_plugin\_releasemgt\_file\_table** (instead of mantis`_` can be something else - it depends on what prefix for table are you using.
  1. Execute sql script below for renaming config variables
```
update mantis_config_table
  set config_id = 'plugin_Releasemgt_disk_dir'
  where config_id like binary 'plugins_releasemgt_disk_dir';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_email_subject'
  where config_id like binary 'plugins_releasemgt_email_subject';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_email_template'
  where config_id like binary 'plugins_releasemgt_email_template';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_file_number'
  where config_id like binary 'plugins_releasemgt_file_number';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_ftp_pass'
  where config_id like binary 'plugins_releasemgt_ftp_pass';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_ftp_server'
  where config_id like binary 'plugins_releasemgt_ftp_server';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_ftp_user'
  where config_id like binary 'plugins_releasemgt_ftp_user';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_notification_enable'
  where config_id like binary 'plugins_releasemgt_notification_enable';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_notify_email'
  where config_id like binary 'plugins_releasemgt_notify_email';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_notify_handler'
  where config_id like binary 'plugins_releasemgt_notify_handler';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_notify_reporter'
  where config_id like binary 'plugins_releasemgt_notify_reporter';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_upload_method'
  where config_id like binary 'plugins_releasemgt_upload_method';
update mantis_config_table
  set config_id = 'plugin_Releasemgt_upload_threshold_level'
  where config_id like binary 'plugins_releasemgt_upload_threshold_level';
```
  1. Rename original table to new name (again, don't forget to db table prefix name.
```
ALTER TABLE `mantis_plugins_releasemgt_file_table` RENAME AS
 `mantis_plugin_releasemgt_file_table`;
```