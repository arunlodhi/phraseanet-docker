<?php

namespace Alchemy\Phrasea\Model\Proxies\__CG__\Alchemy\Phrasea\Model\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ApiLog extends \Alchemy\Phrasea\Model\Entities\ApiLog implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'account', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'route', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'method', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'statusCode', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'format', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'resource', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'general', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'aspect', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'action', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'errorCode', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'errorMessage'];
        }

        return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'account', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'route', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'method', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'statusCode', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'format', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'resource', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'general', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'aspect', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'action', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'errorCode', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\ApiLog' . "\0" . 'errorMessage'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ApiLog $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setAccount(\Alchemy\Phrasea\Model\Entities\ApiAccount $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', [$account]);

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount', []);

        return parent::getAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setAspect($aspect)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAspect', [$aspect]);

        return parent::setAspect($aspect);
    }

    /**
     * {@inheritDoc}
     */
    public function getAspect()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAspect', []);

        return parent::getAspect();
    }

    /**
     * {@inheritDoc}
     */
    public function setErrorCode($errorCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErrorCode', [$errorCode]);

        return parent::setErrorCode($errorCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getErrorCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErrorCode', []);

        return parent::getErrorCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setErrorMessage($errorMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErrorMessage', [$errorMessage]);

        return parent::setErrorMessage($errorMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getErrorMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErrorMessage', []);

        return parent::getErrorMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormat($format)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormat', [$format]);

        return parent::setFormat($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormat', []);

        return parent::getFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeneral($general)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeneral', [$general]);

        return parent::setGeneral($general);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeneral()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeneral', []);

        return parent::getGeneral();
    }

    /**
     * {@inheritDoc}
     */
    public function setResource($resource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResource', [$resource]);

        return parent::setResource($resource);
    }

    /**
     * {@inheritDoc}
     */
    public function getResource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResource', []);

        return parent::getResource();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoute($route)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoute', [$route]);

        return parent::setRoute($route);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoute', []);

        return parent::getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusCode($statusCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusCode', [$statusCode]);

        return parent::setStatusCode($statusCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusCode', []);

        return parent::getStatusCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethod($method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethod', [$method]);

        return parent::setMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethod', []);

        return parent::getMethod();
    }

}
