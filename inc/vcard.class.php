<?php

/**
 * class vcard
 *
 * @package    vcard
 * @subpackage 
 * @author     Ashish Ajani <contact@freelancer-coder.com>
 * @version   
 */
class vcard {

    /**
     *
     * @var array
     */
    var $vcardInformation;
    
    /**
     *
     * @var string 
     */
    var $vacrdFile;
    
    /**
     *
     * @var string
     */
    var $class;
    
    /**
     *
     * @var date
     */
    var $revision_date;
    
    /**
     *
     * @var string
     */
    var $card;

    
    /**
     * function vcard
     * Constructor
     * 
     * Array initialization with required information to generate vcard
     * 
     * @return boolean
     */
    function vcard() {
        $this->vcardInformation = array(
            
            // personal information
            "name_prefix" => null,
            "name_suffix" => null,
            "first_name" => null, 
            "last_name" => null,
            "display_name" => null, 
            "additional_name" => null,
            "nickname" => null,
            "pager_tel" => null,
            "email1" => null,
            "email2" => null,
            "url" => null,
            "photo" => null,
            "birthday" => null,
            
            // home address
            "home_po_box" => null,
            "home_extended_address" => null,
            "home_address" => null,
            "home_city" => null,
            "home_state" => null,
            "home_postal_code" => null,
            "home_country" => null,
            "home_tel" => null,
            "cell_tel" => null,
            "fax_tel" => null,

            // work information
            "company" => null,
            "title" => null,
            "role" => null,
            "department" => null,
            "work_po_box" => null,
            "work_extended_address" => null,
            "work_address" => null,
            "work_city" => null,
            "work_state" => null,
            "work_postal_code" => null,
            "work_country" => null,
            "office_tel" => null,
            
            // others
            "timezone" => null,
            "sort_string" => null,
            "note" => null,
        );
        return true;
    }

    /**
     * function build
     * To initialize the vcard with information
     *  
     * @return void
     */
    function initVcard() {
		
		if (!$this->vcardInformation['sort_string']) { $this->vcardInformation['sort_string'] = $this->vcardInformation['last_name']; }
		if (!$this->vcardInformation['sort_string']) { $this->vcardInformation['sort_string'] = $this->vcardInformation['company']; }
		if (!$this->revision_date) { $this->revision_date = date('Y-m-d H:i:s'); }
		if (!$this->vcardInformation['timezone']) { $this->vcardInformation['timezone'] = date("O"); }
		if (!$this->class) { $this->class = "PUBLIC"; }

        // basic information
        $this->card = "BEGIN:VCARD\r\n";
        $this->card .= "VERSION:3.0\r\n";
        $this->card .= "CLASS:" . $this->class . "\r\n";
        $this->card .= "REV:" . $this->revision_date . "\r\n";
        
        if (!$this->class) {
            $this->class = "PUBLIC";
        }
        if (!$this->vcardInformation['display_name']) {
            $this->vcardInformation['display_name'] = trim($this->vcardInformation['first_name'] . " " . $this->vcardInformation['last_name']);
        }
        if (!$this->vcardInformation['sort_string']) {
            $this->vcardInformation['sort_string'] = $this->vcardInformation['last_name'];
        }
        if (!$this->vcardInformation['sort_string']) {
            $this->vcardInformation['sort_string'] = $this->vcardInformation['company'];
        }
        if (!$this->vcardInformation['timezone']) {
            $this->vcardInformation['timezone'] = date("O");
        }
        if (!$this->revision_date) {
            $this->revision_date = date('Y-m-d H:i:s');
        }

        
        $this->card .= "FN:" . $this->vcardInformation['display_name'] . "\r\n";
        $this->card .= "N:"
                . $this->vcardInformation['last_name'] . ";"
                . $this->vcardInformation['first_name'] . ";"
                . $this->vcardInformation['additional_name'] . ";"
                . $this->vcardInformation['name_prefix'] . ";"
                . $this->vcardInformation['name_suffix'] . "\r\n";
        if ($this->vcardInformation['nickname']) {
            $this->card .= "NICKNAME:" . $this->vcardInformation['nickname'] . "\r\n";
        }
        if ($this->vcardInformation['title']) {
            $this->card .= "TITLE:" . $this->vcardInformation['title'] . "\r\n";
        }
        if ($this->vcardInformation['company']) {
            $this->card .= "ORG:" . $this->vcardInformation['company'];
        }
        if ($this->vcardInformation['department']) {
            $this->card .= ";" . $this->vcardInformation['department'];
        }
        $this->card .= "\r\n";

        if ($this->vcardInformation['work_po_box'] || $this->vcardInformation['work_extended_address'] || $this->vcardInformation['work_address'] || $this->vcardInformation['work_city'] || $this->vcardInformation['work_state'] || $this->vcardInformation['work_postal_code'] || $this->vcardInformation['work_country']) {
            $this->card .= "ADR;TYPE=work:"
                    . $this->vcardInformation['work_po_box'] . ";"
                    . $this->vcardInformation['work_extended_address'] . ";"
                    . $this->vcardInformation['work_address'] . ";"
                    . $this->vcardInformation['work_city'] . ";"
                    . $this->vcardInformation['work_state'] . ";"
                    . $this->vcardInformation['work_postal_code'] . ";"
                    . $this->vcardInformation['work_country'] . "\r\n";
        }
        if ($this->vcardInformation['home_po_box'] || $this->vcardInformation['home_extended_address'] || $this->vcardInformation['home_address'] || $this->vcardInformation['home_city'] || $this->vcardInformation['home_state'] || $this->vcardInformation['home_postal_code'] || $this->vcardInformation['home_country']) {
            $this->card .= "ADR;TYPE=home:"
                    . $this->vcardInformation['home_po_box'] . ";"
                    . $this->vcardInformation['home_extended_address'] . ";"
                    . $this->vcardInformation['home_address'] . ";"
                    . $this->vcardInformation['home_city'] . ";"
                    . $this->vcardInformation['home_state'] . ";"
                    . $this->vcardInformation['home_postal_code'] . ";"
                    . $this->vcardInformation['home_country'] . "\r\n";
        }
        if ($this->vcardInformation['email1']) {
            $this->card .= "EMAIL;TYPE=internet,pref:" . $this->vcardInformation['email1'] . "\r\n";
        }
        if ($this->vcardInformation['email2']) {
            $this->card .= "EMAIL;TYPE=internet:" . $this->vcardInformation['email2'] . "\r\n";
        }
        if ($this->vcardInformation['office_tel']) {
            $this->card .= "TEL;TYPE=work,voice:" . $this->vcardInformation['office_tel'] . "\r\n";
        }
        if ($this->vcardInformation['home_tel']) {
            $this->card .= "TEL;TYPE=home,voice:" . $this->vcardInformation['home_tel'] . "\r\n";
        }
        if ($this->vcardInformation['cell_tel']) {
            $this->card .= "TEL;TYPE=cell,voice:" . $this->vcardInformation['cell_tel'] . "\r\n";
        }
        if ($this->vcardInformation['fax_tel']) {
            $this->card .= "TEL;TYPE=work,fax:" . $this->vcardInformation['fax_tel'] . "\r\n";
        }
        if ($this->vcardInformation['pager_tel']) {
            $this->card .= "TEL;TYPE=work,pager:" . $this->vcardInformation['pager_tel'] . "\r\n";
        }
        if ($this->vcardInformation['url']) {
            $this->card .= "URL;TYPE=work:" . $this->vcardInformation['url'] . "\r\n";
        }
        if ($this->vcardInformation['birthday']) {
            $this->card .= "BDAY:" . $this->vcardInformation['birthday'] . "\r\n";
        }
        if ($this->vcardInformation['role']) {
            $this->card .= "ROLE:" . $this->vcardInformation['role'] . "\r\n";
        }
        if ($this->vcardInformation['note']) {
            $this->card .= "NOTE:" . $this->vcardInformation['note'] . "\r\n";
        }
        $this->card .= "TZ:" . $this->vcardInformation['timezone'] . "\r\n";
        $this->card .= "END:VCARD\r\n";
    }

    /*
      download() method streams the vcard to the browser client.
     */

    function download() {
        if (!$this->card) {
            $this->initVcard();
        }
        if (!$this->filename) {
            $this->filename = trim($this->vcardInformation['display_name']);
        }
        $this->filename = str_replace(" ", "_", $this->filename);
        header("Content-type: text/directory");
        header("Content-Disposition: attachment; filename=" . $this->filename . ".vcf");
        header("Pragma: public");
        echo $this->card;
        return true;
    }

}
