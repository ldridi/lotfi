<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_387234f794d36641641bc4c929a9026c0ea4846f1ac7e4cb1f312fc7e0bca7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layouterror.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layouterror.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"middle-box text-center animated fadeInDown\">
        <h1>404</h1>
        <h3 class=\"font-bold\">Page Not Found</h3>

        <div class=\"error-desc\">
            Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
            <form class=\"form-inline m-t\" role=\"form\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for page\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
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
/* {% extends 'layout/layouterror.html.twig' %}*/
/* {% block body %}*/
/*     <div class="middle-box text-center animated fadeInDown">*/
/*         <h1>404</h1>*/
/*         <h3 class="font-bold">Page Not Found</h3>*/
/* */
/*         <div class="error-desc">*/
/*             Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.*/
/*             <form class="form-inline m-t" role="form">*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for page">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-primary">Search</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
