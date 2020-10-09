<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/portfolio')) {
            if (0 === strpos($pathinfo, '/portfolio/a')) {
                if (0 === strpos($pathinfo, '/portfolio/admin')) {
                    // portfolio_admin
                    if ('/portfolio/admin' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'portfolio_admin',);
                    }

                    // portfolio_admin_articles
                    if ('/portfolio/admin_articles' === $pathinfo) {
                        return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::articles_listAction',  '_route' => 'portfolio_admin_articles',);
                    }

                }

                // add_article
                if ('/portfolio/add_article' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::addArticleAction',  '_route' => 'add_article',);
                }

                // portfolio_accueil
                if ('/portfolio/accueil' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'portfolio_accueil',);
                }

                // portfolio_articles
                if ('/portfolio/articles' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getArticlesAction',  '_route' => 'portfolio_articles',);
                }

                // portfolio_all_articles
                if ('/portfolio/all_articles' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getArticlesAction',  '_route' => 'portfolio_all_articles',);
                }

            }

            elseif (0 === strpos($pathinfo, '/portfolio/form')) {
                // portfolio_form
                if ('/portfolio/form' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\FormController::formAction',  '_route' => 'portfolio_form',);
                }

                // portfolio_form_articles
                if ('/portfolio/form_articles' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::formArticlesAction',  '_route' => 'portfolio_form_articles',);
                }

            }

            // portfolio_homepage
            if ('/portfolio/index' === $pathinfo) {
                return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portfolio_homepage',);
            }

            if (0 === strpos($pathinfo, '/portfolio/sh')) {
                // portfolio_show_article
                if (0 === strpos($pathinfo, '/portfolio/show_article') && preg_match('#^/portfolio/show_article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_show_article')), array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::showArticleAction',));
                }

                // portfolio_show_comment
                if (0 === strpos($pathinfo, '/portfolio/show_comments') && preg_match('#^/portfolio/show_comments/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_show_comment')), array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::showCommentsAction',));
                }

                // portfolio_share_button
                if ('/portfolio/share_button' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::shareButtonAction',  '_route' => 'portfolio_share_button',);
                }

            }

            // portfolio_all_side_bar
            if ('/portfolio/side_bar' === $pathinfo) {
                return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getSideBarAction',  '_route' => 'portfolio_all_side_bar',);
            }

            // portfolio_renderArticles
            if ('/portfolio/renderArticles' === $pathinfo) {
                return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::renderArticlesAction',  '_route' => 'portfolio_renderArticles',);
            }

            // remove_article
            if (0 === strpos($pathinfo, '/portfolio/remove_article') && preg_match('#^/portfolio/remove_article(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_article')), array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::removeArticleAction',  'id' => '',));
            }

            // portfolio_updateArticle
            if (0 === strpos($pathinfo, '/portfolio/updateArticle') && preg_match('#^/portfolio/updateArticle/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_updateArticle')), array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::updateArticleAction',));
            }

            if (0 === strpos($pathinfo, '/portfolio/contact')) {
                // portfolio_contact
                if ('/portfolio/contact' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::getEmailAction',  '_route' => 'portfolio_contact',);
                }

                // portfolio_contact_form
                if ('/portfolio/contact_form' === $pathinfo) {
                    return array (  '_controller' => 'PortfolioBundle\\Controller\\Contact_formController::simpleFormeAction',  '_route' => 'portfolio_contact_form',);
                }

            }

            // portfolio_blog
            if ('/portfolio/blog' === $pathinfo) {
                return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::blogAction',  '_route' => 'portfolio_blog',);
            }

            // portfolio_publishedArticles
            if ('/portfolio/publishedArticles' === $pathinfo) {
                return array (  '_controller' => 'PortfolioBundle\\Controller\\DefaultController::publishedArticlesAction',  '_route' => 'portfolio_publishedArticles',);
            }

            // portfolio_logout
            if ('/portfolio/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'portfolio_logout',);
            }

        }

        // blog_homepage
        if ('/blog/index' === $pathinfo) {
            return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
