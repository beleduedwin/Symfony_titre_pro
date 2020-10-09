<?php

/* @Portfolio/Default/articles_list.html.twig */
class __TwigTemplate_6209ba44ab44538f0bf57b07ba93c8ed281470d879d1225a488fcc4ca39538f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Portfolio/Default/bases/base_admin.html.twig", "@Portfolio/Default/articles_list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Portfolio/Default/bases/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/articles_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/articles_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid \">
        <div class=\"row\">
            <div class=\"col-md-9 col-sm-12 data\">
                <h1>Repertoire d'articles</h1>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "                    <div class=\"card\">
                        <div class=\"card-image\">
                            <div class=\"articles_image\">
                                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
                            </div>
                            <span class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</span>
                        </div>

                        <div class=\"box\">
                            <button class=\"btn btn-primary\">Voir l'article en entier</button>
                            <div class=\"bg-info\">
                                <div class=\"card-content\">
                                    <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-2x fa-trash\" aria-hidden=\"true\">Supprimer</i></a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portfolio_updateArticle", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "><i class=\"fas fa-wrench\">Modifier</i></a>
                    <div class=\"ligne\">

                    </div>
                    <hr size=\"1\" color=\"#5e5e5e\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 34
        echo "
                <div class=\"navigation text-center\">
                    ";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["articles"] ?? $this->getContext($context, "articles")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/articles_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  106 => 34,  103 => 32,  91 => 26,  87 => 25,  79 => 20,  69 => 13,  64 => 11,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Portfolio/Default/bases/base_admin.html.twig' %}
{% block body %}
    <div class=\"container-fluid \">
        <div class=\"row\">
            <div class=\"col-md-9 col-sm-12 data\">
                <h1>Repertoire d'articles</h1>
                {% for article in articles %}
                    <div class=\"card\">
                        <div class=\"card-image\">
                            <div class=\"articles_image\">
                                <img src=\"{{ article.image }}\" alt=\"\" class=\"img-responsive\">
                            </div>
                            <span class=\"card-title\">{{ article.title }}</span>
                        </div>

                        <div class=\"box\">
                            <button class=\"btn btn-primary\">Voir l'article en entier</button>
                            <div class=\"bg-info\">
                                <div class=\"card-content\">
                                    <p>{{ article.content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ path('remove_article', {'id': article.id}) }}\"><i class=\"fa fa-2x fa-trash\" aria-hidden=\"true\">Supprimer</i></a>
                    <a href=\"{{ path('portfolio_updateArticle', {'id': article.id}) }}><i class=\"fas fa-wrench\">Modifier</i></a>
                    <div class=\"ligne\">

                    </div>
                    <hr size=\"1\" color=\"#5e5e5e\">
                {% endfor %}

{##.................... display navigation ...........................#}

                <div class=\"navigation text-center\">
                    {{ knp_pagination_render(articles) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@Portfolio/Default/articles_list.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/articles_list.html.twig");
    }
}
