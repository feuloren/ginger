<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Personne
 */
class Personne
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $login
     */
    private $login;

    /**
     * @var string $prenom
     */
    private $prenom;

    /**
     * @var string $nom
     */
    private $nom;

    /**
     * @var string $mail
     */
    private $mail;

    /**
     * @var boolean $type
     */
    private $type;

    /**
     * @var \DateTime $dateNaissance
     */
    private $dateNaissance;

    /**
     * @var boolean $isAdulte
     */
    private $isAdulte;

    /**
     * @var string $badgeUid
     */
    private $badgeUid;

    /**
     * @var \DateTime $expirationBadge
     */
    private $expirationBadge;

    /**
     * @var \DateTime $createdAt
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Personne
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Personne
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Personne
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Personne
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set isAdulte
     *
     * @param boolean $isAdulte
     * @return Personne
     */
    public function setIsAdulte($isAdulte)
    {
        $this->isAdulte = $isAdulte;
    
        return $this;
    }

    /**
     * Get isAdulte
     *
     * @return boolean 
     */
    public function getIsAdulte()
    {
        return $this->isAdulte;
    }

    /**
     * Set badgeUid
     *
     * @param string $badgeUid
     * @return Personne
     */
    public function setBadgeUid($badgeUid)
    {
        $this->badgeUid = $badgeUid;
    
        return $this;
    }

    /**
     * Get badgeUid
     *
     * @return string 
     */
    public function getBadgeUid()
    {
        return $this->badgeUid;
    }

    /**
     * Set expirationBadge
     *
     * @param \DateTime $expirationBadge
     * @return Personne
     */
    public function setExpirationBadge($expirationBadge)
    {
        $this->expirationBadge = $expirationBadge;
    
        return $this;
    }

    /**
     * Get expirationBadge
     *
     * @return \DateTime 
     */
    public function getExpirationBadge()
    {
        return $this->expirationBadge;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Personne
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Personne
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}