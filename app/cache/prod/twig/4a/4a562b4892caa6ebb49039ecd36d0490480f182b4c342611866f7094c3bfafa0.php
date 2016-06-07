<?php

/* @Administration/Include/sideBar.html.twig */
class __TwigTemplate_5b9ead340017be51f45f9b35333d43e9a58fa402337c907b83e80ae0a07408a4 extends Twig_Template
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
        echo "<div id=\"right-sidebar\">
    <div class=\"sidebar-container\">
        ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "        <ul class=\"nav nav-tabs navs-3\">
        ";
        } else {
            // line 6
            echo "            <ul class=\"nav nav-tabs navs-2\">
            ";
        }
        // line 8
        echo "            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#tab-1\">
                    Signal
                </a>
            </li>
            <li>
                <a data-toggle=\"tab\" href=\"#tab-2\">
                    Comment.
                </a>
            </li>
            ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "            <li>
                <a data-toggle=\"tab\" href=\"#tab-3\">
                    Recettes
                </a>
            </li>
            ";
        }
        // line 25
        echo "        </ul>

        <div class=\"tab-content\">


            <div id=\"tab-1\" class=\"tab-pane active\">

                <div class=\"sidebar-title\">
                    <h3> <i class=\"fa fa-comments-o\"></i>&nbsp;Signals</h3>
                    <small><i class=\"fa fa-tim\"></i> Il y a ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nbSignalRecette"]) ? $context["nbSignalRecette"] : null), "html", null, true);
        echo " Signal</small>
                </div>

                <div>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["SignalRecette"]) ? $context["SignalRecette"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["signal"]) {
            // line 39
            echo "                        <div class=\"sidebar-message\">
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("signalrecette_show", array("id" => $this->getAttribute($context["signal"], "id", array()))), "html", null, true);
            echo "\">
                                <div class=\"pull-left text-center\">

                                    <img alt=\"image\" class=\"img-circle message-avatar\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["signal"], "recette", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\">

                                </div>
                                <div class=\"media-body\">
                                    <p>

                                        <b>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["signal"], "recette", array()), "nomRecette", array()), "html", null, true);
            echo "</b>
                                        <span class=\"badge badge-info\"> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["signal"], "niveauSignalRecette", array()), "html", null, true);
            echo "</span>


                                    </p>
                                    <small class=\"text-muted\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["signal"], "dateSignalRecette", array()), "m/d/Y à H:i:s"), "html", null, true);
            echo "</span></small>
                                </div>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>

            </div>

            <div id=\"tab-2\" class=\"tab-pane\">

                <div class=\"sidebar-title\">
                    <h3> <i class=\"fa fa-cube\"></i>&nbsp;Commentaires</h3>
                    <small><i class=\"fa fa-tim\"></i> Il y a ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["nbSignalComment"]) ? $context["nbSignalComment"] : null), "html", null, true);
        echo " Commentaires</small>
                </div>

                <ul class=\"sidebar-list\">
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["SignalComment"]) ? $context["SignalComment"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 72
            echo "                        <div class=\"sidebar-message\">
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("signalrecette_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "signalRecette", array()), "id", array()))), "html", null, true);
            echo "#comment\">
                                <div class=\"pull-left text-center\">

                                    <img alt=\"image\" class=\"img-circle message-avatar\" src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\">

                                </div>
                                <div class=\"media-body\">
                                    <p>
                                        Commenté par <b>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</b>
                                    </p>
                                    <small class=\"text-muted\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "dateCommentaireSignal", array()), "m/d/Y à H:i:s"), "html", null, true);
            echo "</span></small>
                                </div>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                </ul>

            </div>
            ";
        // line 92
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "            <div id=\"tab-3\" class=\"tab-pane\">

                <div class=\"sidebar-title\">
                    <h3> <i class=\"fa fa-cube\"></i>&nbsp;Recettes</h3>
                    <small><i class=\"fa fa-tim\"></i> Il y a ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["nbRecette"]) ? $context["nbRecette"] : null), "html", null, true);
            echo " Recettes.</small>
                </div>

                <ul class=\"sidebar-list\">
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Recette"]) ? $context["Recette"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
                // line 102
                echo "                        <div class=\"sidebar-message\">
                            <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recette_show", array("id" => $this->getAttribute($context["recette"], "id", array()))), "html", null, true);
                echo "\">
                                <div class=\"pull-left text-center\">

                                    <img alt=\"image\" class=\"img-circle message-avatar\" src=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["recette"], "auteur", array()), "image", array()), "webPath", array())), "html", null, true);
                echo "\">

                                </div>
                                <div class=\"media-body\">
                                    <p>
                                        Ajouter par <b>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recette"], "auteur", array()), "username", array()), "html", null, true);
                echo "</b>

                                    </p>
                                    <small class=\"text-muted\">";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recette"], "dateRecette", array()), "m/d/Y à H:i:s"), "html", null, true);
                echo "</span></small>
                                </div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                </ul>

            </div>
            ";
        }
        // line 123
        echo "        </div>

    </div>



</div>";
    }

    public function getTemplateName()
    {
        return "@Administration/Include/sideBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 123,  230 => 119,  219 => 114,  213 => 111,  205 => 106,  199 => 103,  196 => 102,  192 => 101,  185 => 97,  179 => 93,  177 => 92,  171 => 88,  160 => 83,  155 => 81,  147 => 76,  141 => 73,  138 => 72,  134 => 71,  127 => 67,  117 => 59,  106 => 54,  99 => 50,  95 => 49,  86 => 43,  80 => 40,  77 => 39,  73 => 38,  66 => 34,  55 => 25,  47 => 19,  45 => 18,  33 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="right-sidebar">*/
/*     <div class="sidebar-container">*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <ul class="nav nav-tabs navs-3">*/
/*         {% else %}*/
/*             <ul class="nav nav-tabs navs-2">*/
/*             {% endif %}*/
/*             <li class="active">*/
/*                 <a data-toggle="tab" href="#tab-1">*/
/*                     Signal*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a data-toggle="tab" href="#tab-2">*/
/*                     Comment.*/
/*                 </a>*/
/*             </li>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             <li>*/
/*                 <a data-toggle="tab" href="#tab-3">*/
/*                     Recettes*/
/*                 </a>*/
/*             </li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         <div class="tab-content">*/
/* */
/* */
/*             <div id="tab-1" class="tab-pane active">*/
/* */
/*                 <div class="sidebar-title">*/
/*                     <h3> <i class="fa fa-comments-o"></i>&nbsp;Signals</h3>*/
/*                     <small><i class="fa fa-tim"></i> Il y a {{ nbSignalRecette }} Signal</small>*/
/*                 </div>*/
/* */
/*                 <div>*/
/*                     {% for signal in SignalRecette %}*/
/*                         <div class="sidebar-message">*/
/*                             <a href="{{ path('signalrecette_show', {'id':signal.id}) }}">*/
/*                                 <div class="pull-left text-center">*/
/* */
/*                                     <img alt="image" class="img-circle message-avatar" src="{{ asset(signal.recette.image.webPath) }}">*/
/* */
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p>*/
/* */
/*                                         <b>{{ signal.recette.nomRecette }}</b>*/
/*                                         <span class="badge badge-info"> {{ signal.niveauSignalRecette }}</span>*/
/* */
/* */
/*                                     </p>*/
/*                                     <small class="text-muted">{{  signal.dateSignalRecette|date("m/d/Y à H:i:s") }}</span></small>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div id="tab-2" class="tab-pane">*/
/* */
/*                 <div class="sidebar-title">*/
/*                     <h3> <i class="fa fa-cube"></i>&nbsp;Commentaires</h3>*/
/*                     <small><i class="fa fa-tim"></i> Il y a {{ nbSignalComment }} Commentaires</small>*/
/*                 </div>*/
/* */
/*                 <ul class="sidebar-list">*/
/*                     {% for comment in SignalComment %}*/
/*                         <div class="sidebar-message">*/
/*                             <a href="{{ path('signalrecette_show', {'id':comment.signalRecette.id}) }}#comment">*/
/*                                 <div class="pull-left text-center">*/
/* */
/*                                     <img alt="image" class="img-circle message-avatar" src="{{ asset(comment.user.image.webPath) }}">*/
/* */
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p>*/
/*                                         Commenté par <b>{{ comment.user.username }}</b>*/
/*                                     </p>*/
/*                                     <small class="text-muted">{{  comment.dateCommentaireSignal|date("m/d/Y à H:i:s") }}</span></small>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/* */
/*             </div>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             <div id="tab-3" class="tab-pane">*/
/* */
/*                 <div class="sidebar-title">*/
/*                     <h3> <i class="fa fa-cube"></i>&nbsp;Recettes</h3>*/
/*                     <small><i class="fa fa-tim"></i> Il y a {{ nbRecette }} Recettes.</small>*/
/*                 </div>*/
/* */
/*                 <ul class="sidebar-list">*/
/*                     {% for recette in Recette %}*/
/*                         <div class="sidebar-message">*/
/*                             <a href="{{ path('recette_show', {'id':recette.id}) }}">*/
/*                                 <div class="pull-left text-center">*/
/* */
/*                                     <img alt="image" class="img-circle message-avatar" src="{{ asset(recette.auteur.image.webPath) }}">*/
/* */
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <p>*/
/*                                         Ajouter par <b>{{ recette.auteur.username }}</b>*/
/* */
/*                                     </p>*/
/*                                     <small class="text-muted">{{  recette.dateRecette|date("m/d/Y à H:i:s") }}</span></small>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*             </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* </div>*/
