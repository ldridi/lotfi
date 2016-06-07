<?php

/* layout/layoutunder.html.twig */
class __TwigTemplate_2775e1ddfc2aa7e373c3dda78b53bd120d186b17b08be4f8983d1f3ae59dfe99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/css/ggrid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- EXTENSIONS -->

        <!-- COLOR FILE -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/css/color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- COLOR FILE -->

        <!-- GENERAL STYLES FILE (NOT COLORIZED) -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- GENERAL STYLES FILE -->

        <!-- COLOR PICKER -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/css/colorpicker/colorpicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <!-- COLOR PICKER -->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- FAV AND TOUCH ICONS -->

        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-144-precomposed.html\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-114-precomposed.html\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-72-precomposed.html\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-57-precomposed.html\">
        <link rel=\"shortcut icon\" href=\"../../../crtvmax.com/templates/ouppss/ico/favicon.html\">

        <!-- JAVASCRIPTS ON BOTTOM OF THIS PAGE -->
    </head>
    <body>

        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    <footer>


        <div id=\"copyright\">Copyright © 2016. Trois fourchettes All Rights Reserved.</div>

        <div class=\"clearfix\"></div>

    </footer>

    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"j";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/s/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <!-- THEME PLUGIN -->

    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/ouppss_ui.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/codezio_settings.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("under/js/colorpicker.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layoutunder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  151 => 40,  146 => 7,  140 => 6,  133 => 64,  131 => 63,  126 => 61,  122 => 60,  117 => 58,  110 => 54,  106 => 53,  102 => 52,  98 => 51,  94 => 50,  83 => 41,  81 => 40,  58 => 20,  51 => 16,  44 => 12,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link href="{{ asset('under/css/ggrid.css') }}" rel="stylesheet">*/
/*         <!-- EXTENSIONS -->*/
/* */
/*         <!-- COLOR FILE -->*/
/*         <link href="{{ asset('under/css/color.css') }}" rel="stylesheet">*/
/*         <!-- COLOR FILE -->*/
/* */
/*         <!-- GENERAL STYLES FILE (NOT COLORIZED) -->*/
/*         <link href="{{ asset('under/css/style.css') }}" rel="stylesheet">*/
/*         <!-- GENERAL STYLES FILE -->*/
/* */
/*         <!-- COLOR PICKER -->*/
/*         <link rel="stylesheet" href="{{ asset('under/css/colorpicker/colorpicker.css') }}" type="text/css" />*/
/*         <!-- COLOR PICKER -->*/
/* */
/*         <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- FAV AND TOUCH ICONS -->*/
/* */
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-144-precomposed.html">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-114-precomposed.html">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-72-precomposed.html">*/
/*         <link rel="apple-touch-icon-precomposed" href="../../../crtvmax.com/templates/ouppss/ico/apple-touch-icon-57-precomposed.html">*/
/*         <link rel="shortcut icon" href="../../../crtvmax.com/templates/ouppss/ico/favicon.html">*/
/* */
/*         <!-- JAVASCRIPTS ON BOTTOM OF THIS PAGE -->*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}{% endblock %}*/
/*     <footer>*/
/* */
/* */
/*         <div id="copyright">Copyright © 2016. Trois fourchettes All Rights Reserved.</div>*/
/* */
/*         <div class="clearfix"></div>*/
/* */
/*     </footer>*/
/* */
/*     <script type="text/javascript" src="{{ asset('under/js/jquery-1.8.2.min.js') }}"></script>*/
/*     <script type="text/javascript" src="j{{ asset('under/s/jquery-ui-1.9.2.custom.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('under/js/jquery.easing.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('under/js/modernizr.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('under/js/jquery.validate.js') }}"></script>*/
/* */
/*     <!-- THEME PLUGIN -->*/
/* */
/*     <script type="text/javascript" src="{{ asset('under/js/ouppss_ui.js') }}"></script>*/
/* */
/*     <script type="text/javascript" src="{{ asset('under/js/codezio_settings.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('under/js/colorpicker.js') }}"></script>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
