<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\Backend\\AdminController::adminAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/cash')) {
                // cash_index
                if (rtrim($pathinfo, '/') === '/admin/cash') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cash_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cash_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::indexAction',  '_route' => 'cash_index',);
                }
                not_cash_index:

                // cash_new
                if (0 === strpos($pathinfo, '/admin/cash/new') && preg_match('#^/admin/cash/new/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cash_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cash_new')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::newAction',));
                }
                not_cash_new:

                // cash_show
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cash_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cash_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::showAction',));
                }
                not_cash_show:

                // product_quantity
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)/productquantity$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_product_quantity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_quantity')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::productQuantityAction',));
                }
                not_product_quantity:

                // product_add
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)/productadd$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_product_add;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_add')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::productAddAction',));
                }
                not_product_add:

                // product_remove
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)/productremove/(?P<product>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_product_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_remove')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::productRemoveAction',));
                }
                not_product_remove:

                // cash_print
                if (0 === strpos($pathinfo, '/admin/cash/print') && preg_match('#^/admin/cash/print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cash_print;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cash_print')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::printAction',));
                }
                not_cash_print:

                // cash_edit
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cash_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cash_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::editAction',));
                }
                not_cash_edit:

                // cash_delete
                if (preg_match('#^/admin/cash/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cash_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cash_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\CashController::deleteAction',));
                }
                not_cash_delete:

            }

            if (0 === strpos($pathinfo, '/admin/egress')) {
                // egress_index
                if (rtrim($pathinfo, '/') === '/admin/egress') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_egress_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'egress_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\EgressController::indexAction',  '_route' => 'egress_index',);
                }
                not_egress_index:

                // egress_new
                if ($pathinfo === '/admin/egress/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_egress_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\EgressController::newAction',  '_route' => 'egress_new',);
                }
                not_egress_new:

                // egress_show
                if (preg_match('#^/admin/egress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_egress_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'egress_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\EgressController::showAction',));
                }
                not_egress_show:

                // egress_edit
                if (preg_match('#^/admin/egress/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_egress_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'egress_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\EgressController::editAction',));
                }
                not_egress_edit:

                // egress_delete
                if (preg_match('#^/admin/egress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_egress_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'egress_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\EgressController::deleteAction',));
                }
                not_egress_delete:

            }

            if (0 === strpos($pathinfo, '/admin/family')) {
                // family_index
                if (rtrim($pathinfo, '/') === '/admin/family') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_family_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'family_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\FamilyController::indexAction',  '_route' => 'family_index',);
                }
                not_family_index:

                // family_new
                if ($pathinfo === '/admin/family/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_family_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\FamilyController::newAction',  '_route' => 'family_new',);
                }
                not_family_new:

                // family_show
                if (preg_match('#^/admin/family/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_family_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'family_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\FamilyController::showAction',));
                }
                not_family_show:

                // family_edit
                if (preg_match('#^/admin/family/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_family_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'family_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\FamilyController::editAction',));
                }
                not_family_edit:

                // family_delete
                if (preg_match('#^/admin/family/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_family_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'family_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\FamilyController::deleteAction',));
                }
                not_family_delete:

            }

            if (0 === strpos($pathinfo, '/admin/general')) {
                // general_index
                if (rtrim($pathinfo, '/') === '/admin/general') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_general_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'general_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\GeneralController::indexAction',  '_route' => 'general_index',);
                }
                not_general_index:

                // general_show
                if (preg_match('#^/admin/general/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_general_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\GeneralController::showAction',));
                }
                not_general_show:

                // general_edit
                if (preg_match('#^/admin/general/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_general_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\GeneralController::editAction',));
                }
                not_general_edit:

            }

            if (0 === strpos($pathinfo, '/admin/ingress')) {
                // ingress_index
                if (rtrim($pathinfo, '/') === '/admin/ingress') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingress_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ingress_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\IngressController::indexAction',  '_route' => 'ingress_index',);
                }
                not_ingress_index:

                // ingress_new
                if ($pathinfo === '/admin/ingress/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingress_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\IngressController::newAction',  '_route' => 'ingress_new',);
                }
                not_ingress_new:

                // ingress_show
                if (preg_match('#^/admin/ingress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingress_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingress_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\IngressController::showAction',));
                }
                not_ingress_show:

                // ingress_edit
                if (preg_match('#^/admin/ingress/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingress_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingress_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\IngressController::editAction',));
                }
                not_ingress_edit:

                // ingress_delete
                if (preg_match('#^/admin/ingress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ingress_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingress_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\IngressController::deleteAction',));
                }
                not_ingress_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pro')) {
                if (0 === strpos($pathinfo, '/admin/product')) {
                    // product_index
                    if (rtrim($pathinfo, '/') === '/admin/product') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_product_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'product_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::indexAction',  '_route' => 'product_index',);
                    }
                    not_product_index:

                    // product_new
                    if ($pathinfo === '/admin/product/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_product_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::newAction',  '_route' => 'product_new',);
                    }
                    not_product_new:

                    // product_show
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_product_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::showAction',));
                    }
                    not_product_show:

                    // product_edit
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_product_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::editAction',));
                    }
                    not_product_edit:

                    // product_delete
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::deleteAction',));
                    }
                    not_product_delete:

                    // ajax_products
                    if ($pathinfo === '/admin/product/ajax_products') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ajax_products;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProductController::ajaxProductsAction',  '_route' => 'ajax_products',);
                    }
                    not_ajax_products:

                }

                if (0 === strpos($pathinfo, '/admin/provider')) {
                    // provider_index
                    if (rtrim($pathinfo, '/') === '/admin/provider') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_provider_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'provider_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProviderController::indexAction',  '_route' => 'provider_index',);
                    }
                    not_provider_index:

                    // provider_new
                    if ($pathinfo === '/admin/provider/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_provider_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProviderController::newAction',  '_route' => 'provider_new',);
                    }
                    not_provider_new:

                    // provider_show
                    if (preg_match('#^/admin/provider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_provider_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProviderController::showAction',));
                    }
                    not_provider_show:

                    // provider_edit
                    if (preg_match('#^/admin/provider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_provider_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProviderController::editAction',));
                    }
                    not_provider_edit:

                    // provider_delete
                    if (preg_match('#^/admin/provider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_provider_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ProviderController::deleteAction',));
                    }
                    not_provider_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user_index
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::showAction',));
                }
                not_user_show:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::editAction',));
                }
                not_user_edit:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::deleteAction',));
                }
                not_user_delete:

                // ajax_users
                if ($pathinfo === '/admin/user/ajax_users') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ajax_users;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UserController::ajaxUsersAction',  '_route' => 'ajax_users',);
                }
                not_ajax_users:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
