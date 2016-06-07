<?php

/* AdministrationBundle:Default:index.html.twig */
class __TwigTemplate_d58c90b54a6d8ed123b45ef800507779e22aa405ce54b9ddd71d03fddd303d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "AdministrationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"widget style1 yellow-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-user fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Utilisateurs </span>
                            <h2 class=\"font-bold\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nbrUser"]) ? $context["nbrUser"] : null), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 yellow-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-group fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Etablissement </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 yellow-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-file fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Article </span>
                            <h2 class=\"font-bold\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nbrArticle"]) ? $context["nbrArticle"] : null), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 yellow-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-file fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Recette </span>
                            <h2 class=\"font-bold\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["nbrRecette"]) ? $context["nbrRecette"] : null), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Restaurant </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Salon de thé </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Snacks-pizzaria </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Patisseries </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Bars </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Glaciers </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"widget style1 lazur-bg\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <i class=\"fa fa-music fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-8 text-right\">
                            <span> Chocolatiers </span>
                            <h2 class=\"font-bold\">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdministrationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 52,  72 => 39,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="wrapper wrapper-content">*/
/*         <div class="row">*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 yellow-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-user fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Utilisateurs </span>*/
/*                             <h2 class="font-bold">{{ nbrUser }}</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 yellow-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-group fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Etablissement </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 yellow-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-file fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Article </span>*/
/*                             <h2 class="font-bold">{{ nbrArticle }}</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 yellow-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-file fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Recette </span>*/
/*                             <h2 class="font-bold">{{ nbrRecette }}</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Restaurant </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Salon de thé </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Snacks-pizzaria </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Patisseries </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Bars </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Glaciers </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="widget style1 lazur-bg">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-4">*/
/*                             <i class="fa fa-music fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-8 text-right">*/
/*                             <span> Chocolatiers </span>*/
/*                             <h2 class="font-bold">12</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
