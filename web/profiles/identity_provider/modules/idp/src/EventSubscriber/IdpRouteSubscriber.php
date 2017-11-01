<?php

namespace Drupal\idp\EventSubscriber;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Identity provider route subscriber.
 */
class IdpRouteSubscriber extends RouteSubscriberBase {

  /**
   * The routes.
   *
   * @var array
   */
  protected $routes = [
    '/user/{user}/edit',
  ];

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    foreach ($collection->all() as $route) {

      // Change admin routes to normal ones.
      if (in_array($route->getPath(), $this->routes)) {
        $route->setOption('_admin_route', FALSE);
      }

    }
  }

}
