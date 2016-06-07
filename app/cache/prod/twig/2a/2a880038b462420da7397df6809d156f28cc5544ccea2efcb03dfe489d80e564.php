<?php

/* layout/layout.html.twig */
class __TwigTemplate_4f6bbfb6d62533dd4e77bdd0d733904c577b8bc391a5bd8db650d83292407f80 extends Twig_Template
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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/iCheck/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/chosen/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/dataTables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/clockpicker/clockpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
    <div id=\"wrapper\">
        <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav metismenu\" id=\"side-menu\">
                    <li class=\"nav-header\">
                        <div class=\"dropdown profile-element text-center\"> <span>
                            <img alt=\"image\" class=\"img-circle\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
        echo "\" style=\"height: 70px;width: 70px;border-radius: 70px;border:2px solid white;\"/>
                             </span>
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold \">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
                             </span>  </span> </a>
                            <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                                <li><a href=\"userProfile.php\">Profile</a></li>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("redacteurGestion");
        echo "\">les Rédacteurs</a></li>
                                <li><a href=\"../mailbox.html\">Mailbox</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                            </ul>
                        </div>
                        <div class=\"logo-element\">
                            IN+
                        </div>
                    </li>
                    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "                    <li class=\"active\">
                        <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("administration_homepage");
            echo "\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Page principale</span></a>
                    </li>
                    ";
        }
        // line 48
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                    <li>
                        <a href=\"gestionEntreprise.php\"><i class=\"fa fa-cogs\"></i> <span class=\"nav-label\">Configuration</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("langue_index");
            echo "\">Langues</a></li>
                            <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("theme_index");
            echo "\">Themes</a></li>
                            <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("topic_index");
            echo "\">Topics</a></li>
                            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("difficulte_index");
            echo "\">Difficultés</a></li>
                            <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("nationalite_index");
            echo "\">Nationalité</a></li>
                            <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("ingredient_index");
            echo "\">Ingrédients</a></li>
                            <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("theme_index");
            echo "\">Themes</a></li>
                            <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("categorie_index");
            echo "\">Categories</a></li>
                            <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("menu_index");
            echo "\">Menu</a></li>
                            <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("subcategorie_index");
            echo "\">Sous Categories</a></li>
                            <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("specialite_index");
            echo "\">Spécialités</a></li>
                            <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("filtre_index");
            echo "\">Filtres</a></li>
                            <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("ambiance_index");
            echo "\">Ambiances</a></li>

                            <li><a href=\"soutraitance.php\">Budgets <b style=\"color:yellow;\">(*)</b></a></li>
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("confidentialite_index");
            echo "\"> <span class=\"nav-label\">Confidentialités </span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a><i class=\"fa fa-dashboard\"></i> <span class=\"nav-label\">Gestion</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">

                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Etablissement</span><span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level collapse\">
                                    <li>
                                        <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("etablissement_new");
            echo "\">Ajouter un etablissement</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("etablissement_index");
            echo "\">Afficher tous</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher en grid</a>
                                    </li>

                                    <li>
                                        <a href=\"#\">Autorisation</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Sponsorisé</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Membres</span><span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level collapse\">
                                    <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("memberGestion");
            echo "\">Gestion</a></li>
                                    <li><a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("memberNouveau");
            echo "\">Nouveaux Membres</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    ";
        }
        // line 108
        echo "                    <li>
                        <a><i class=\"fa fa-pencil-square-o\"></i> <span class=\"nav-label\">Rédaction</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            ";
        // line 111
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 112
            echo "                            <li>
                                <a href=\"#\"> <span class=\"nav-label\">Articles</span><span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level collapse\">
                                    <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("article_grid");
            echo "\">Ajouter nouveau</a></li>
                                    <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("article_grid");
            echo "\">Afficher tous</a></li>
                                    <li><a href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("article_index");
            echo "\">Rechercher</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i>Statistique Article<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li><a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("stat_redactionTotal");
            echo "\">Statistique total</a></li>
                                    <li><a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("stat_redactionMonth");
            echo "\">Statistique Par mois</a></li>
                                    <li><a href=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("stat_redactionDay");
            echo "\">Statistique par jour</a></li>

                                </ul>
                            </li>
                            ";
        }
        // line 131
        echo "                            <li>
                                <a href=\"#\"> <span class=\"nav-label\">Recette</span><span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level collapse\">
                                    <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("recette_new");
        echo "\">Ajouter nouveau</a></li>
                                    <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("recette_index");
        echo "\">Afficher tous</a></li>
                                    ";
        // line 136
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 137
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("signalrecette_index");
            echo "\">Signal recette</a></li>
                                    ";
        }
        // line 139
        echo "                                </ul>
                            </li>
                            ";
        // line 141
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i>Statistique Recette<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li><a href=\"";
            // line 145
            echo $this->env->getExtension('routing')->getPath("stat_redactionRecetteTotal");
            echo "\">Statistique total</a></li>
                                    <li><a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("stat_redactionRecetteMonth");
            echo "\">Statistique Par mois</a></li>

                                    <li><a href=\"";
            // line 148
            echo $this->env->getExtension('routing')->getPath("stat_redactionRecetteDay");
            echo "\">Statistique par jour</a></li>

                                </ul>
                            </li>
                            ";
        }
        // line 153
        echo "                        </ul>
                    </li>
                    ";
        // line 155
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 156
            echo "                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Statistique</span><span class=\"fa arrow\"></span></a>

                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"gestionEntreprise.php\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Top Rank </span><span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level collapse\">
                                    <li>
                                        <a href=\"#\">Article <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Recettes<span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Restaurant <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Sponsorisés</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Plus visités</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Mieux notés</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">alon de thé <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Patisseries <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Bars <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Glaciers <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Chocolatiers <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li><a href=\"../teams_board.html\">Top Gourmands</a></li>
                            <li><a href=\"../teams_board.html\">Top Ecrivains</a></li>
                            <li><a href=\"../teams_board.html\">Top Photographes</a></li>
                            <li><a href=\"";
            // line 290
            echo $this->env->getExtension('routing')->getPath("stat_navigateur");
            echo "\">Navigateur</a></li>
                            <li><a href=\"";
            // line 291
            echo $this->env->getExtension('routing')->getPath("stat_systeme");
            echo "\">Systeme d'exploitation</a></li>
                            <li><a href=\"";
            // line 292
            echo $this->env->getExtension('routing')->getPath("stat_pays");
            echo "\">Pays</a></li>
                            <li><a href=\"";
            // line 293
            echo $this->env->getExtension('routing')->getPath("stat_ville");
            echo "\">Régions</a></li>
                            <li><a href=\"../soutraitance.php\">Genre</a></li>
                            <li><a href=\"../soutraitance.php\">Age</a></li>
                            <li><a href=\"../soutraitance.php\">Visite</a></li>
                            <li><a href=\"../soutraitance.php\">Notes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"\"><i class=\"fa fa-eye\"></i> <span class=\"nav-label\">Surveillance</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"";
            // line 304
            echo $this->env->getExtension('routing')->getPath("surveillance_index");
            echo "\"><i class=\"fa fa-bar-chart-o\"></i>Tous</a></li>
                            <li><a href=\"";
            // line 305
            echo $this->env->getExtension('routing')->getPath("surveillance_mediaArticle");
            echo "\"><i class=\"fa fa-bar-chart-o\"></i>Media</a></li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i><span class=\"nav-label\">Déclaration</span></a>
                            </li>
                            <li>
                                <a href=\"../mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Litige </span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"\"><i class=\"fa fa-money\"></i> <span class=\"nav-label\">Marketing</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"../mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Sponsorisation </span></a>
                            </li>
                            <li>
                                <a href=\"../mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Banniere publicitaire </span></a>
                            </li>
                        </ul>
                    </li>
                    ";
        }
        // line 326
        echo "









                </ul>

            </div>
        </nav>
        <div id=\"page-wrapper\" class=\"gray-bg\">

            <div class=\"row border-bottom\">

                <nav class=\"navbar navbar-static-top white-bg\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-warning \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>

                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li>
                            <span class=\"m-r-sm text-muted welcome-message\">bienvenu <b>";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</b> chez TroisFourchettes</span>
                        </li>

                        <li class=\"dropdown\">
                            ";
        // line 355
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 356
            echo "                            <a class=\"count-info\" href=\"";
            echo $this->env->getExtension('routing')->getPath("messagerie_index");
            echo "\">
                                <i class=\"fa fa-envelope\"></i>  <span class=\"label label-warning\" >0</span>
                            </a>
                            ";
        }
        // line 360
        echo "
                            <ul class=\"dropdown-menu dropdown-messages\">
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"../profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"../img/a7.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right\">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class=\"text-muted\">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"../profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"../img/a4.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right text-navy\">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class=\"text-muted\">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"../profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"../img/profile.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right\">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class=\"text-muted\">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"text-center link-block\">
                                        <a href=\"../mailbox.html\">
                                            <i class=\"fa fa-envelope\"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a class=\"count-info\"  href=\"#\">
                                <i class=\"fa fa-bell\"></i>  <span class=\"label label-danger\" id=\"nbrnotification\">0</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-alerts\">
                                <li>
                                    <a href=\"mailbox.html\">
                                        <div>
                                            <i class=\"fa fa-envelope fa-fw\"></i> You have 16 messages
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"profile.html\">
                                        <div>
                                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                            <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"grid_options.html\">
                                        <div>
                                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"text-center link-block\">
                                        <a href=\"notifications.html\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a class=\"count-info\" href=\"#\">
                                <i class=\"fa fa-comments-o\"></i>  <span class=\"label label-success\" id=\"nbrnotificationCommentaire\">0</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-alerts\">
                                <li>
                                    <a href=\"mailbox.html\">
                                        <div>
                                            <i class=\"fa fa-envelope fa-fw\"></i> You have 16 messages
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"profile.html\">
                                        <div>
                                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                            <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"grid_options.html\">
                                        <div>
                                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"text-center link-block\">
                                        <a href=\"notifications.html\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href=\"";
        // line 497
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                <i class=\"fa fa-sign-out\"></i> Se Déconnecter
                            </a>
                        </li>
                        <li>
                            <a class=\"right-sidebar-toggle\">
                                <i class=\"fa fa-tasks\"></i>
                            </a>
                        </li>
                    </ul>

                </nav>


            </div>

        ";
        // line 513
        $this->displayBlock('body', $context, $blocks);
        // line 514
        echo "            <div class=\"footer\">
                <div class=\"pull-right\">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>
        ";
        // line 523
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdministrationBundle:Include:sideBar"));
        echo "
        </div>
        <script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src='";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/playsound.js"), "html", null, true);
        echo "'></script>
        <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/chosen/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/clockpicker/clockpicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>


        <script>
            /*\$(document).ready(function(){

                \$(\"#form\").validate({
                    rules: {
                        nomRecette: {
                            required: true,
                            minlength: 3
                        },
                        preparationRecette: {
                            required: true,
                            minlength: 3
                        },
                        descriptionRecette: {
                            required: true,
                            minlength: 3
                        },
                        cuissonRecette: {
                            required: true,
                            minlength: 3
                        },
                        ingredient: {
                            required: true,
                            remote: true
                        },
                        difficulte: {
                            required: true,
                            selectcheck: true,
                            remote: true
                        },
                        nationalite: {
                            required: true,
                            minlength: 3
                        },
                        theme: {
                            required: true,
                            minlength: 3
                        }
                    }
                });
            });*/
        </script>
        <script>
            \$('.clockpicker').clockpicker();
        </script>
        <script>
            \$(document).ready(function(){
                \$('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        <script>
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:\"95%\"}
            }
            for (var selector in config) {
                \$(selector).chosen(config[selector]);
            }

        </script>

        <script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Peity -->
        <script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/peity-demo.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom and plugin javascript -->
        <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery UI -->
        <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Jvectormap -->
        <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

        <!-- EayPIE -->
        <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>

        <!-- Sparkline -->
        <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Sparkline demo data  -->
        <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/sparkline-demo.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/dataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        <script>
            CKEDITOR.on('instanceReady', function(evt) {
                \$(evt.editor.container.\$).find('iframe').contents()
                        .bind({
                            copy : function(){
                                console.log('copie');
                            },
                            paste : function(){
                                console.log('paste');
                            },
                            cut : function(){
                                console.log('cut');
                            }
                        });
            });
        </script>
    <script>
        
    </script>
        <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 652
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notification.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notificationCommentaire.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugin.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 656
        $this->displayBlock('javascripts', $context, $blocks);
        // line 657
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

    // line 513
    public function block_body($context, array $blocks = array())
    {
    }

    // line 656
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  991 => 656,  986 => 513,  981 => 7,  975 => 6,  968 => 657,  966 => 656,  962 => 655,  958 => 654,  954 => 653,  950 => 652,  946 => 651,  942 => 650,  919 => 630,  914 => 628,  909 => 626,  903 => 623,  897 => 620,  891 => 617,  887 => 616,  881 => 613,  875 => 610,  871 => 609,  865 => 606,  861 => 605,  855 => 602,  851 => 601,  778 => 531,  774 => 530,  770 => 529,  766 => 528,  762 => 527,  758 => 526,  754 => 525,  749 => 523,  738 => 514,  736 => 513,  717 => 497,  578 => 360,  570 => 356,  568 => 355,  561 => 351,  534 => 326,  510 => 305,  506 => 304,  492 => 293,  488 => 292,  484 => 291,  480 => 290,  344 => 156,  342 => 155,  338 => 153,  330 => 148,  325 => 146,  321 => 145,  316 => 142,  314 => 141,  310 => 139,  304 => 137,  302 => 136,  298 => 135,  294 => 134,  289 => 131,  281 => 126,  277 => 125,  273 => 124,  263 => 117,  259 => 116,  255 => 115,  250 => 112,  248 => 111,  243 => 108,  234 => 102,  230 => 101,  210 => 84,  204 => 81,  188 => 68,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  137 => 53,  133 => 52,  128 => 49,  125 => 48,  119 => 45,  116 => 44,  114 => 43,  104 => 36,  98 => 33,  91 => 29,  85 => 26,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/plugins/chosen/chosen.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/animate.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*     <div id="wrapper">*/
/*         <nav class="navbar-default navbar-static-side" role="navigation">*/
/*             <div class="sidebar-collapse">*/
/*                 <ul class="nav metismenu" id="side-menu">*/
/*                     <li class="nav-header">*/
/*                         <div class="dropdown profile-element text-center"> <span>*/
/*                             <img alt="image" class="img-circle" src="{{ asset(app.user.image.webPath) }}" style="height: 70px;width: 70px;border-radius: 70px;border:2px solid white;"/>*/
/*                              </span>*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold ">{{ app.user.username}}</strong>*/
/*                              </span>  </span> </a>*/
/*                             <ul class="dropdown-menu animated fadeInRight m-t-xs">*/
/*                                 <li><a href="userProfile.php">Profile</a></li>*/
/*                                 <li><a href="{{ path('redacteurGestion') }}">les Rédacteurs</a></li>*/
/*                                 <li><a href="../mailbox.html">Mailbox</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="logo-element">*/
/*                             IN+*/
/*                         </div>*/
/*                     </li>*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                     <li class="active">*/
/*                         <a href="{{ path('administration_homepage') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Page principale</span></a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     {%  if is_granted('ROLE_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="gestionEntreprise.php"><i class="fa fa-cogs"></i> <span class="nav-label">Configuration</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="{{ path('langue_index') }}">Langues</a></li>*/
/*                             <li><a href="{{ path('theme_index') }}">Themes</a></li>*/
/*                             <li><a href="{{ path('topic_index') }}">Topics</a></li>*/
/*                             <li><a href="{{ path('difficulte_index') }}">Difficultés</a></li>*/
/*                             <li><a href="{{ path('nationalite_index') }}">Nationalité</a></li>*/
/*                             <li><a href="{{ path('ingredient_index') }}">Ingrédients</a></li>*/
/*                             <li><a href="{{ path('theme_index') }}">Themes</a></li>*/
/*                             <li><a href="{{ path('categorie_index') }}">Categories</a></li>*/
/*                             <li><a href="{{ path('menu_index') }}">Menu</a></li>*/
/*                             <li><a href="{{ path('subcategorie_index') }}">Sous Categories</a></li>*/
/*                             <li><a href="{{ path('specialite_index') }}">Spécialités</a></li>*/
/*                             <li><a href="{{ path('filtre_index') }}">Filtres</a></li>*/
/*                             <li><a href="{{ path('ambiance_index') }}">Ambiances</a></li>*/
/* */
/*                             <li><a href="soutraitance.php">Budgets <b style="color:yellow;">(*)</b></a></li>*/
/*                             <li>*/
/*                                 <a href="{{ path('confidentialite_index') }}"> <span class="nav-label">Confidentialités </span></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a><i class="fa fa-dashboard"></i> <span class="nav-label">Gestion</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/* */
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Etablissement</span><span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-second-level collapse">*/
/*                                     <li>*/
/*                                         <a href="{{ path('etablissement_new') }}">Ajouter un etablissement</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('etablissement_index') }}">Afficher tous</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Afficher en grid</a>*/
/*                                     </li>*/
/* */
/*                                     <li>*/
/*                                         <a href="#">Autorisation</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Sponsorisé</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Membres</span><span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-second-level collapse">*/
/*                                     <li><a href="{{ path('memberGestion') }}">Gestion</a></li>*/
/*                                     <li><a href="{{ path('memberNouveau') }}">Nouveaux Membres</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     <li>*/
/*                         <a><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Rédaction</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             {%  if is_granted('ROLE_ADMIN') %}*/
/*                             <li>*/
/*                                 <a href="#"> <span class="nav-label">Articles</span><span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-second-level collapse">*/
/*                                     <li><a href="{{ path('article_grid') }}">Ajouter nouveau</a></li>*/
/*                                     <li><a href="{{ path('article_grid') }}">Afficher tous</a></li>*/
/*                                     <li><a href="{{ path('article_index') }}">Rechercher</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-bar-chart-o"></i>Statistique Article<span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-third-level">*/
/*                                     <li><a href="{{ path('stat_redactionTotal') }}">Statistique total</a></li>*/
/*                                     <li><a href="{{ path('stat_redactionMonth') }}">Statistique Par mois</a></li>*/
/*                                     <li><a href="{{ path('stat_redactionDay') }}">Statistique par jour</a></li>*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             <li>*/
/*                                 <a href="#"> <span class="nav-label">Recette</span><span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-second-level collapse">*/
/*                                     <li><a href="{{ path('recette_new') }}">Ajouter nouveau</a></li>*/
/*                                     <li><a href="{{ path('recette_index') }}">Afficher tous</a></li>*/
/*                                     {%  if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="{{ path('signalrecette_index') }}">Signal recette</a></li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                             {%  if is_granted('ROLE_ADMIN') %}*/
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-bar-chart-o"></i>Statistique Recette<span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-third-level">*/
/*                                     <li><a href="{{ path('stat_redactionRecetteTotal') }}">Statistique total</a></li>*/
/*                                     <li><a href="{{ path('stat_redactionRecetteMonth') }}">Statistique Par mois</a></li>*/
/* */
/*                                     <li><a href="{{ path('stat_redactionRecetteDay') }}">Statistique par jour</a></li>*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </li>*/
/*                     {%  if is_granted('ROLE_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistique</span><span class="fa arrow"></span></a>*/
/* */
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li>*/
/*                                 <a href="gestionEntreprise.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Top Rank </span><span class="fa arrow"></span></a>*/
/*                                 <ul class="nav nav-second-level collapse">*/
/*                                     <li>*/
/*                                         <a href="#">Article <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Recettes<span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Restaurant <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Sponsorisés</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Plus visités</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Mieux notés</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">alon de thé <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Patisseries <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Bars <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Glaciers <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Chocolatiers <span class="fa arrow"></span></a>*/
/*                                         <ul class="nav nav-third-level">*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">Third Level Item</a>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/* */
/*                             <li><a href="../teams_board.html">Top Gourmands</a></li>*/
/*                             <li><a href="../teams_board.html">Top Ecrivains</a></li>*/
/*                             <li><a href="../teams_board.html">Top Photographes</a></li>*/
/*                             <li><a href="{{ path('stat_navigateur') }}">Navigateur</a></li>*/
/*                             <li><a href="{{ path('stat_systeme') }}">Systeme d'exploitation</a></li>*/
/*                             <li><a href="{{ path('stat_pays') }}">Pays</a></li>*/
/*                             <li><a href="{{ path('stat_ville') }}">Régions</a></li>*/
/*                             <li><a href="../soutraitance.php">Genre</a></li>*/
/*                             <li><a href="../soutraitance.php">Age</a></li>*/
/*                             <li><a href="../soutraitance.php">Visite</a></li>*/
/*                             <li><a href="../soutraitance.php">Notes</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href=""><i class="fa fa-eye"></i> <span class="nav-label">Surveillance</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="{{ path('surveillance_index') }}"><i class="fa fa-bar-chart-o"></i>Tous</a></li>*/
/*                             <li><a href="{{ path('surveillance_mediaArticle') }}"><i class="fa fa-bar-chart-o"></i>Media</a></li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Déclaration</span></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="../mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Litige </span></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href=""><i class="fa fa-money"></i> <span class="nav-label">Marketing</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li>*/
/*                                 <a href="../mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Sponsorisation </span></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="../mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Banniere publicitaire </span></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </ul>*/
/* */
/*             </div>*/
/*         </nav>*/
/*         <div id="page-wrapper" class="gray-bg">*/
/* */
/*             <div class="row border-bottom">*/
/* */
/*                 <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">*/
/*                     <div class="navbar-header">*/
/*                         <a class="navbar-minimalize minimalize-styl-2 btn btn-warning " href="#"><i class="fa fa-bars"></i> </a>*/
/* */
/*                     </div>*/
/*                     <ul class="nav navbar-top-links navbar-right">*/
/*                         <li>*/
/*                             <span class="m-r-sm text-muted welcome-message">bienvenu <b>{{ app.user.username }}</b> chez TroisFourchettes</span>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown">*/
/*                             {% if is_granted('ROLE_ADMIN') %}*/
/*                             <a class="count-info" href="{{ path('messagerie_index') }}">*/
/*                                 <i class="fa fa-envelope"></i>  <span class="label label-warning" >0</span>*/
/*                             </a>*/
/*                             {% endif %}*/
/* */
/*                             <ul class="dropdown-menu dropdown-messages">*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="../profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="../img/a7.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right">46h ago</small>*/
/*                                             <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>*/
/*                                             <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="../profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="../img/a4.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right text-navy">5h ago</small>*/
/*                                             <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>*/
/*                                             <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="../profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="../img/profile.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right">23h ago</small>*/
/*                                             <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>*/
/*                                             <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="text-center link-block">*/
/*                                         <a href="../mailbox.html">*/
/*                                             <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a class="count-info"  href="#">*/
/*                                 <i class="fa fa-bell"></i>  <span class="label label-danger" id="nbrnotification">0</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-alerts">*/
/*                                 <li>*/
/*                                     <a href="mailbox.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-envelope fa-fw"></i> You have 16 messages*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="profile.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                                             <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="grid_options.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="text-center link-block">*/
/*                                         <a href="notifications.html">*/
/*                                             <strong>See All Alerts</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a class="count-info" href="#">*/
/*                                 <i class="fa fa-comments-o"></i>  <span class="label label-success" id="nbrnotificationCommentaire">0</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-alerts">*/
/*                                 <li>*/
/*                                     <a href="mailbox.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-envelope fa-fw"></i> You have 16 messages*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="profile.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                                             <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="grid_options.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="text-center link-block">*/
/*                                         <a href="notifications.html">*/
/*                                             <strong>See All Alerts</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/* */
/*                         <li>*/
/*                             <a href="{{ path('fos_user_security_logout') }}">*/
/*                                 <i class="fa fa-sign-out"></i> Se Déconnecter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="right-sidebar-toggle">*/
/*                                 <i class="fa fa-tasks"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </nav>*/
/* */
/* */
/*             </div>*/
/* */
/*         {% block body %}{% endblock %}*/
/*             <div class="footer">*/
/*                 <div class="pull-right">*/
/*                     10GB of <strong>250GB</strong> Free.*/
/*                 </div>*/
/*                 <div>*/
/*                     <strong>Copyright</strong> Example Company &copy; 2014-2015*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {{ render(controller('AdministrationBundle:Include:sideBar')) }}*/
/*         </div>*/
/*         <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>*/
/*         <script src='{{ asset('js/playsound.js') }}'></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/chosen/chosen.jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/clockpicker/clockpicker.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/validate/jquery.validate.min.js') }}"></script>*/
/* */
/* */
/*         <script>*/
/*             /*$(document).ready(function(){*/
/* */
/*                 $("#form").validate({*/
/*                     rules: {*/
/*                         nomRecette: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         },*/
/*                         preparationRecette: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         },*/
/*                         descriptionRecette: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         },*/
/*                         cuissonRecette: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         },*/
/*                         ingredient: {*/
/*                             required: true,*/
/*                             remote: true*/
/*                         },*/
/*                         difficulte: {*/
/*                             required: true,*/
/*                             selectcheck: true,*/
/*                             remote: true*/
/*                         },*/
/*                         nationalite: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         },*/
/*                         theme: {*/
/*                             required: true,*/
/*                             minlength: 3*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*//* */
/*         </script>*/
/*         <script>*/
/*             $('.clockpicker').clockpicker();*/
/*         </script>*/
/*         <script>*/
/*             $(document).ready(function(){*/
/*                 $('.i-checks').iCheck({*/
/*                     checkboxClass: 'icheckbox_square-green',*/
/*                     radioClass: 'iradio_square-green',*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         <script>*/
/*             var config = {*/
/*                 '.chosen-select'           : {},*/
/*                 '.chosen-select-deselect'  : {allow_single_deselect:true},*/
/*                 '.chosen-select-no-single' : {disable_search_threshold:10},*/
/*                 '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},*/
/*                 '.chosen-select-width'     : {width:"95%"}*/
/*             }*/
/*             for (var selector in config) {*/
/*                 $(selector).chosen(config[selector]);*/
/*             }*/
/* */
/*         </script>*/
/* */
/*         <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>*/
/* */
/*         <!-- Peity -->*/
/*         <script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>*/
/*         <script src="{{ asset('js/demo/peity-demo.js') }}"></script>*/
/* */
/*         <!-- Custom and plugin javascript -->*/
/*         <script src="{{ asset('js/inspinia.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>*/
/* */
/*         <!-- jQuery UI -->*/
/*         <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>*/
/* */
/*         <!-- Jvectormap -->*/
/*         <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/* */
/*         <!-- EayPIE -->*/
/*         <script src="{{ asset('js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>*/
/* */
/*         <!-- Sparkline -->*/
/*         <script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/* */
/*         <!-- Sparkline demo data  -->*/
/*         <script src="{{ asset('js/demo/sparkline-demo.js') }}"></script>*/
/* */
/*         <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>*/
/* */
/*         <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>*/
/*         <script>*/
/*             CKEDITOR.on('instanceReady', function(evt) {*/
/*                 $(evt.editor.container.$).find('iframe').contents()*/
/*                         .bind({*/
/*                             copy : function(){*/
/*                                 console.log('copie');*/
/*                             },*/
/*                             paste : function(){*/
/*                                 console.log('paste');*/
/*                             },*/
/*                             cut : function(){*/
/*                                 console.log('cut');*/
/*                             }*/
/*                         });*/
/*             });*/
/*         </script>*/
/*     <script>*/
/*         */
/*     </script>*/
/*         <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*         <script src="{{ asset('js/notification.js') }}"></script>*/
/*         <script src="{{ asset('js/notificationCommentaire.js') }}"></script>*/
/*         <script src="{{ asset('js/plugin.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
