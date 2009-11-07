<?PHP

function activity_locking_upgrade($oldversion=0) {

    global $CFG;
    
    if ($oldversion < 2007101100) {

        execute_sql(" ALTER TABLE `{$CFG->prefix}course_modules` ADD `visiblewhenlocked` TINYINT( 1 ) UNSIGNED NOT NULL default '1' AFTER `visible`");
        execute_sql(" ALTER TABLE `{$CFG->prefix}course_modules` ADD `checkboxesforprereqs` TINYINT( 1 ) UNSIGNED NOT NULL default '1' AFTER `visible`");
        

    }
    $result = true;

    if ($oldversion < 2005092800 and $result) {
        $result = true; //Nothing to do
    }

    //Finally, return result
    return $result;
}