<?php

/* @Portfolio/Default/index.html.twig */
class __TwigTemplate_79daa49d08bac7a05204e830b7e423b5d45168c6f71e1117c06a9fb04be5075f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@Portfolio/Default/bases/base.html.twig", "@Portfolio/Default/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Portfolio/Default/bases/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 9
        echo "
    <section id=\"home\" class=\"home-section\">
        <h1>Edwin Beledu</h1>
        <h2><strong>Développeuse web FullStack</strong></h2>
        <div class=\"line\">
            <hr size=\"1\" color=\"#5e5e5e\">
        </div>

        <div class=\"container-profil-img\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profil_portfolio.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"container-profil-github\">
        <button class=\"clic\"><a href=\"https://github.com/beleduedwin\">Voir mon profil Github</a></button>
        </div>

    </section>

";
        // line 27
        echo "
    <section id=\"a_propos\" class=\"a_propos_section\">
            <h3>À propos</h3>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 outils\">
                            <h5>Outils et environnements :</h5>

                            <p>Linux & Windows.</p>
                            <p>Git & Github.</p>

                            <p>Méthode Agile.</p>
                            <h5  class=\"autres_comp\">Autres compétences</h5>
                        <ul>
                            <li>Sens du relationnel, travail en équipe et relation client</li>
                            <li>Sens de l'organisation et autonomie</li>
                        </ul>
                        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pdf/cv_beledu.pdf"), "html", null, true);
        echo "\">Vous pouvez télécharger mon cv</a>
                        <p>Téléphone : 0628038700</p>
                        <p>E-mail : beleduedwin@yahoo.fr</p>
                    </div>
                    <div class=\"col-md-8 skill_bloc\">
                        <p>Bienvenue, <br>
                            Je m'appelle Edwin, je suis <strong>Développeur junior Front-End & Back-End</strong> je me passionne pour le développement front-end et back-end.
                            Mon but est d'associer design et technologie, afin de créer des sites internet attractifs ainsi que des applications web.
                            Je suis capable d'utiliser différentes technologies comme HTML5 & CSS3, JavaScript, PHP, symfony, jquery, de même que d'utiliser des CMS comme Wordpress; et Design mobile & UX.
                            Vous trouverez sur mon site mon CV ainsi que des projets réalisés durant mes études ou durant mon temps libre.</p>

";
        // line 56
        echo "
                        <div class=\"skill-bar-block\">
                            <h5>Ce que je sais faire</h5>
                            <div class=\"level\">
                                <p>Apprenti</p>
                                <p>Les bases</p>
                                <p>Correct</p>
                                <p>Bon</p>
                                <p>Expert</p>
                            </div>

                            <div class=\"level\">
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"40%\">
                                <div class=\"skillbar-title\"><span>HTML5/CSS3</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">50%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"25%\">
                                <div class=\"skillbar-title\"><span>JAVASCRIPT</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">25%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"25%\">
                                <div class=\"skillbar-title\"><span>JQUERY</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">25%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"50%\">
                                <div class=\"skillbar-title\"><span>MYSQL</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">50%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"35%\">
                                <div class=\"skillbar-title\"><span>PHP</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">35%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"35%\">
                                <div class=\"skillbar-title\"><span>SYMFONY</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">35%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

";
        // line 117
        echo "
    <section id=\"experiences\" class=\"experiences-section\">
            <h3>Mes compétences</h3>
        <div class=\"container experiences_bloc\">
            <div class=\"row\">
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1 \">
                        <div class=\"icons\">
                            <i class=\"fa fa-laptop\"></i>
                        </div>
                        <h4><strong>Web Design</strong></h4><br>
                        <p>Sites web adaptatifs ou « Responsive Web design » (RWD), consultables à travers une large gamme d’appareils (ordinateurs de bureau, smartphones, tablettes, etc.)</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-mobile\"></i>
                        </div>
                        <h4><strong>Mobile Development</strong></h4><br>
                        <p>Applications et sites responsives.
                            Mobile first & media queries.</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-cogs\"></i>
                        </div>
                        <h4><strong>Software Development</strong></h4><br>
                        <p>Création de sites Wordpress, Symphony
                            & e-commerces Prestashop.</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-signal\"></i>
                        </div>
                        <h4><strong>SEO</strong></h4><br>
                        <p>optimisation de site pour les moteurs de recherche</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
            </div>
        </div>";
        // line 172
        echo "
                <h3>Mes réalisations</h3>
                <p>Une sélection de quelques travail pratiques au cours de ma formation</p>
            <div class=\"container \">
                <div class=\"row realisations_row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Site restauranr php</p>
                        <div class=\"realisations_1\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Portfolio Symfony 3.4 /php</p>
                        <div class=\"realisations_2\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Maquette portfolio photoshop</p>
                        <div class=\"realisations_3\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                       <p>Maquette portfolio photoshop</p>
                        <div class=\"realisations_4\">
                            <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/responsive_blog_2.png"), "html", null, true);
        echo "\" alt=\"image site restaurant\" class=\"img-responsive\">
                        </div>
                    </div>
                </div>
            </div>
    </section>

";
        // line 206
        echo "
    ";
        // line 207
        $this->loadTemplate("@Portfolio/Default/blog.html.twig", "@Portfolio/Default/index.html.twig", 207)->display($context);
        // line 208
        echo "
";
        // line 210
        echo "
    ";
        // line 211
        $this->loadTemplate("@Portfolio/Default/contact.html.twig", "@Portfolio/Default/index.html.twig", 211)->display($context);
        // line 212
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 212,  272 => 211,  269 => 210,  266 => 208,  264 => 207,  261 => 206,  251 => 198,  223 => 172,  169 => 117,  107 => 56,  93 => 44,  74 => 27,  63 => 18,  52 => 9,  49 => 7,  40 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '@Portfolio/Default/bases/base.html.twig' %}

{#********************************** Block Body ************************************************************************#}

{% block body %}

{#<!--******************************************** Home section *******************************************************-->#}

    <section id=\"home\" class=\"home-section\">
        <h1>Edwin Beledu</h1>
        <h2><strong>Développeuse web FullStack</strong></h2>
        <div class=\"line\">
            <hr size=\"1\" color=\"#5e5e5e\">
        </div>

        <div class=\"container-profil-img\">
        <img src=\"{{ asset('assets/images/profil_portfolio.jpg') }}\" alt=\"\">
        </div>
        <div class=\"container-profil-github\">
        <button class=\"clic\"><a href=\"https://github.com/beleduedwin\">Voir mon profil Github</a></button>
        </div>

    </section>

{#<!--******************************************** A bout me section *******************************************************-->#}

    <section id=\"a_propos\" class=\"a_propos_section\">
            <h3>À propos</h3>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 outils\">
                            <h5>Outils et environnements :</h5>

                            <p>Linux & Windows.</p>
                            <p>Git & Github.</p>

                            <p>Méthode Agile.</p>
                            <h5  class=\"autres_comp\">Autres compétences</h5>
                        <ul>
                            <li>Sens du relationnel, travail en équipe et relation client</li>
                            <li>Sens de l'organisation et autonomie</li>
                        </ul>
                        <a href=\"{{ asset('pdf/cv_beledu.pdf') }}\">Vous pouvez télécharger mon cv</a>
                        <p>Téléphone : 0628038700</p>
                        <p>E-mail : beleduedwin@yahoo.fr</p>
                    </div>
                    <div class=\"col-md-8 skill_bloc\">
                        <p>Bienvenue, <br>
                            Je m'appelle Edwin, je suis <strong>Développeur junior Front-End & Back-End</strong> je me passionne pour le développement front-end et back-end.
                            Mon but est d'associer design et technologie, afin de créer des sites internet attractifs ainsi que des applications web.
                            Je suis capable d'utiliser différentes technologies comme HTML5 & CSS3, JavaScript, PHP, symfony, jquery, de même que d'utiliser des CMS comme Wordpress; et Design mobile & UX.
                            Vous trouverez sur mon site mon CV ainsi que des projets réalisés durant mes études ou durant mon temps libre.</p>

{#****************** Skill-bar ********************************#}

                        <div class=\"skill-bar-block\">
                            <h5>Ce que je sais faire</h5>
                            <div class=\"level\">
                                <p>Apprenti</p>
                                <p>Les bases</p>
                                <p>Correct</p>
                                <p>Bon</p>
                                <p>Expert</p>
                            </div>

                            <div class=\"level\">
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                                <div class=\"ligne_verticale\"></div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"40%\">
                                <div class=\"skillbar-title\"><span>HTML5/CSS3</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">50%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"25%\">
                                <div class=\"skillbar-title\"><span>JAVASCRIPT</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">25%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"25%\">
                                <div class=\"skillbar-title\"><span>JQUERY</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">25%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"50%\">
                                <div class=\"skillbar-title\"><span>MYSQL</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">50%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"35%\">
                                <div class=\"skillbar-title\"><span>PHP</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">35%</div>
                            </div>

                            <div class=\"skillbar clearfix\" data-percent=\"35%\">
                                <div class=\"skillbar-title\"><span>SYMFONY</span></div>
                                <div class=\"skillbar-bar\"></div>
                                <div class=\"skill-bar-percent\">35%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

{#<!--****************************************** Professionnels experiences section **************************************************** -->#}

    <section id=\"experiences\" class=\"experiences-section\">
            <h3>Mes compétences</h3>
        <div class=\"container experiences_bloc\">
            <div class=\"row\">
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1 \">
                        <div class=\"icons\">
                            <i class=\"fa fa-laptop\"></i>
                        </div>
                        <h4><strong>Web Design</strong></h4><br>
                        <p>Sites web adaptatifs ou « Responsive Web design » (RWD), consultables à travers une large gamme d’appareils (ordinateurs de bureau, smartphones, tablettes, etc.)</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-mobile\"></i>
                        </div>
                        <h4><strong>Mobile Development</strong></h4><br>
                        <p>Applications et sites responsives.
                            Mobile first & media queries.</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-cogs\"></i>
                        </div>
                        <h4><strong>Software Development</strong></h4><br>
                        <p>Création de sites Wordpress, Symphony
                            & e-commerces Prestashop.</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
                <div class=\"col-md-3 experiences\">
                    <div class=\"col1\">
                        <div class=\"icons\">
                            <i class=\"fa fa-signal\"></i>
                        </div>
                        <h4><strong>SEO</strong></h4><br>
                        <p>optimisation de site pour les moteurs de recherche</p>
                        <br>
                        <a href=\"\"><p>Voir</p></a>
                    </div>
                </div>
            </div>
        </div>

{#--****************************************** Realisations **********************************************#}

                <h3>Mes réalisations</h3>
                <p>Une sélection de quelques travail pratiques au cours de ma formation</p>
            <div class=\"container \">
                <div class=\"row realisations_row\">
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Site restauranr php</p>
                        <div class=\"realisations_1\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Portfolio Symfony 3.4 /php</p>
                        <div class=\"realisations_2\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <p>Maquette portfolio photoshop</p>
                        <div class=\"realisations_3\">

                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                       <p>Maquette portfolio photoshop</p>
                        <div class=\"realisations_4\">
                            <img src=\"{{ asset('assets/images/responsive_blog_2.png') }}\" alt=\"image site restaurant\" class=\"img-responsive\">
                        </div>
                    </div>
                </div>
            </div>
    </section>

{#<!--************************************************* Blog section ********************************************************** -->#}

    {% include '@Portfolio/Default/blog.html.twig' %}

{#<!--******************************************* Contact section ************************************************************ -->#}

    {% include '@Portfolio/Default/contact.html.twig' %}


{% endblock %}





", "@Portfolio/Default/index.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/index.html.twig");
    }
}
