<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_admin_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::articles_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/admin_articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\FormController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_show_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::showArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/portfolio/show_article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_show_comment' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::showCommentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/portfolio/show_comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_renderArticles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::renderArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/renderArticles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::addArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/add_article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::removeArticleAction',    'id' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/portfolio/remove_article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_updateArticle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::updateArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/portfolio/updateArticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::blogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_all_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/all_articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_all_side_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getSideBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/side_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_publishedArticles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::publishedArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/publishedArticles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_contact_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\Contact_formController::simpleFormeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/contact_form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_form_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::formArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/form_articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_share_button' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PortfolioBundle\\Controller\\DefaultController::shareButtonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/share_button',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'portfolio_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
