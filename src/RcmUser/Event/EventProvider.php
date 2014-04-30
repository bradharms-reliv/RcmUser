<?php
/**
 * EventProvider.php
 *
 * EventProvider
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Event
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace RcmUser\Event;

use Traversable;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;

/**
 * EventProvider
 *
 * EventProvider
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Event
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright Copyright (c) 2013, ZF-Commons Contributors
 * @license   License.txt
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
abstract class EventProvider implements EventManagerAwareInterface
{
    /**
     * @var EventManagerInterface
     */
    protected $events;

    /**
     * setEventManager: Set the event manager instance used by this context
     *
     * @param EventManagerInterface $events events
     *
     * @return $this|void
     */
    public function setEventManager(EventManagerInterface $events)
    {
        $identifiers = array(__CLASS__, get_called_class());

        $events->setIdentifiers($identifiers);
        $this->events = $events;

        return $this;
    }

    /**
     * getEventManager: Lazy-loads an EventManager instance if none registered.
     *
     * @return EventManagerInterface
     */
    public function getEventManager()
    {
        if (!$this->events instanceof EventManagerInterface) {
            $this->setEventManager(new EventManager());
        }

        return $this->events;
    }
}