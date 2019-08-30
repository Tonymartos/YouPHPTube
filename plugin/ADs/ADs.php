<?php

require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class ADs extends PluginAbstract {

    public function getDescription() {
        $txt = "Handle the ads system, like Adsense or similar";
        //$help = "<br><small><a href='https://github.com/DanielnetoDotCom/YouPHPTube/wiki/AD_Overlay-Plugin' target='__blank'><i class='fas fa-question-circle'></i> Help</a></small>";
        $help = "";
        return $txt . $help;
    }

    public function getName() {
        return "ADs";
    }

    public function getUUID() {
        return "ADs73225-3807-4167-ba81-0509dd280e06";
    }

    public function getPluginVersion() {
        return "1.0";
    }

    public function getEmptyDataObject() {
        global $global,$config;
        $obj = new stdClass();
        
        $adsense = $config->getAdsense();
        
        $o = new stdClass();
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample728x90.jpg'>":$adsense;
        $obj->leaderBoardTop = $o;
        
        $o = new stdClass();        
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample728x90.jpg'>":$adsense;;
        $obj->leaderBoardMiddle = $o;
        /*
        $o = new stdClass();       
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample728x90.jpg'>":$adsense;;
        $obj->leaderBoardFooter = $o;
         * 
         */
        
        $o = new stdClass();       
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample300x250.jpg'>":$adsense;;
        $obj->sideRectangle = $o;

        $o = new stdClass();
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample300x250.jpg'>":$adsense;;
        $obj->leaderBoardTopMobile = $o;
                
        $o = new stdClass();       
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample300x250.jpg'>":$adsense;;
        $obj->leaderBoardMiddleMobile = $o;
        /*
        $o = new stdClass();       
        $o->type = "textarea";
        $o->value = empty($adsense)?"<img src='{$global['webSiteRootURL']}plugin/ADs/sample300x250.jpg'>":$adsense;;
        $obj->leaderBoardFooterMobile = $o;
         * 
         */

        return $obj;
    }

    public function getTags() {
        return array('free');
    }
}