<?php
class ReleasemgtPlugin extends MantisPlugin {
    function register() {
        $this->name = 'Release management'; 
        $this->description = 'Adding possibility to atach file to released versions.';
        $this->page = 'config';           

        $this->version = '1.1';     
        $this->requires = array(    
            'MantisCore' => '1.2.0, >= 1.2.0',  
            );

        $this->author = 'Vincent DEBOUT, Jiri Hron';        
        $this->contact = 'jirka.hron@gmail.com';
        $this->url = 'http://code.google.com/p/mantis-releasemgt/';            
    }
    
    function init() {
        $t_path = config_get_global('plugin_path' ). plugin_get_current() . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR;
        set_include_path(get_include_path() . PATH_SEPARATOR . $t_path);
    }
    
    function hooks() {
            return array(
                    'EVENT_MENU_MAIN'      => 'showdownload_menu'
            );
    }    
    
    function showdownload_menu() {
            return array( '<a href="' . plugin_page( 'releases' ) . '">' . plugin_lang_get( 'releases_link' ) . '</a>', );
    }
    
    function schema() {
            return array(
                    array( 'CreateTableSQL', array( plugin_table( 'file' ), "
                            id                 I       NOTNULL UNSIGNED AUTOINCREMENT PRIMARY,
                            project_id         I       NOTNULL UNSIGNED,
                            version_id         I       NOTNULL UNSIGNED,
                            title              C(250)  NOTNULL DEFAULT '',
                            description        X       NOTNULL,
                            diskfile           C(250)  NOTNULL DEFAULT '',
                            filename           C(250)  NOTNULL DEFAULT '',
                            folder             C(250)  NOTNULL DEFAULT '',
                            filesize           I       NOTNULL DEFAULT '0',
                            file_type          C(250)  NOTNULL DEFAULT '',
                            date_added         T       NOTNULL DEFAULT '1970-01-01 00:00:01',
                            content            B       NOTNULL
                            " )
                    ),
            );
    }
    
    function config() {
		return array(
			'download_requires_login'   => true
		);
	}
    
    
}