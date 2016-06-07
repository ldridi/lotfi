<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_50b8aa1318429dc9d3e472dc4a519e3b20238fb28bb20b2d45c2ab59ea76616c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "

<div class=\"loginColumns animated fadeInDown\">
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h2 class=\"font-bold\">Bienvenu sur Troisfourchettes.com</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur, distinctio, ea eaque et eveniet ipsum iste necessitatibus nemo nisi numquam odit provident rerum saepe sed tempora unde voluptas, voluptates!
            </p>


        </div>
        <div class=\"col-md-6\">
            <div class=\"ibox-content\">
                ";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 23
            echo "                <div class=\"alert alert-warning\">

                        <div>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>

                </div>
                ";
        }
        // line 29
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/trois.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                    <div class=\"form-group\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Username\"/>
                    </div>
                    <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\"/>
                    </div>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-warning block full-width m-b\" style=\"background-color: #CD4A1C;\"/>
                </form>
            </div>
        </div>
    </div>
    <hr/>
    <div class=\"row\">
        <div class=\"col-md-6\">
            Copyright Troisfourchettes.com
        </div>
        <div class=\"col-md-6 text-right\">
            <small>© 2015-2016</small>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 40,  77 => 34,  71 => 31,  67 => 30,  62 => 29,  55 => 25,  51 => 23,  49 => 22,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* <div class="loginColumns animated fadeInDown">*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-6">*/
/*             <h2 class="font-bold">Bienvenu sur Troisfourchettes.com</h2>*/
/* */
/*             <p>*/
/*                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur, distinctio, ea eaque et eveniet ipsum iste necessitatibus nemo nisi numquam odit provident rerum saepe sed tempora unde voluptas, voluptates!*/
/*             </p>*/
/* */
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="ibox-content">*/
/*                 {% if error %}*/
/*                 <div class="alert alert-warning">*/
/* */
/*                         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* */
/*                 </div>*/
/*                 {% endif %}*/
/*                 <img src="{{ asset('img/trois.jpg') }}" class="img-responsive">*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <div class="form-group">*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="Username"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password"/>*/
/*                     </div>*/
/* */
/*                     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-warning block full-width m-b" style="background-color: #CD4A1C;"/>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr/>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             Copyright Troisfourchettes.com*/
/*         </div>*/
/*         <div class="col-md-6 text-right">*/
/*             <small>© 2015-2016</small>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
