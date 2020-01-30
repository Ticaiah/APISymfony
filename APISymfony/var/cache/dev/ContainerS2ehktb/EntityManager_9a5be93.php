<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder973f7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1a1a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1c7b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getConnection', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getMetadataFactory', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getExpressionBuilder', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'beginTransaction', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getCache', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'transactional', array('func' => $func), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->transactional($func);
    }

    public function commit()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'commit', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->commit();
    }

    public function rollback()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'rollback', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'createQuery', array('dql' => $dql), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'createQueryBuilder', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'flush', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'clear', array('entityName' => $entityName), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'close', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->close();
    }

    public function persist($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'persist', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'remove', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'refresh', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'detach', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'merge', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'contains', array('entity' => $entity), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getEventManager', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getConfiguration', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'isOpen', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getUnitOfWork', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getProxyFactory', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'getFilters', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'isFiltersStateClean', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'hasFilters', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return $this->valueHolder973f7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf1a1a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder973f7) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder973f7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder973f7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__get', ['name' => $name], $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        if (isset(self::$publicPropertiese1c7b[$name])) {
            return $this->valueHolder973f7->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder973f7;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder973f7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder973f7;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder973f7;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__isset', array('name' => $name), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder973f7;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder973f7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__unset', array('name' => $name), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder973f7;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder973f7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__clone', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        $this->valueHolder973f7 = clone $this->valueHolder973f7;
    }

    public function __sleep()
    {
        $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, '__sleep', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;

        return array('valueHolder973f7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1a1a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1a1a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1a1a && ($this->initializerf1a1a->__invoke($valueHolder973f7, $this, 'initializeProxy', array(), $this->initializerf1a1a) || 1) && $this->valueHolder973f7 = $valueHolder973f7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder973f7;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder973f7;
    }


}
