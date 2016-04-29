<?php namespace Anomaly\NavigationModule\Link\Event;

use Anomaly\NavigationModule\Link\LinkCollection;
use Anomaly\NavigationModule\Menu\Contract\MenuInterface;

/**
 * Class LinksAreLoading
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Anomaly\Streams\Platform\Ui\Table\Event
 */
class LinksAreLoading
{
    /**
     * The menu that is loading
     *
     * @var MenuInterface
     */
    protected $menu;

    /**
     * The links that are loading
     * 
     * @var LinkCollection
     */
    protected $links;

    /**
     * Create a new MenuIsLoading instance.
     *
     * @param MenuInterface $menu
     */
    public function __construct(MenuInterface $menu, LinkCollection $links)
    {
        $this->menu  = $menu;
        $this->links = $links;
    }

    /**
     * Get the menu.
     *
     * @return MenuInterface
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Get the links.
     * 
     * @return LinkCollection
     */
    public function getLinks()
    {
        return $this->links;
    }
}
