<?php

/* additional_files.html */
class __TwigTemplate_0109a5e6407dd0032a19d7e4985c3906621218360ac1fae2f732eaa8a1cdb9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/bootstrap.min.css");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 2
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/font-awesome.min.css");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 3
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/colorpicker.min.css");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 4
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/select.min.css");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 5
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/highlight.min.css");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        // line 6
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LIGHTBOX", array()) == 1)) {
            // line 7
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/lightbox.min.css");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
        // line 9
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VALUE_SLIDER", array()) == 1)) {
            // line 10
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/slider.min.css");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
        // line 12
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "THEME_FILE", array()) == 1)) {
            // line 13
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/bootstrap-theme.min.css");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
        // line 15
        echo "
";
        // line 16
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/progressbar.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 17
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/bootstrap.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 18
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/autosize.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 19
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/pace.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 20
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/jquery.pjax.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 21
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/js.cookie.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 22
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/bootbox.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 23
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/colorpicker.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 24
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/select.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 25
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/highlight.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 26
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LIGHTBOX", array()) == 1)) {
            // line 27
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/lightbox.min.js");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 28
            echo "\t";
            $value = true;
            $context['definition']->set('INCLUDED_LIGHTBOXJS', $value);
        }
        // line 30
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VALUE_SLIDER", array()) == 1)) {
            // line 31
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/slider.min.js");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
        // line 33
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "AUTOSAVE", array()) == 1)) {
            // line 34
            echo "\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/autosave.min.js");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
        // line 36
        $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/comboot.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
    }

    public function getTemplateName()
    {
        return "additional_files.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 36,  340 => 34,  338 => 33,  321 => 31,  319 => 30,  314 => 28,  298 => 27,  296 => 26,  281 => 25,  266 => 24,  251 => 23,  236 => 22,  221 => 21,  206 => 20,  191 => 19,  176 => 18,  161 => 17,  146 => 16,  143 => 15,  127 => 13,  125 => 12,  109 => 10,  107 => 9,  91 => 7,  89 => 6,  75 => 5,  61 => 4,  47 => 3,  33 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDECSS {T_THEME_PATH}/comboot/bootstrap.min.css -->*/
/* <!-- INCLUDECSS {T_THEME_PATH}/comboot/font-awesome.min.css -->*/
/* <!-- INCLUDECSS {T_THEME_PATH}/comboot/colorpicker.min.css -->*/
/* <!-- INCLUDECSS {T_THEME_PATH}/comboot/select.min.css -->*/
/* <!-- INCLUDECSS {T_THEME_PATH}/comboot/highlight.min.css -->*/
/* <!-- IF $LIGHTBOX == 1 -->*/
/* 	<!-- INCLUDECSS {T_THEME_PATH}/comboot/lightbox.min.css -->*/
/* <!-- ENDIF -->*/
/* <!-- IF $VALUE_SLIDER == 1 -->*/
/* 	<!-- INCLUDECSS {T_THEME_PATH}/comboot/slider.min.css -->*/
/* <!-- ENDIF -->*/
/* <!-- IF $THEME_FILE == 1 -->*/
/* 	<!-- INCLUDECSS {T_THEME_PATH}/comboot/bootstrap-theme.min.css -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/progressbar.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/bootstrap.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/autosize.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/pace.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/jquery.pjax.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/js.cookie.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/bootbox.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/colorpicker.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/select.min.js -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/highlight.min.js -->*/
/* <!-- IF $LIGHTBOX == 1 -->*/
/* 	<!-- INCLUDEJS {T_THEME_PATH}/comboot/lightbox.min.js -->*/
/* 	<!-- DEFINE $INCLUDED_LIGHTBOXJS = true -->*/
/* <!-- ENDIF -->*/
/* <!-- IF $VALUE_SLIDER == 1 -->*/
/* 	<!-- INCLUDEJS {T_THEME_PATH}/comboot/slider.min.js -->*/
/* <!-- ENDIF -->*/
/* <!-- IF $AUTOSAVE == 1 -->*/
/* 	<!-- INCLUDEJS {T_THEME_PATH}/comboot/autosave.min.js -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDEJS {T_THEME_PATH}/comboot/comboot.js -->*/
/* */
