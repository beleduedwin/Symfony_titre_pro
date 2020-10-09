<?php

/* @Portfolio/Default/all_articles.html.twig */
class __TwigTemplate_14556c0592243dc0150b2177b176f9c5166e166a1dd16341b256f31fad9b9ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Portfolio/Default/bases/base.html.twig", "@Portfolio/Default/all_articles.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/all_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/all_articles.html.twig"));

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
        echo "    <div class=\"all_article_bloc\">
        <div class=\"container  all_article\">
            <h3>Tous les articles publiés</h3>
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "                        <div class=\"articles_bloc\">
                            <div class=\"articles_image\">
                                <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\" alt=\"image de l'article\" class=\"img-responsive\">
                            </div>
                            <div class=\"content_articles\">
                                <div class=\"top_article\">
                                    <div class=\"img_autor\">
                                        <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/calendrier.svg"), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
            echo "</p>
                                    <a href=\"https://github.com/beleduedwin\"><p>Par Edwin beledu</p></a>
                                </div>
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portfolio_show_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"\">
                                    <h4>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
                                </a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </div>
            </div>
        </div>

        ";
        // line 33
        echo "
        <div class=\"navigation text-center\">
            ";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["articles"] ?? $this->getContext($context, "articles")));
        echo "
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/all_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  104 => 33,  98 => 28,  87 => 23,  83 => 22,  77 => 19,  72 => 17,  64 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"all_article_bloc\">
        <div class=\"container  all_article\">
            <h3>Tous les articles publiés</h3>
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    {% for article in articles %}
                        <div class=\"articles_bloc\">
                            <div class=\"articles_image\">
                                <img src=\"{{ article.image }}\" alt=\"image de l'article\" class=\"img-responsive\">
                            </div>
                            <div class=\"content_articles\">
                                <div class=\"top_article\">
                                    <div class=\"img_autor\">
                                        <img src=\"{{ asset('assets/images/calendrier.svg') }}\" alt=\"\">
                                    </div>
                                    <p>{{ \"now\"|date(\"m/d/Y\") }}</p>
                                    <a href=\"https://github.com/beleduedwin\"><p>Par Edwin beledu</p></a>
                                </div>
                                <a href=\"{{ path('portfolio_show_article', {'id': article.id}) }}\" class=\"\">
                                    <h4>{{ article.title }}</h4>
                                </a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>

        {#............... paginator ...........#}

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(articles) }}
        </div>
    </div>


{% endblock %}
















", "@Portfolio/Default/all_articles.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/all_articles.html.twig");
    }
}
