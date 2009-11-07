<?PHP 
    require_once("../config.php");
    require_once("lib.php");
    require_once($CFG->libdir.'/locklib.php');

    $id   = required_param('id', PARAM_INT);          // Section ID

	if (! $thissection = get_record("course_sections", "id", $id)) {
       	error("Section ID was incorrect");
    }	
    
    if (! $course = get_record("course", "id", $thissection->course)) {
    	error("Course ID was incorrect");
    }	

        require_login($course);
        $context = get_context_instance(CONTEXT_COURSE, $course->id);
        require_capability('moodle/course:manageactivities', $context);
    
    $strlocks = get_string("locks", "lock");
    $strlock = get_string("lock", "lock");
    $stractivitylocks = get_string("activitylocks", "lock");
    
    /// Collect modules data
    get_all_mods($course->id, $mods, $modnames, $modnamesplural, $modnamesused);
    
    $thissectionmods = explode(",", $thissection->sequence);
    
    /// Print header //cb
    $navigation = build_navigation($thissection->section.': '.$stractivitylocks);
    print_header($course->shortname.': '.$stractivitylocks, $course->fullname, $navigation);
    
    print_heading("$stractivitylocks for all modules in Section $thissection->section");
    
    print_simple_box_start("CENTER", "", "#CCCCCC");
    echo "<center><b>Warning</b></center><br />";
	echo "These settings will override all activity locks within section $thissection->section";
	print_simple_box_end(); 
    
    
    if (isset($_GET['action'])) { //Write the lock data to the database
    	if ($_GET['action'] == "lock") {
		
			foreach ($thissectionmods as $id) {

				$passmarks = data_submitted();

				$delay = "$passmarks->delayday:$passmarks->delayhour:$passmarks->delaymin";
				$tracking->visiblewhenlocked = $passmarks->visiblewhenlocked;
    			$tracking->checkboxforcomplete = $passmarks->checkboxforcomplete;
    			$tracking->stylewhencomplete = $passmarks->stylewhencomplete;
	    		$tracking->checkboxesforprereqs = $passmarks->checkboxesforprereqs;
				$tracking->stylewhenlocked = $passmarks->stylewhenlocked;
    		
				unset($passmarks->delayday);
				unset($passmarks->delayhour);
				unset($passmarks->delaymin);
				unset($passmarks->visiblewhenlocked);
				unset($passmarks->checkboxforcomplete);
				unset($passmarks->stylewhencomplete);
				unset($passmarks->checkboxesforprereqs);
				unset($passmarks->stylewhenlocked);

				write_locks_to_db($passmarks, $delay, $tracking, $id);
    		}

    		redirect("$CFG->wwwroot/course/view.php?id=$course->id");
    	}
		if ($_GET['action'] == "unlock") { 	
    		print_continue("sectionlock.php?id=$id&sesskey=$USER->sesskey&action=unlockconfirm");
    	}
		if ($_GET['action'] == "unlockconfirm") {
			foreach ($thissectionmods as $id) {
				delete_records("course_module_locks", "moduleid", $id);
    		}
    		redirect("$CFG->wwwroot/course/view.php?id=$course->id");
		}			
	
	} else {
    
        print_simple_box_start('center', '', '', 0, 'generalbox', '');
	 
	echo "<h2><center>".get_string("activitylocks", "lock")."</center></h2>"; 
	    
    echo "<form action=\"sectionlock.php?id=$id&sesskey=$USER->sesskey&action=lock\" method=\"post\">";
    echo "<table border=\"0\" cellpadding=\"3\" cellspacing=\"3\" align=\"center\">";
    
    /// Search through all the modules, pulling out grade data
    $sections = get_all_sections($course->id); // Sort everything the same as the course
    for ($i=0; $i<=$course->numsections; $i++) {
        if (isset($sections[$i])) {   // should always be true
            $section = $sections[$i];
            if ($section->sequence) {
            	switch ($course->format) {
            		case "topics":
            			$sectionlabel = get_string("topic");
            			break;
            		case "weeks":
						$sectionlabel = get_string("week");
						break;
					default:
						$sectionlabel = get_string("section");
				}	 		
            	echo '<tr><td colspan="3">'.$sectionlabel.' '.$section->section.'</td></tr>';
                $sectionmods = explode(",", $section->sequence);
                foreach ($sectionmods as $sectionmod) {
                    $mod = $mods[$sectionmod];
                         $mod->courseid = $course->id;
                    $instance = get_record("$mod->modname", "id", "$mod->instance");
	if ($grade_items = grade_get_grade_items_for_activity($mod)) { //cb
	$mod_item = grade_get_grades($course->id, 'mod', $mod->modname, $mod->instance);
    $item = reset($mod_item->items);
        if(isset($item->grademax)){
        $grademax = $item->grademax;
        if (!($mod->id == $id)) { // A module can't be a lock for itself
							  
                                $maxgradehtml = get_string("maxgrade", "lock")." : $grademax";
                                $image = "<tr><td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\"".
                                         "   TITLE=\"$mod->modfullname\">".
                                         "<IMG BORDER=0 VALIGN=absmiddle SRC=\"../mod/$mod->modname/icon.gif\" ".
                                         "HEIGHT=16 WIDTH=16 ALT=\"$mod->modfullname\"></A></td>";
                                echo "$image ".
                                     "<td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\">".
                                     "$instance->name".
                                     "</A></td><td align=\"center\">$maxgradehtml</td>";
                                                             
								echo "<td>".get_String("requiredgrade", "lock").": <select name=\"$mod->id\" size=\"1\">";
								for ($j=0; $j<=$grademax; $j++) {
									if ($j == $passmark[$mod->id]) {
										echo "<option value=\"$j\" selected>$j</option>";
									} else {
										echo "<option value=\"$j\">$j</option>";
									}
}								}
								echo "</select></td></tr>";	
                            } else { //Modules without a grade set but with a grade function
                            	if (!($mod->id == $id)) { // A module can't be a lock for itself
                                	$image = "<tr><td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\"".
                             		   		 "   TITLE=\"$mod->modfullname\">".
                                		 	"<IMG BORDER=0 VALIGN=absmiddle SRC=\"../mod/$mod->modname/icon.gif\" ".
                                 	    	"HEIGHT=16 WIDTH=16 ALT=\"$mod->modfullname\"></A></td>";
                           			echo "$image ".
                        			     "<td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\">".
                      	         		 "$instance->name";
                    	        	echo "<td colspan=\"2\" align=\"right\">". get_string("usermustaccess", "lock");
									if (isset($passmark[$mod->id])) {
										echo "<input type=\"checkbox\" name=\"$mod->id\" value=\"A\" checked=\"1\">";
									} else {
										echo "<input type=\"checkbox\" name=\"$mod->id\" value=\"A\">";
									}	
									echo "</td></tr>";
								}
							}	
						} else { // Modules without grade function
		                   if ($mod->modname != "label") { //Forget labels
					if (!($mod->id == $id)) { // A module can't be a lock for itself
								$image = "<tr><td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\"".
                             		   	 "   TITLE=\"$mod->modfullname\">".
                                		 "<IMG BORDER=0 VALIGN=absmiddle SRC=\"../mod/$mod->modname/icon.gif\" ".
                                 	    "HEIGHT=16 WIDTH=16 ALT=\"$mod->modfullname\"></A></td>";
                           		echo "$image ".
                        		     "<td><A HREF=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\">".
                               		 "$instance->name";
                            	echo "<td colspan=\"2\" align=\"right\">". get_string("usermustaccess", "lock");
								if (isset($passmark[$mod->id])) {
									echo "<input type=\"checkbox\" name=\"$mod->id\" value=\"A\" checked=\"1\">";
								} else {
									echo "<input type=\"checkbox\" name=\"$mod->id\" value=\"A\">";
								}	
								echo "</td></tr>";
							}
					}
				}	
				} 
			}
		}
	} 	
	
	$delayday = $delayhour = $delaymin = 0;

	echo "<tr><td>&nbsp;</td></tr>";
	echo "<tr><td colspan=\"5\"><h2>".get_String("timedelay", "lock")."</h2></td></tr>";
	echo "<tr><td colspan=\"5\">";
	echo "<input type=\"text\" size=\"3\" name=\"delayday\" value=\"$delayday\"> Days ";
	for ($i=0; $i<24; $i++) { $options[$i] = $i; } choose_from_menu($options, "delayhour", $delayhour, ""); echo " Hours "; unset($options);
	for ($i=0; $i<60; $i+=5) { $options[$i] = $i; } choose_from_menu($options, "delaymin", $delaymin, ""); echo " Mins "; unset($options);	
	echo "</td></tr>";
	echo "<tr><td>&nbsp;</td></tr>";
	echo "<tr><td colspan=\"5\"><h2>".get_string("settings")."</h2></td></tr>";
	echo "<tr><td colspan=\"5\"><table border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"5\">";
	$options[0] = get_string("no");
	$options[1] = get_string("yes");	
	echo "<tr><td align=\"right\">".get_string("visiblewhenlocked", "lock").":</td><td>";
	choose_from_menu($options, "visiblewhenlocked", 1, "");
	echo "</td></tr><tr><td align=\"right\">".get_string("checkboxforcomplete", "lock").":</td><td>";
	choose_from_menu($options, "checkboxforcomplete", 0, "");
	echo "</td></tr><tr><td align=\"right\">".get_string("checkboxesforprereqs", "lock").":</td><td>";
	choose_from_menu($options, "checkboxesforprereqs", 1, "");
	echo "</td></tr><tr><td align=\"right\">".get_string("stylewhencomplete", "lock").":</td>";
	
	echo "<td><input type=\"text\" name=\"stylewhencomplete\" value=\"\"></td></tr>";
	echo "<tr><td align=\"right\">".get_string("stylewhenlocked", "lock").":</td>";

	echo "<td><input type=\"text\" name=\"stylewhenlocked\" value=\"\"></td></tr></table></td></tr>";	

	echo "<tr><td>&nbsp;</td></tr>";

	echo "<tr><td colspan=\"4\" align=\"center\"><input type=\"submit\" value=\"".get_string("saveactivitylocks", "lock")."\"></td></tr></table></form>";
	
	print_simple_box_end();
	print_footer($course);
	}
?>					    