<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_eed78465f31ace0d8336421bf791cbe7be6191002398fa1d78a3a0ba2241db13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layoutunder.html.twig", "ProjetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutunder.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <header>

        <div id=\"top\" class=\"g_container_12\">

            <!-- LOGO -->

            <div id=\"logo\" class=\"g_four\">

                <a href=\"#\"></a>

            </div>

            <!-- END OF LOGO -->

            <div class=\"clearfix\"></div>

        </div>

        <div id=\"title\" class=\"g_container_12\">

            <h1>Site web en cours de construction</h1>

            <h2>Inscrivez vous a notre Newsletter pour recevoir notre Nouveauté</h2>

        </div>

        <div class=\"clearfix\"></div>

    </header>
    <section>

        <!-- SUBSCRIBE -->

        <div id=\"subscribe\">

            <form>

                <div class=\"input\">

                    <input type=\"text\" name=\"subscribe_mail\" id=\"subscribe_mail\" placeholder=\"entrez votre adresse E-Mail\">

                    <input type=\"button\" value=\"souscrire\">

                </div>

            </form>

        </div>

        <!-- END OF SUBSCRIBE -->

    </section>
";
    }

    public function getTemplateName()
    {
        return "ProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layoutunder.html.twig' %}*/
/* {% block body %}*/
/*     <header>*/
/* */
/*         <div id="top" class="g_container_12">*/
/* */
/*             <!-- LOGO -->*/
/* */
/*             <div id="logo" class="g_four">*/
/* */
/*                 <a href="#"></a>*/
/* */
/*             </div>*/
/* */
/*             <!-- END OF LOGO -->*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*         </div>*/
/* */
/*         <div id="title" class="g_container_12">*/
/* */
/*             <h1>Site web en cours de construction</h1>*/
/* */
/*             <h2>Inscrivez vous a notre Newsletter pour recevoir notre Nouveauté</h2>*/
/* */
/*         </div>*/
/* */
/*         <div class="clearfix"></div>*/
/* */
/*     </header>*/
/*     <section>*/
/* */
/*         <!-- SUBSCRIBE -->*/
/* */
/*         <div id="subscribe">*/
/* */
/*             <form>*/
/* */
/*                 <div class="input">*/
/* */
/*                     <input type="text" name="subscribe_mail" id="subscribe_mail" placeholder="entrez votre adresse E-Mail">*/
/* */
/*                     <input type="button" value="souscrire">*/
/* */
/*                 </div>*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/* */
/*         <!-- END OF SUBSCRIBE -->*/
/* */
/*     </section>*/
/* {% endblock %}*/
