<?php
class Nav_menu
{


function index()
{
    $nav =  array(
            'Home' => array(
                 array('Home','templates/public_main/' )
            ),
            'About Us' => array(
                 array('Mission Statement','templates/public_main/mission-statement.php', null ),
                 array('Introduction and History','templates/public_main/Intro-History.php', null ),
                 array('President Message','templates/public_main/presidents-message.php', null ),
                 array('Board Members','templates/public_main/hold-page.php', null ),
                 array('Financial Reports','templates/public_main/hold-page.php', null ),
                 array('Contact Us','templates/public_main/contact-us.php', null )
            ),
            'Making a Difference' => array(
                 array('Making a Difference', 'templates/public_main/making-a-difference.php', null ),
                 array('10-13 Officer Needs Assistence', 'templates/public_main/hold-page.php', null ),
                 array('Officer Shot and Down', 'templates/public_main/hold-page', null ),
                 array('Donations and Testimonials', 'templates/public_main/Testimonials.php','/Testimonials'),
                 array('Protect Vest - Equipment', 'templates/public_main/hold-page.php', null ),
                 array('Program', 'templates/public_main/hold-page.php', null )				 
             ),
            'Blue Mass' => array(
                 array('Blue Mass','templates/public_main/bluemass.php', null )
            ),
            'Meetings and Events' => array(
                 array('Meetings and Events', 'templates/public_main/meeting-schedule.php', null ),
                 array('Bulletin Board', 'templates/public_main/hold-page.php', null ),
                 array('Monthly Calender', 'templates/public_main/hold-page.php', null ),
                 array('Cigar Events', 'templates/public_main/CigarEvents.php', '/Cigar_Events' ),
                 array('Awards Dinners', 'templates/public_main/awards-dinner.php', '/award-dinners' )
            ),
            'Political Action' => array(
                 array('Political Action', 'templates/public_main/hold-page.php', null )
            ),
            'Cop Shop' => array(
                 array('Cop Shop', 'templates/public_main/hold-page.php', null )
            ),
            'Brotherhood in Action' => array(
                 array('Brotherhood in Action', 'templates/public_main/POB_In_Action.php', null ),
                 array('Move Over Law', 'templates/public_main/move_over.php', '/Move_Over_Law' ),
                 array('National Blue Alert', 'templates/public_main/national_blue.php', '/blue_alert' ),
                 array('POB Support', 'templates/public_main/POB_Support.php', '/POB_Supports' ),
                 array('POB Pays Tribute', 'templates/public_main/POB_Pays_Tribute.php','/POB_Pays_Tribute_AW' )
            )
    );

    return $nav;

} // end index

} // end controller