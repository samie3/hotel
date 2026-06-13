<?php
if (!defined('_PS_VERSION_'))
    exit;

class Adminfixes extends Module
{
    public function __construct()
    {
        $this->name = 'adminfixes';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Admin';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.7');
        
        parent::__construct();
        
        $this->displayName = $this->l('Admin UI Fixes');
        $this->description = $this->l('Fixes RTL layout, missing icons, and admin UX.');
    }
    
    public function install()
    {
        return parent::install() && $this->registerHook('displayBackOfficeHeader');
    }
    
    public function uninstall()
    {
        return parent::uninstall();
    }
    
    public function hookDisplayBackOfficeHeader()
    {
        $css = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />';
        $css .= '<style>
html[lang="ar"] .bootstrap .panel { text-align: right; }
html[lang="ar"] #nav-sidebar .menu .maintab > a.title { text-align: right; padding-right: 35px; }
html[lang="ar"] .panel-heading { text-align: right; }
html[lang="ar"] .panel-heading-action { float: left !important; }
html[lang="ar"] .navbar-right { float: left !important; }
.skeleton-loading-pulse, #recommendation-wrapper-skeleton { display: none !important; }
#language_infos { display: inline-block !important; }
html[lang="ar"] .pull-right { float: left !important; }
html[lang="ar"] .pull-left { float: right !important; }
html[lang="ar"] .nav-tabs > li { float: right; }
html[lang="ar"] #nav-sidebar .menu .submenu { margin-right: 25px; border-right: 1px solid #d1dae1; border-left: none; }
html[lang="ar"] .input-group { direction: rtl; }
html[lang="ar"] .form-horizontal .control-label { text-align: right !important; }
html[lang="ar"] .table td.actions, html[lang="ar"] .table th.actions { text-align: left !important; }
html[lang="ar"] .dropdown-menu { text-align: right; float: right; left: auto; right: 0; }
html[lang="ar"] .modal-header { text-align: right; }
html[lang="ar"] .modal-header .close { float: left; }
html[lang="ar"] .alert { padding-right: 50px !important; border-right: solid 3px !important; border-left: none !important; }
html[lang="ar"] .pagination { direction: rtl; }
html[lang="ar"] .breadcrumb { direction: rtl; text-align: right; }
#dashboard .panel.widget .table td, #dashboard .panel.widget .table th { white-space: normal !important; }
.badge-wrapper { flex: 1; min-width: 100px; }
.badges-wrapper { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 15px; }
</style>';
        return $css;
    }
}
