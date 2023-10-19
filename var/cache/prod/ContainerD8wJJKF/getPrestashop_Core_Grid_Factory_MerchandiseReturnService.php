<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.merchandise_return' shared service.

return $this->services['prestashop.core.grid.factory.merchandise_return'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.merchandise_return'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_MerchandiseReturnService.php')), ($this->services['prestashop.core.grid.data_provider.merchandise_return'] ?? $this->load('getPrestashop_Core_Grid_DataProvider_MerchandiseReturnService.php')), ($this->services['prestashop.core.grid.filter.merchandise_return_form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_MerchandiseReturnFormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));