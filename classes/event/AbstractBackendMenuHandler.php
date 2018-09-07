<?php namespace Lovata\Toolbox\Classes\Event;

/**
 * Class AbstractBackendMenuHandler
 * @package Lovata\Toolbox\Classes\Event
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
abstract class AbstractBackendMenuHandler
{
    /**
     * Add listeners
     * @param \Illuminate\Events\Dispatcher $obEvent
     */
    public function subscribe($obEvent)
    {
        $obEvent->listen('backend.menu.extendItems', function($obManager) {
            $this->addMenuItems($obManager);
        });
    }

    /**
     * Add menu items
     * @param \Backend\Classes\NavigationManager $obManager
     */
    abstract protected function addMenuItems($obManager);
}
