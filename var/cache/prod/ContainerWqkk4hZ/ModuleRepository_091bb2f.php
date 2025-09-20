<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3f23f = null;
    private $initializer919e4 = null;
    private static $publicProperties3919a = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getList', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getInstalledModules', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getMustBeConfiguredModules', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getUpgradableModules', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'setActionUrls', array('collection' => $collection), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer919e4 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder3f23f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder3f23f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder3f23f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__get', ['name' => $name], $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        if (isset(self::$publicProperties3919a[$name])) {
            return $this->valueHolder3f23f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f23f;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3f23f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f23f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3f23f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__isset', array('name' => $name), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f23f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3f23f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__unset', array('name' => $name), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f23f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3f23f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__clone', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        $this->valueHolder3f23f = clone $this->valueHolder3f23f;
    }
    public function __sleep()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__sleep', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return array('valueHolder3f23f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer919e4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer919e4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'initializeProxy', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3f23f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3f23f;
    }
}
