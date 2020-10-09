<?php

/* @Portfolio/Default/blog.html.twig */
class __TwigTemplate_790a29e5d4817d8f911ffea25ef7d97619e9503873d3a340ca4f62879007968d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/blog.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "




";
        
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
        echo "<section id=\"blog\" class=\"blog-section blog\">
    <h3> Blog veille sur le web</h3>
    <h5>Découvrez toutes les nouveautés, <br>
        les actualités, et les tutoriels.</h5>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12 col-xs-12\">

                ";
        // line 13
        echo "
                ";
        // line 14
        $this->loadTemplate("@Portfolio/Default/published_articles.twig", "@Portfolio/Default/blog.html.twig", 14)->display($context);
        // line 15
        echo "
            </div>

            <div class=\"col-md-4 side \">

            ";
        // line 21
        echo "
                <a class=\"twitter-timeline twitter l\" data-dnt=\"true\" href=\"https://twitter.com/mythicalpizza\" data-widget-id=\"343053082919333888\">Tweets by @mythicalpizza</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

            ";
        // line 26
        echo "            </div>
            <div class=\"col-md-8 col-sm-12\">
                <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portfolio_all_articles");
        echo "\"><p>Voir tous les articles</p></a>
            </div>
        </div>

    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  84 => 26,  78 => 21,  71 => 15,  69 => 14,  66 => 13,  55 => 3,  46 => 2,  31 => 35,  29 => 2,  26 => 1,);
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
{% block body %}
<section id=\"blog\" class=\"blog-section blog\">
    <h3> Blog veille sur le web</h3>
    <h5>Découvrez toutes les nouveautés, <br>
        les actualités, et les tutoriels.</h5>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12 col-xs-12\">

                {#....................... Include of five last articles ...............#}

                {% include '@Portfolio/Default/published_articles.twig' %}

            </div>

            <div class=\"col-md-4 side \">

            {#....................... Include side bar ...............#}

                <a class=\"twitter-timeline twitter l\" data-dnt=\"true\" href=\"https://twitter.com/mythicalpizza\" data-widget-id=\"343053082919333888\">Tweets by @mythicalpizza</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

            {#</div>#}
            </div>
            <div class=\"col-md-8 col-sm-12\">
                <a href=\"{{ path('portfolio_all_articles') }}\"><p>Voir tous les articles</p></a>
            </div>
        </div>

    </div>
</section>
{% endblock %}





", "@Portfolio/Default/blog.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/blog.html.twig");
    }
}
