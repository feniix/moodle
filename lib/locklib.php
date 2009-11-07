<?php  // $Id: locklib.php
   // Library of useful functions for activity locking
   // Updated 1.9 charbusch
    require_once($CFG->dirroot.'/course/lib.php');
    require_once($CFG->libdir.'/gradelib.php');
require_once($CFG->dirroot.'/grade/lib.php');
require_once($CFG->dirroot.'/grade/querylib.php'); 

// Locks activities

function islocked($module) {
   	global $USER, $CFG, $COURSE;  //It there an alternative to global $course?
   	static $currentcourse, $mods; // Hopefully this should reduce the number of queries
        $userid = $USER->id;
        $courseid = $COURSE->id;

	if (!isset($module)) {   // limit Notice: Trying to get property of non-object in Header 
		return false;
	} 

	if (!isset($mods) or !($currentcourse == $COURSE->id)) {     // The idea is, you should only need to download a list of modules in a course once
   		$mods = get_course_mods($COURSE->id);
   		$currentcourse = $COURSE->id;
   	}	
   	//module locked with a time delay
   	if ($module->delay and $module->delay !== "0:0:0") { 
    set_time_limit (0);

    //totalcount is passed by reference
    $sql_log = 'l.course = '.$courseid.' AND l.userid = '.$userid;
    $logs = get_logs ($sql_log, 'l.time ASC', '', '', $totalcount);

    if (!is_array ($logs)) return 0;
    
    $totaltime = 0;
    foreach ($logs as $log) {
         if (!isset($login)) {
             // for the first time $login is not set so the first log is also
             // the first $login
             $login = $log->time;
             $last_hit = $log->time;
             $totaltime = 0;
         
			list($delayday, $delayhour, $delaymin) = explode(":", $module->delay);
			$delay = ($delaymin*60) + ($delayhour*60*60) + ($delayday*24*60*60);
			if (time() > ($log->time + $delay) or has_capability('moodle/course:viewhiddenactivities', get_context_instance(CONTEXT_COURSE, $COURSE->id))) {
				$locks['time'] = "open";
			   	} else {
				$locks['time'] = "closed";
			}		
		}
    }
}	
   	
   	if ($modlocks = get_records("course_module_locks", "moduleid", $module->id)) { // Module has locks
   	  foreach($modlocks as $modlock) {
   		$lockid = $modlock->lockid;
		if ($lockid != $modlock->moduleid) {
   		$instance = get_record($mods[$lockid]->modname, "id", $mods[$lockid]->instance);
//locked on access   		
		if ($modlock->requirement == 'A') {
		if (record_exists("log", "userid", $USER->id, "module", $mods[$lockid]->modname , "info" , $mods[$lockid]->instance)) {
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}
//locked on forum posts  		
		if ($modlock->requirement == 'P') {
 $discussion = get_records_sql("SELECT DISTINCT u.id, u.id
                                 FROM {$CFG->prefix}user u,
                                      {$CFG->prefix}forum_discussions d,
                                      {$CFG->prefix}forum_posts p
                                 WHERE d.forum = '$modlock->lockid' and
                                       p.discussion = d.id and
                                       u.id = p.userid");
	if (record_exists('forum_posts', "userid", $USER->id, $discussion)) {	
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}

//locked on choice answers  		
		if ($modlock->requirement == 'C') {
	if (record_exists('choice_answers', "userid", $USER->id, 'choiceid', $mods[$lockid]->instance)) {	
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}

//locked on grade  		
		$mods[$lockid]->courseid = $currentcourse;
if ($grade_items = grade_get_grade_items_for_activity($mods[$lockid])) { 
  $grade_item = grade_get_grades($currentcourse, 'mod', $mods[$lockid]->modname, $mods[$lockid]->instance, $USER->id); //cb
         $item = reset($grade_item->items);
		 if(isset($item->grademax)){
            if (isset($item->grades[$USER->id]->grade) and $item->grades[$USER->id]->grade >= $modlock->requirement or has_capability('moodle/course:viewhiddenactivities', get_context_instance(CONTEXT_COURSE, $COURSE->id))) {			
                    		$locks[$modlock->lockid]  = "open";
                        } else {
                        	$locks[$modlock->lockid] = "closed";
                        }
                    }
              	} 
      } 	   	
   	} 
}
	   
	if (isset($locks)) {
		return $locks;
	} else { // No locks on module
   		return false; 
	}
}

function iscomplete($module) {
   	global $USER, $CFG, $COURSE;  //It there an alternative to global $course?
   	static $currentcourse, $mods; // Hopefully this should reduce the number of queries
        $userid = $USER->id;
        $courseid = $COURSE->id;

	if (!isset($module)) {   // limit Notice: Trying to get property of non-object in Header 
		return false;
	} 

	if (!isset($mods) or !($currentcourse == $COURSE->id)) {     // The idea is, you should only need to download a list of modules in a course once
   		$mods = get_course_mods($COURSE->id);
   		$currentcourse = $COURSE->id;
   	}	
   	
   	if ($modlocks = get_records("course_module_locks", "moduleid", $module->id)) { 
   	  foreach($modlocks as $modlock) {
   		$lockid = $modlock->lockid;
		if ($lockid == $modlock->moduleid) {

//locked on access   		
		if ($modlock->requirement == 'A') {
		if (record_exists("log", "userid", $USER->id, "cmid", $modlock->moduleid)) {
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}

//locked on forum posts  		
		if ($modlock->requirement == 'P') {
 $discussion = get_records_sql("SELECT DISTINCT u.id, u.id
                                 FROM {$CFG->prefix}user u,
                                      {$CFG->prefix}forum_discussions d,
                                      {$CFG->prefix}forum_posts p
                                 WHERE d.forum = '$modlock->lockid' and
                                       p.discussion = d.id and
                                       u.id = p.userid");
	if (record_exists('forum_posts', "userid", $USER->id, $discussion)) {	
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}

//locked on choice answers  		
		if ($modlock->requirement == 'C') {
	if (record_exists('choice_answers', "userid", $USER->id, 'choiceid', $mods[$lockid]->instance)) {	
   			$locks[$modlock->lockid]  = "open";
   		} else {
		   	$locks[$modlock->lockid] = "closed";
		} 
}

//locked on grade  		
		$mods[$lockid]->courseid = $currentcourse;
if ($grade_items = grade_get_grade_items_for_activity($mods[$lockid])) { 
  foreach ($grade_items as $grade_item) {
  $mod_item = grade_get_grades($currentcourse, 'mod', $mods[$lockid]->modname, $mods[$lockid]->instance, $USER->id); //cb
         $item = reset($mod_item->items);
        if($grade_item->gradetype > '0'){
            if (isset($item->grades[$USER->id]->grade) and $item->grades[$USER->id]->grade >= $modlock->requirement or has_capability('moodle/course:viewhiddenactivities', get_context_instance(CONTEXT_COURSE, $COURSE->id))) {			
                    		$locks[$modlock->lockid]  = "open";
                        } else {
                        	$locks[$modlock->lockid] = "closed";
                        }
     }
    }
  } 


    } 	   	
  } 
}
	   
	if (isset($locks)) {
		return $locks;
	} else { // No locks on module
   		return false; 
	}
}

function activity_complete($mod) {
	global $USER, $CFG, $course;
	
	$requiredgrade = get_records("course_module_locks", "lockid", $mod->id, "requirement DESC LIMIT 1");
	if (is_array($requiredgrade)) {
	$requiredgrade = current($requiredgrade);
	}
		$instance = get_record($mod->modname, "id", $mod->instance);
        $mod->courseid = $course->id;
   		if (record_exists("log", "userid", $USER->id, "module", $mod->modname , "info" , $mod->instance)) {
   			$complete  = true;
       } else if ($grade_items = grade_get_grade_items_for_activity($mod)) { 
         $grade_item = grade_get_grades($course->id, 'mod', $mod->modname, $mod->instance, $USER->id);
         $item = reset($grade_item->items);
		 if(isset($item->grademax)){
				if (isset($item->grades[$USER->id]->grade) and $item->grades[$USER->id]->grade >= $requiredgrade->requirement) {
         	           		$complete  = true;
                		} else {
                      		$complete = false;
            		}}
   		} else {
			$complete = false;
		} 	
     		
	return $complete;	
}	

function check_locks($module, $showbutton=1) {
	global $USER, $CFG, $course, $COURSE;
		if ($locks = islocked($module)) {
			if (array_search("closed", $locks)) {
				ksort($locks);
				reset($locks);
				return print_lock_notice($locks, $showbutton);	
			}
		}
	return false;
}							

function print_lock_notice($locks, $showbutton) {
	global $USER, $CFG, $course;

		require_once($CFG->dirroot.'/course/lib.php');
		get_all_mods($course->id, $mods, $modnames, $modnamesplural, $modnamesused);
		$locklist = "";
	
        $navigation = build_navigation(''); //cb
        print_header("$course->shortname", $course->fullname, $navigation,'','',true);
		foreach ($locks as $lock => $status) {
			if (is_numeric($lock) and $status == "closed") {
				$instance = get_record($mods[$lock]->modname, "id", $mods[$lock]->instance);

				if ($mods[$lock]->modname == "quiz") {
					$locklist .= "$instance->name<br />";   //bb add minimum grade here
				
				} else {
	
					$locklist .= "$instance->name<br />";
				}	

			} else {
				if ($status == "closed") {
					$locklist .= get_string("timedelaynotice", "lock")."<br />";
				}	
			}		
		}
	switch ($showbutton) {
	case 0:					 	
		print_simple_box("<center>".get_string("activitycurrentlylocked", "lock")."<p><strong>$locklist</strong></p></center>", "CENTER");
		die;
	case 1:
		notice(get_string("activitycurrentlylocked", "lock").'<p><strong>'.$locklist.'</strong></p>');
		break;
	case 2:
		print_simple_box("<center>".get_string("activitycurrentlylocked", "lock")."<p><strong>$locklist</strong></p></center>", "CENTER");
		close_window_button();
		die;	
	}

}

function write_locks_to_db($passmarks, $delay, $tracking, $moduleid) {
	global $USER, $CFG, $course;
		
		$lock->id = $moduleid;
		$lock->delay = $delay;
		$lock->visiblewhenlocked = (isset($tracking->visiblewhenlocked)) ? $tracking->visiblewhenlocked : 0 ;
		$lock->checkboxforcomplete = (isset($tracking->checkboxforcomplete)) ? $tracking->checkboxforcomplete : 0 ;
		$lock->stylewhencomplete = (isset($tracking->stylewhencomplete)) ? $tracking->stylewhencomplete : 0 ;
		$lock->checkboxesforprereqs = (isset($tracking->checkboxesforprereqs)) ? $tracking->checkboxesforprereqs : 0 ;
		$lock->stylewhenlocked = (isset($tracking->stylewhenlocked)) ? $tracking->stylewhenlocked : 0 ;
		update_record("course_modules", $lock);
		unset($lock);

    	delete_records("course_module_locks", "moduleid", $moduleid);
		while(list($predecessor, $passmark) = each($passmarks)){
    		if (is_numeric($predecessor)) {
				if ($passmark) {
					$lock->moduleid = $moduleid;
					$lock->courseid = $course->id;
					$lock->lockid = $predecessor;
					$lock->requirement = $passmark;
					insert_record("course_module_locks", $lock);
					unset($lock);				
    			}
			}		
    	}
    unset($passmarks);//bb
}    	

function isunlocked($module) {
	global $USER, $CFG, $course; 
		if ($locks = islocked($module)) {
			if (array_search("closed", $locks)) {
				return false;	
			}
		}
	return true;
}		

?>