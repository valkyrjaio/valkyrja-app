<?php

namespace App\Controllers;

use Valkyrja\Contracts\Application;
use Valkyrja\Contracts\Http\Response;
use Valkyrja\Contracts\View\View;
use Valkyrja\Routing\Route;

/**
 * Class HomeController
 *
 * @package App\Controllers
 *
 * @Route(path = '/', name = 'home')
 * @Route(path = '/test', name = 'home.test')
 */
class HomeController extends Controller
{
    /**
     * The applications.
     *
     * @var \Valkyrja\Contracts\Application
     */
    protected $app;

    /**
     * Property routing example.
     *
     * @var string
     *
     * @Route(path = '/property', name = 'property')
     */
    public $propertyRouting = 'Property Routing Example';

    /**
     * HomeController constructor.
     *
     * @param \Valkyrja\Contracts\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Welcome action.
     * - Example of a view being returned
     *
     * @return \Valkyrja\Contracts\View\View
     *
     * @Route(path = '/', name = 'welcome')
     */
    public function welcome(): View
    {
        return view('index')->withoutLayout();
    }

    /**
     * Application version action.
     * - Example of string being returned
     *
     * @return string
     *
     * @Route(path = '/version', name = 'version')
     */
    public function version(): string
    {
        return $this->app->version();
    }

    /**
     * Homepage action.
     * - Example with multiple routes to the same action
     *
     * @param Application $application The application (Dependency injection example)
     * @param int         $page        The current page
     *
     * @return \Valkyrja\Contracts\Http\Response
     *
     * @Route(path = '/home', name = 'home')
     * @Route(path = '/home/{id:num}', name = 'homePaged', dynamic = true)
     */
    public function home(Application $application, int $page = 1): Response
    {
        return response(view('home/home',
                [
                    'app'  => $application,
                    'page' => $page,
                ])
        );
    }
}
