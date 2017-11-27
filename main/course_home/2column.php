<?php
/* For licensing terms, see /license.txt */

/**
 *  HOME PAGE FOR EACH COURSE
 *
 *  This page, included in every course's index.php is the home
 *  page. To make administration simple, the teacher edits his
 *  course from the home page. Only the login detects that the
 *  visitor is allowed to activate, deactivate home page links,
 *  access to the teachers tools (statistics, edit forums...).
 *
 * @package chamilo.course_home
 */

/* 	Work with data post askable by admin of course (franglais, clean this) */

$id = isset($_GET['id']) ? intval($_GET['id']) : null;
$course_id = api_get_course_int_id();

if (api_is_allowed_to_edit(null, true)) {
    /*  Processing request */
    /*	Modify home page */
    /*
     * Display message to confirm that a tool must be hidden from the list of available tools (visibility 0,1->2)
     */
    if (isset($_GET['remove']) && $_GET['remove']) {
        $msgDestroy = get_lang('DelLk').'<br />';
        $msgDestroy .= '<a href="'.api_get_self().'">'.get_lang('No').'</a>&nbsp;|&nbsp;';
        $msgDestroy .= '<a href="'.api_get_self().'?destroy=yes&amp;id='.$id.'">'.get_lang('Yes').'</a>';
        $show_message .= Display :: return_message($msgDestroy, 'confirmation', false);
    } elseif (isset($_GET['destroy']) && $_GET['destroy']) {
        /*
         * Process hiding a tools from available tools.
         * visibility=2 are only view  by Dokeos Administrator (visibility 0,1->2)
         */
        Database::query("UPDATE $tool_table SET visibility='2' WHERE c_id = $course_id AND id='".$id."'");
    } elseif (isset($_GET['hide']) && $_GET['hide']) {
        /*	HIDE */
        // visibility 1 -> 0
        Database::query("UPDATE $tool_table SET visibility=0 WHERE c_id = $course_id AND id='".$id."'");
        $show_message .= Display::return_message(get_lang('ToolIsNowHidden'), 'confirmation');
    } elseif (isset($_GET['restore']) && $_GET["restore"]) {
        // visibility 0,2 -> 1
        /*	REACTIVATE */
        Database::query("UPDATE $tool_table SET visibility=1  WHERE c_id = $course_id AND id='".$id."'");
        $show_message .= Display::return_message(get_lang('ToolIsNowVisible'), 'confirmation');
    }
}

// Work with data post askable by admin of course

// Work with data post askable by admin of course
if (api_is_platform_admin()) {
    // Show message to confirm that a tool it to be hidden from available tools
    // visibility 0,1->2
    if (!empty($_GET['askDelete'])) {
        $content .= '<div id="toolhide">'.get_lang('DelLk').'<br />&nbsp;&nbsp;&nbsp;
            <a href="'.api_get_self().'">'.get_lang('No').'</a>&nbsp;|&nbsp;
            <a href="'.api_get_self().'?delete=yes&id='.intval($_GET['id']).'">'.get_lang('Yes').'</a>
        </div>';
    } elseif (isset($_GET['delete']) && $_GET['delete']) {
        /*
        * Process hiding a tools from available tools.
        */
        //where $id is set?
        $id = intval($id);
        Database::query("DELETE FROM $tool_table WHERE c_id = $course_id AND id='$id' AND added_tool=1");
    }
}

/*	TOOLS VISIBLE FOR EVERYBODY */

$content .= '<div class="everybodyview">';
$content .= "<div class=\"viewcaption\">";
$content .= "Actieve cursus-onderdelen";
$content .= "</div>";
$content .= '<ul id="course-tools-icons">';
$content .= CourseHome::show_tool_list(TOOL_PUBLIC);
$content .= '</ul>';
$content .= '<br class="clear" /></div>';

/*	COURSE ADMIN ONLY VIEW */

// Start of tools for CourseAdmins (teachers/tutors)
if (api_is_allowed_to_edit(null, true) && !api_is_coach()) {
    $content .= "<div class=\"courseadminview\">";
    $content .= "<div class=\"viewcaption\">";
    $content .= get_lang('CourseAdminOnly');
    $content .= "</div>";
    $content .= "<ul>";
    $content .= CourseHome::show_tool_list(TOOL_COURSE_ADMIN);
	$content .= '</ul>';
	$content .= '<br class="clear" /></div>';

    /*	INACTIVE TOOLS - HIDDEN (GREY) LINKS */
    $content .= "<div class=\"courseadminview\">";
    $content .= "<div class=\"viewcaption\">";
    $content .= get_lang('InLnk');
    $content .= "</div>";
    $content .= "<ul>";
    $content .= CourseHome::show_tool_list(TOOL_PUBLIC_BUT_HIDDEN);
    $content .= "</ul>";
    $content .= "<br class='clear' /></div> ";
}

/*	Tools for platform admin only */

if (api_is_platform_admin() && api_is_allowed_to_edit(null, true) && !api_is_coach()) {
    $content .= '<div class="platformadminview">
    <div class="viewcaption">'.get_lang('PlatformAdminOnly').'</div>
    <ul>
        '.CourseHome::show_tool_list(TOOL_PLATFORM_ADMIN).'
    </ul>
    <br class="clear" /></div>';
}
