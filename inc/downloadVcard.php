<?php
require_once('class_vcard.php');

require_once ('wp-load.php');

$vpost = get_post($_REQUEST['pid']); 
$featured_image = wp_get_attachment_url(get_post_thumbnail_id($vpost->ID));

/*
Instantiate a new vcard object.
*/
$vc = new vcard();

/*
filename is the name of the .vcf file that will be sent to the user if you
call the download() method. If you leave this blank, the class will 
automatically build a filename using the contact's data.
*/

#$vc->filename = "";

/*
If you leave this blank, the current timestamp will be used.
*/
#$vc->revision_date = "";

/*
Possible values are PUBLIC, PRIVATE, and CONFIDENTIAL. If you leave class
blank, it will default to PUBLIC.
*/
#$vc->class = "PUBLIC";

/*
Contact's name data.
If you leave display_name blank, it will be built using the first and last name.
*/
$vc->filename = strtolower(str_replace(" ","-",$vpost->post_title));
//echo strtolower(str_replace(" ","-",$vpost->post_title));
//echo $vpost->linkedin_url;
//echo $vpost->linkedin_url;
//exit;
#$vc->vcardInformation['display_name'] = "";

$vc->vcardInformation['first_name'] = $vpost->post_title;
//$vc->vcardInformation['last_name'] = "Wolf";
#$vc->vcardInformation['additional_name'] = ""; //Middle name
#$vc->vcardInformation['name_prefix'] = "";  //Mr. Mrs. Dr.
#$vc->vcardInformation['name_suffix'] = ""; //DDS, MD, III, other designations.
//$vc->vcardInformation['nickname'] = "TJ";

/*
Contact's company, department, title, profession
*/
$vc->vcardInformation['company'] = "Shepherd Partners";
$vc->vcardInformation['department'] = "Team";
$vc->vcardInformation['title'] = get_field('expertise',$vpost->ID);
#$vc->vcardInformation['role'] = "";

/*
Contact's work address
*/
#$vc->vcardInformation['work_po_box'] = "";
#$vc->vcardInformation['work_extended_address'] = "";
#$vc->vcardInformation['work_address'] = "";
#$vc->vcardInformation['work_city'] = "";
#$vc->vcardInformation['work_state'] = "";
#$vc->vcardInformation['work_postal_code'] = "";
#$vc->vcardInformation['work_country'] = "";

/*
Contact's home address
*/
#$vc->vcardInformation['home_po_box'] = "";
#$vc->vcardInformation['home_extended_address'] = "";
#$vc->vcardInformation['home_address'] = "";
#$vc->vcardInformation['home_city'] = "";
#$vc->vcardInformation['home_state'] = "";
#$vc->vcardInformation['home_postal_code'] = "";
#$vc->vcardInformation['home_country'] = "";

/*
Contact's telephone numbers.
*/
$vc->vcardInformation['office_tel'] = get_field('phone',$vpost->ID);
#$vc->vcardInformation['home_tel'] = "";
//$vc->vcardInformation['cell_tel'] = "";
#$vc->vcardInformation['fax_tel'] = "";
#$vc->vcardInformation['pager_tel'] = "";

/*
Contact's email addresses
*/
$vc->vcardInformation['email1'] = get_field('email_address',$vpost->ID);
#$vc->vcardInformation['email2'] = "";

/*
Contact's website
*/
$vc->vcardInformation['url'] = get_field('linkedin_profile_url',$vpost->ID);

/*
Some other contact data.
*/
$vc->vcardInformation['photo'] = $featured_image;
#$vc->vcardInformation['birthday'] = "";
#$vc->vcardInformation['timezone'] = "";

/*
If you leave this blank, the class will default to using last_name or company.
*/
#$vc->vcardInformation['sort_string'] = "";

/*
Notes about this contact.
*/
$vc->vcardInformation['note'] = strip_tags($vpost->post_content);

/*
Generate card and send as a .vcf file to user's browser for download.
*/
$vc->download();


?>
