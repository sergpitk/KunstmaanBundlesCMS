<?php

namespace Kunstmaan\AdminBundle\Helper\Toolbar;

/**
 * Implement this interface for a new data collector
 */
interface DataCollectionInterface
{
    public function setTemplate($template);

    public function getTemplate();

    public function getAccessRoles();

    public function isEnabled();
}
