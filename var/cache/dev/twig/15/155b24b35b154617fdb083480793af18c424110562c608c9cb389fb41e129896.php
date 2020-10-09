<?php

/* @Portfolio/Default/formulaires/contact_form.html.twig */
class __TwigTemplate_dc59b003ada3e390def3837fc5e62379c9b209ec5feb0f9348a7e6c10d2243d5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/formulaires/contact_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/formulaires/contact_form.html.twig"));

        // line 1
        echo "
        <div class=\"col-md-6 \">

            <div class=\"contact_form\">
                ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group\">
                    <p class=\"\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Votre nom"));
        echo "</p>
                    <p>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "</p>
                    <p>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "</p>
                </div>

                <div class=\"form-group\">
                    <p>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Votre adresse email"));
        echo "</p>
                    <p>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</p>
                    <p>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "</p>
                </div>

                <div class=\"form-group\">
                    <p>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Votre téléphone"));
        echo "</p>
                    <p>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "</p>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <p>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'label', array("label" => "Votre message"));
        echo "</p>
                    <p>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "</p>
                    <p>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "</p>
                </div>

                <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\" />
                </div>

                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>

            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            ";
        // line 42
        echo "        </div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/formulaires/contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  120 => 41,  111 => 38,  108 => 37,  104 => 36,  98 => 33,  88 => 26,  84 => 25,  80 => 24,  74 => 21,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  25 => 1,);
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
        <div class=\"col-md-6 \">

            <div class=\"contact_form\">
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <p class=\"\">{{ form_label(form.name, 'Votre nom') }}</p>
                    <p>{{ form_errors(form.name) }}</p>
                    <p>{{ form_widget(form.name,{'label_attr':{'class':'form-control'} }) }}</p>
                </div>

                <div class=\"form-group\">
                    <p>{{ form_label(form.email, 'Votre adresse email') }}</p>
                    <p>{{ form_errors(form.email) }}</p>
                    <p>{{ form_widget(form.email,{'label_attr':{'class':'form-control'} }) }}</p>
                </div>

                <div class=\"form-group\">
                    <p>{{ form_label(form.telephone, 'Votre téléphone') }}</p>
                    <p>{{ form_errors(form.telephone) }}</p>
                    {{ form_widget(form.telephone,{'label_attr':{'class':'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <p>{{ form_label(form.message, 'Votre message') }}</p>
                    <p>{{ form_errors(form.message) }}</p>
                    <p>{{ form_widget(form.message,{'label_attr':{'class':'form-control'} }) }}</p>
                </div>

                <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\" />
                </div>

                {{ form_end(form) }}
            </div>

            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            {#{% include '@Portfolio/Default/message.html.twig' %}#}
        </div>


", "@Portfolio/Default/formulaires/contact_form.html.twig", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/formulaires/contact_form.html.twig");
    }
}
