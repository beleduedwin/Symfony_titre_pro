<?php

/* @Portfolio/Default/show_articles.html.twig */
class __TwigTemplate_1cb0daa66953e101c495a317b47b17b8ac81211f1a8711fe617b828fb39809dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Portfolio/Default/bases/base.html.twig", "@Portfolio/Default/show_articles.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/show_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/show_articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "
        <div class=\"container show_article_bloc\">
            <div class=\"row\">
                <div class=\"col-md-8 col-sm-12 \">
                    <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h4>
                    <img class=\"show_img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"content_articles\">
                        <!--......................bloc autor ...................... -->
                        <div class=\"top_article\">
                            <div class=\"img_autor\">
                                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/calendrier.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "publishedAt", array()), "d/m/y"), "html", null, true);
        echo "</p>
                            <p>Par Edwin beledu</p>
                        </div>

                        <p class=\"show_article_content\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</p>
                    </div>
";
        // line 25
        echo "                    <div class=\"count_comments\">
                        ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comment", array())) == 1)) {
            echo " <i class=\"far fa fa-comments\"></i>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comment", array())), "html", null, true);
            echo " commentaire ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comment", array())) > 1)) {
            echo "<i class=\"far fa fa-comments\"></i> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comment", array())), "html", null, true);
            echo " commentaires";
        }
        // line 27
        echo "                    </div>

";
        // line 30
        echo "
                    <div class=\"box\">
                        <p>
                            <button class=\"btn btn-primary\">Voir les commentaires</button>
                        </p>
                        <div class=\"bg-info\">
                            ";
        // line 36
        $this->loadTemplate("@Portfolio/Default/view_comments.html.twig", "@Portfolio/Default/show_articles.html.twig", 36)->display($context);
        // line 37
        echo "                        </div>

                    </div>


                    <hr size=\"1\" color=\"#5e5e5e\">
";
        // line 44
        echo "

                    <h5>Partagez votre réaction</h5>

                    ";
        // line 48
        $this->loadTemplate("@Portfolio/Default/formulaires/form_comments.html.twig", "@Portfolio/Default/show_articles.html.twig", 48)->display($context);
        // line 49
        echo "
                </div>

";
        // line 53
        echo "
                <div class=\"col-md-4 col-xs-12 recent_article_bloc\">
                    <h4>Dernier articles publiés</h4>

                    ";
        // line 57
        $this->loadTemplate("@Portfolio/Default/side_bar.html.twig", "@Portfolio/Default/show_articles.html.twig", 57)->display($context);
        // line 58
        echo "                    <a class=\"link_articles\"  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portfolio_all_articles");
        echo "\"><p>Voir tous les articles</p></a>
                </div>
            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/show_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  141 => 57,  135 => 53,  130 => 49,  128 => 48,  122 => 44,  114 => 37,  112 => 36,  104 => 30,  100 => 27,  90 => 26,  87 => 25,  82 => 22,  75 => 18,  70 => 16,  62 => 11,  58 => 10,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Portfolio/Default/bases/base.html.twig' %}

{% block body %}

{#............................................ Show one article.......................................................#}

        <div class=\"container show_article_bloc\">
            <div class=\"row\">
                <div class=\"col-md-8 col-sm-12 \">
                    <h4>{{ article.title }}</h4>
                    <img class=\"show_img\" src=\"{{ article.image }}\" alt=\"\">
                    <div class=\"content_articles\">
                        <!--......................bloc autor ...................... -->
                        <div class=\"top_article\">
                            <div class=\"img_autor\">
                                <img src=\"{{ asset('assets/images/calendrier.svg') }}\" alt=\"\">
                            </div>
                            <p>{{ article.publishedAt|date('d/m/y') }}</p>
                            <p>Par Edwin beledu</p>
                        </div>

                        <p class=\"show_article_content\">{{ article.content }}</p>
                    </div>
{#.............................................. Count Comments ............................................................#}
                    <div class=\"count_comments\">
                        {% if article.comment|length == 1 %} <i class=\"far fa fa-comments\"></i>{{ article.comment|length }} commentaire {% elseif article.comment|length > 1 %}<i class=\"far fa fa-comments\"></i> {{ article.comment|length }} commentaires{% endif%}
                    </div>

{#.....................Include comments....................#}

                    <div class=\"box\">
                        <p>
                            <button class=\"btn btn-primary\">Voir les commentaires</button>
                        </p>
                        <div class=\"bg-info\">
                            {% include '@Portfolio/Default/view_comments.html.twig' %}
                        </div>

                    </div>


                    <hr size=\"1\" color=\"#5e5e5e\">
{#.............................................. Include of Comments form ............................................................#}


                    <h5>Partagez votre réaction</h5>

                    {% include '@Portfolio/Default/formulaires/form_comments.html.twig' %}

                </div>

{#................................................. Include Side bar..................................................#}

                <div class=\"col-md-4 col-xs-12 recent_article_bloc\">
                    <h4>Dernier articles publiés</h4>

                    {% include '@Portfolio/Default/side_bar.html.twig' %}
                    <a class=\"link_articles\"  href=\"{{ path('portfolio_all_articles') }}\"><p>Voir tous les articles</p></a>
                </div>
            </div>
        </div>

{% endblock %}














", "@Portfolio/Default/show_articles.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/show_articles.html.twig");
    }
}
