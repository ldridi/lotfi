<?php

/* theme/index.html.twig */
class __TwigTemplate_010e9005fed263532cbea578e26d6621a137d8e342e691458800337c76501d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "theme/index.html.twig", 1);
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
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">

                        <h2>Liste des Themes
                            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("theme_new");
        echo "\">
                                <button class=\"btn btn-sm btn-danger\">Ajouter nouveau Theme</button>
                            </a>
                        </h2>
                        <div class=\"clients-list\">
                            <div class=\"tab-content\">
                                <div id=\"tab-1\" class=\"tab-pane active\">
                                    <div class=\"full-height-scroll\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                <tr>
                                                    <td class=\"client-avatar\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                                                    </td>

                                                    <td align=\"center\" class=\"client-link\">Titre Theme</td>
                                                    <td align=\"center\" class=\"client-link\"> Date d'ajout Theme</td>
                                                    <td class=\"client-link\" align=\"center\">
                                                        Statut Theme
                                                    </td>
                                                    <td align=\"center\" class=\"client-link\">
                                                        Operation
                                                    </td>
                                                </tr>
                                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 35
            echo "                                                    <tr>
                                                        <td class=\"client-avatar\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                                                        </td>

                                                        <td align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "nomTheme", array()), "html", null, true);
            echo "</td>
                                                        <td align=\"center\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["theme"], "dateTheme", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                                        <td  align=\"center\">
                                                            ";
            // line 42
            if (($this->getAttribute($context["theme"], "statutTheme", array()) == 1)) {
                // line 43
                echo "                                                                <span class=\"label label-primary\">Activé</span>
                                                            ";
            } else {
                // line 45
                echo "                                                                <span class=\"label label-danger\">Désactivé</span>
                                                            ";
            }
            // line 47
            echo "                                                        </td>
                                                        <td align=\"center\">
                                                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("theme_edit", array("id" => $this->getAttribute($context["theme"], "id", array()))), "html", null, true);
            echo "\">
                                                                <button class=\"btn btn-xs btn-success\">modifier</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        return "theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  100 => 49,  96 => 47,  92 => 45,  88 => 43,  86 => 42,  81 => 40,  77 => 39,  71 => 35,  67 => 34,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="wrapper wrapper-content  animated fadeInRight">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="ibox">*/
/*                     <div class="ibox-content">*/
/* */
/*                         <h2>Liste des Themes*/
/*                             <a href="{{ path('theme_new') }}">*/
/*                                 <button class="btn btn-sm btn-danger">Ajouter nouveau Theme</button>*/
/*                             </a>*/
/*                         </h2>*/
/*                         <div class="clients-list">*/
/*                             <div class="tab-content">*/
/*                                 <div id="tab-1" class="tab-pane active">*/
/*                                     <div class="full-height-scroll">*/
/*                                         <div class="table-responsive">*/
/*                                             <table class="table table-striped table-hover">*/
/*                                                 <tbody>*/
/*                                                 <tr>*/
/*                                                     <td class="client-avatar"><i class="fa fa-list" aria-hidden="true"></i>*/
/*                                                     </td>*/
/* */
/*                                                     <td align="center" class="client-link">Titre Theme</td>*/
/*                                                     <td align="center" class="client-link"> Date d'ajout Theme</td>*/
/*                                                     <td class="client-link" align="center">*/
/*                                                         Statut Theme*/
/*                                                     </td>*/
/*                                                     <td align="center" class="client-link">*/
/*                                                         Operation*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                                 {% for theme in themes %}*/
/*                                                     <tr>*/
/*                                                         <td class="client-avatar"><i class="fa fa-list" aria-hidden="true"></i>*/
/*                                                         </td>*/
/* */
/*                                                         <td align="center">{{ theme.nomTheme }}</td>*/
/*                                                         <td align="center"> {{ theme.dateTheme|date("m/d/Y") }}</td>*/
/*                                                         <td  align="center">*/
/*                                                             {% if(theme.statutTheme == 1) %}*/
/*                                                                 <span class="label label-primary">Activé</span>*/
/*                                                             {% else %}*/
/*                                                                 <span class="label label-danger">Désactivé</span>*/
/*                                                             {% endif %}*/
/*                                                         </td>*/
/*                                                         <td align="center">*/
/*                                                             <a href="{{ path('theme_edit', { 'id': theme.id }) }}">*/
/*                                                                 <button class="btn btn-xs btn-success">modifier</button>*/
/*                                                             </a>*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                                 </tbody>*/
/*                                             </table>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
