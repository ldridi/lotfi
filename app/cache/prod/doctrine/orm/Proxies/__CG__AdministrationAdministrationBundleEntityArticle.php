<?php

namespace Proxies\__CG__\Administration\AdministrationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \Administration\AdministrationBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'theme', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'topic', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'langue', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'auteur', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'nomArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'descriptionArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'statutArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'dateArticle'];
        }

        return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'theme', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'topic', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'langue', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'auteur', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'nomArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'descriptionArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'statutArticle', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Article' . "\0" . 'dateArticle'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
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
    public function setNomArticle($nomArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomArticle', [$nomArticle]);

        return parent::setNomArticle($nomArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomArticle', []);

        return parent::getNomArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionArticle($descriptionArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionArticle', [$descriptionArticle]);

        return parent::setDescriptionArticle($descriptionArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionArticle', []);

        return parent::getDescriptionArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateArticle($dateArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateArticle', [$dateArticle]);

        return parent::setDateArticle($dateArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateArticle', []);

        return parent::getDateArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLangue(\Administration\AdministrationBundle\Entity\Langue $langue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangue', [$langue]);

        return parent::setLangue($langue);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangue', []);

        return parent::getLangue();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutArticle($statutArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutArticle', [$statutArticle]);

        return parent::setStatutArticle($statutArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutArticle', []);

        return parent::getStatutArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function addTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTheme', [$theme]);

        return parent::addTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTheme', [$theme]);

        return parent::removeTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setTopic(\Administration\AdministrationBundle\Entity\Topic $topic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTopic', [$topic]);

        return parent::setTopic($topic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTopic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTopic', []);

        return parent::getTopic();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur(\Client\ClientBundle\Entity\Client $auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Administration\AdministrationBundle\Entity\Media $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

}