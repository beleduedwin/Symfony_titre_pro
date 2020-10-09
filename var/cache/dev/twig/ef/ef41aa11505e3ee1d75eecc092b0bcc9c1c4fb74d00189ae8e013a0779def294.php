<?php

/* @Portfolio/Default/Read_me.md */
class __TwigTemplate_2e57025c9f5b4f697dd0ec99208f00137352e69bf94027524a834db017a9ff2b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/Read_me.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Portfolio/Default/Read_me.md"));

        // line 1
        echo "#Section Portfolio
#Section A propos
#Section Compétences
#Section Blog
\tcontains the following part:

- Included the last five articles
    * Methods used : 
    1. pushedArticlesAction :
    in this method from doctrine, we get articles Repository to get the findFivelast method
    
    2. findFivelast :
    From this we go to createQueryBuilder to find the last articles and setMaxResults to 4 orderBy id DESC
    
- A href to all articles view

#Section Contact
\tcontains the following part :

- A include of contact form
- An iframe





Planning our application

questions

1. What are we building?
A Blog where we can publish, share examples of our work, and have people contact us

2. Who are we building this for?
we are building it for ourselves, but also for the community. 
Sharing what we are learning by blogging is a great way to learn for ourselves, but we teach others in the process
and Show potiential employers that we know what we are doing.

3. We features do we want to have?

#User stories

As a blank, I want to be able to blank, so that blank.

- As a user, I want to to be able to create post so that i can share what i am leanig on my blog.
- As a user, i want to be able to edit and destroy posts, so that i can manage my blog
- As a user, i want to show the visitor and potenials employers examples of my work, or stuff I've built.
- As a user, I i want to be able to have visitors contact me thtough a form on my site
_ As a user, I want vititors to leave comments on my post


#modeling our data
- articles
- comments
- users
- realisations

#think of the pages we need in our app

- home page
- blog
- show article
-réalisation
- show realisation
- contact
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Portfolio/Default/Read_me.md";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("#Section Portfolio
#Section A propos
#Section Compétences
#Section Blog
\tcontains the following part:

- Included the last five articles
    * Methods used : 
    1. pushedArticlesAction :
    in this method from doctrine, we get articles Repository to get the findFivelast method
    
    2. findFivelast :
    From this we go to createQueryBuilder to find the last articles and setMaxResults to 4 orderBy id DESC
    
- A href to all articles view

#Section Contact
\tcontains the following part :

- A include of contact form
- An iframe





Planning our application

questions

1. What are we building?
A Blog where we can publish, share examples of our work, and have people contact us

2. Who are we building this for?
we are building it for ourselves, but also for the community. 
Sharing what we are learning by blogging is a great way to learn for ourselves, but we teach others in the process
and Show potiential employers that we know what we are doing.

3. We features do we want to have?

#User stories

As a blank, I want to be able to blank, so that blank.

- As a user, I want to to be able to create post so that i can share what i am leanig on my blog.
- As a user, i want to be able to edit and destroy posts, so that i can manage my blog
- As a user, i want to show the visitor and potenials employers examples of my work, or stuff I've built.
- As a user, I i want to be able to have visitors contact me thtough a form on my site
_ As a user, I want vititors to leave comments on my post


#modeling our data
- articles
- comments
- users
- realisations

#think of the pages we need in our app

- home page
- blog
- show article
-réalisation
- show realisation
- contact
", "@Portfolio/Default/Read_me.md", "/Applications/MAMP/htdocs/symfony_portfolio/src/PortfolioBundle/Resources/views/Default/Read_me.md");
    }
}
