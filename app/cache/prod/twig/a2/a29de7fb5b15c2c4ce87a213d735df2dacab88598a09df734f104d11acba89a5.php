<?php

/* langue/edit.html.twig */
class __TwigTemplate_c7ce210b4afa1c80decddb94c5a2b13d72b7078011d3b2d197e6595c3da45430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "langue/edit.html.twig", 1);
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
                        <div class=\"row\">
                            <div class=\"col-md-8\">

                                <h2>Liste des langues
                                    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("langue_new");
        echo "\">
                                        <button class=\"btn btn-sm btn-danger\">Ajouter nouvelle langue</button>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langues"]) ? $context["langues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 37
            echo "                                                            <tr>
                                                                <td class=\"client-avatar\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                                                                </td>

                                                                <td align=\"center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["langue"], "nomLangue", array()), "html", null, true);
            echo "</td>
                                                                <td align=\"center\"> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["langue"], "dateLangue", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                                                <td  align=\"center\">
                                                                    ";
            // line 44
            if (($this->getAttribute($context["langue"], "statutLangue", array()) == 1)) {
                // line 45
                echo "                                                                        <span class=\"label label-primary\">Activé</span>
                                                                    ";
            } else {
                // line 47
                echo "                                                                        <span class=\"label label-danger\">Désactivé</span>
                                                                    ";
            }
            // line 49
            echo "                                                                </td>
                                                                <td align=\"center\">
                                                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topic_edit", array("id" => $this->getAttribute($context["langue"], "id", array()))), "html", null, true);
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
        // line 57
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"well well-sm\">
                                    <h2>Modifier  \"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["langue"]) ? $context["langue"] : null), "nomLangue", array()), "html", null, true);
        echo "\"</h2>
                                    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                                    <div class=\"form-group\"><label>Titre langue</label>
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nomLangue", array()), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\"><label>Statut Langue</label>
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "statutLangue", array()), 'widget');
        echo "
                                    </div>
                                    <div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <button class=\"btn btn-sm btn-primary pull-right m-t-n-xs btn-block\" type=\"submit\"><strong>Modifier</strong></button>
                                            </div>
                                            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
                                            <div class=\"col-md-6\">
                                                ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                                                <button class=\"btn btn-sm btn-danger pull-right m-t-n-xs btn-block\" type=\"submit\"><strong>Supprimer</strong></button>
                                                ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
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
    </div>
";
    }

    public function getTemplateName()
    {
        return "langue/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 85,  157 => 83,  152 => 81,  142 => 74,  136 => 71,  131 => 69,  127 => 68,  114 => 57,  102 => 51,  98 => 49,  94 => 47,  90 => 45,  88 => 44,  83 => 42,  79 => 41,  73 => 37,  69 => 36,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="wrapper wrapper-content  animated fadeInRight">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="ibox">*/
/*                     <div class="ibox-content">*/
/*                         <div class="row">*/
/*                             <div class="col-md-8">*/
/* */
/*                                 <h2>Liste des langues*/
/*                                     <a href="{{ path('langue_new') }}">*/
/*                                         <button class="btn btn-sm btn-danger">Ajouter nouvelle langue</button>*/
/*                                     </a>*/
/*                                 </h2>*/
/*                                 <div class="clients-list">*/
/*                                     <div class="tab-content">*/
/*                                         <div id="tab-1" class="tab-pane active">*/
/*                                             <div class="full-height-scroll">*/
/*                                                 <div class="table-responsive">*/
/*                                                     <table class="table table-striped table-hover">*/
/*                                                         <tbody>*/
/*                                                         <tr>*/
/*                                                             <td class="client-avatar"><i class="fa fa-list" aria-hidden="true"></i>*/
/*                                                             </td>*/
/* */
/*                                                             <td align="center" class="client-link">Titre Langue</td>*/
/*                                                             <td align="center" class="client-link"> Date d'ajout Langue</td>*/
/*                                                             <td class="client-link" align="center">*/
/*                                                                 Statut Langue*/
/*                                                             </td>*/
/*                                                             <td align="center" class="client-link">*/
/*                                                                 Operation*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         {% for langue in langues %}*/
/*                                                             <tr>*/
/*                                                                 <td class="client-avatar"><i class="fa fa-list" aria-hidden="true"></i>*/
/*                                                                 </td>*/
/* */
/*                                                                 <td align="center">{{ langue.nomLangue }}</td>*/
/*                                                                 <td align="center"> {{ langue.dateLangue|date("m/d/Y") }}</td>*/
/*                                                                 <td  align="center">*/
/*                                                                     {% if(langue.statutLangue == 1) %}*/
/*                                                                         <span class="label label-primary">Activé</span>*/
/*                                                                     {% else %}*/
/*                                                                         <span class="label label-danger">Désactivé</span>*/
/*                                                                     {% endif %}*/
/*                                                                 </td>*/
/*                                                                 <td align="center">*/
/*                                                                     <a href="{{ path('topic_edit', { 'id': langue.id }) }}">*/
/*                                                                         <button class="btn btn-xs btn-success">modifier</button>*/
/*                                                                     </a>*/
/*                                                                 </td>*/
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                         </tbody>*/
/*                                                     </table>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="well well-sm">*/
/*                                     <h2>Modifier  "{{ langue.nomLangue }}"</h2>*/
/*                                     {{ form_start(edit_form) }}*/
/*                                     <div class="form-group"><label>Titre langue</label>*/
/*                                         {{ form_widget(edit_form.nomLangue) }}*/
/*                                     </div>*/
/*                                     <div class="form-group"><label>Statut Langue</label>*/
/*                                         {{ form_widget(edit_form.statutLangue) }}*/
/*                                     </div>*/
/*                                     <div>*/
/*                                         <div class="row">*/
/*                                             <div class="col-md-6">*/
/*                                                 <button class="btn btn-sm btn-primary pull-right m-t-n-xs btn-block" type="submit"><strong>Modifier</strong></button>*/
/*                                             </div>*/
/*                                             {{ form_end(edit_form) }}*/
/*                                             <div class="col-md-6">*/
/*                                                 {{ form_start(delete_form) }}*/
/*                                                 <button class="btn btn-sm btn-danger pull-right m-t-n-xs btn-block" type="submit"><strong>Supprimer</strong></button>*/
/*                                                 {{ form_end(delete_form) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
