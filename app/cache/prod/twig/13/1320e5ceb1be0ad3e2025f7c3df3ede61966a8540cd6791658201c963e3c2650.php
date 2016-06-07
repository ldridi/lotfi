<?php

/* langue/index.html.twig */
class __TwigTemplate_924de2b172c32c35098e4fad0e8f229c52db7162d115728c9e0c858f0b354079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "langue/index.html.twig", 1);
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

                        <h2>Liste des Langues
                            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("langue_new");
        echo "\">
                                <button class=\"btn btn-sm btn-danger\">Ajouter nouvelle Langue</button>
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

                                                    <td align=\"center\" class=\"client-link\">Titre Langue</td>
                                                    <td align=\"center\" class=\"client-link\"> Date d'ajout Langue</td>
                                                    <td class=\"client-link\" align=\"center\">
                                                        Statut Langue
                                                    </td>
                                                    <td align=\"center\" class=\"client-link\">
                                                        Operation
                                                    </td>
                                                </tr>
                                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langues"]) ? $context["langues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 35
            echo "                                                    <tr>
                                                        <td class=\"client-avatar\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                                                        </td>

                                                        <td align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["langue"], "nomLangue", array()), "html", null, true);
            echo "</td>
                                                        <td align=\"center\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["langue"], "dateLangue", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                                        <td  align=\"center\">
                                                            ";
            // line 42
            if (($this->getAttribute($context["langue"], "statutLangue", array()) == 1)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langue_edit", array("id" => $this->getAttribute($context["langue"], "id", array()))), "html", null, true);
            echo "\">
                                                                <button class=\"btn btn-xs btn-success\">modifier</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
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
        return "langue/index.html.twig";
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
/*                         <h2>Liste des Langues*/
/*                             <a href="{{ path('langue_new') }}">*/
/*                                 <button class="btn btn-sm btn-danger">Ajouter nouvelle Langue</button>*/
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
/*                                                     <td align="center" class="client-link">Titre Langue</td>*/
/*                                                     <td align="center" class="client-link"> Date d'ajout Langue</td>*/
/*                                                     <td class="client-link" align="center">*/
/*                                                         Statut Langue*/
/*                                                     </td>*/
/*                                                     <td align="center" class="client-link">*/
/*                                                         Operation*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                                 {% for langue in langues %}*/
/*                                                     <tr>*/
/*                                                         <td class="client-avatar"><i class="fa fa-list" aria-hidden="true"></i>*/
/*                                                         </td>*/
/* */
/*                                                         <td align="center">{{ langue.nomLangue }}</td>*/
/*                                                         <td align="center"> {{ langue.dateLangue|date("m/d/Y") }}</td>*/
/*                                                         <td  align="center">*/
/*                                                             {% if(langue.statutLangue == 1) %}*/
/*                                                                 <span class="label label-primary">Activé</span>*/
/*                                                             {% else %}*/
/*                                                                 <span class="label label-danger">Désactivé</span>*/
/*                                                             {% endif %}*/
/*                                                         </td>*/
/*                                                         <td align="center">*/
/*                                                             <a href="{{ path('langue_edit', { 'id': langue.id }) }}">*/
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
