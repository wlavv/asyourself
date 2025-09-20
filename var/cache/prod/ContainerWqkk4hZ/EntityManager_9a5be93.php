<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3f23f = null;
    private $initializer919e4 = null;
    private static $publicProperties3919a = [
        
    ];
    public function getConnection()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getConnection', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getMetadataFactory', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getExpressionBuilder', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'beginTransaction', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getCache', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'transactional', array('func' => $func), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'commit', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->commit();
    }
    public function rollback()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'rollback', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getClassMetadata', array('className' => $className), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'createQuery', array('dql' => $dql), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'createNamedQuery', array('name' => $name), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'createQueryBuilder', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'flush', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'clear', array('entityName' => $entityName), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->clear($entityName);
    }
    public function close()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'close', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->close();
    }
    public function persist($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'persist', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'remove', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'refresh', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'detach', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'merge', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'contains', array('entity' => $entity), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getEventManager', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getConfiguration', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'isOpen', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getUnitOfWork', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getProxyFactory', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'initializeObject', array('obj' => $obj), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'getFilters', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'isFiltersStateClean', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, 'hasFilters', array(), $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        return $this->valueHolder3f23f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer919e4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder3f23f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3f23f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3f23f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer919e4 && ($this->initializer919e4->__invoke($valueHolder3f23f, $this, '__get', ['name' => $name], $this->initializer919e4) || 1) && $this->valueHolder3f23f = $valueHolder3f23f;
        if (isset(self::$publicProperties3919a[$name])) {
            return $this->valueHolder3f23f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
