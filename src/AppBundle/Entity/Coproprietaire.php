<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coproprietaire
 *
 * @ORM\Table(name="coproprietaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoproprietaireRepository")
 */
class Coproprietaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\charge")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

	/**
	 * @ORM\Column(type="string", length=64)
	 */
	private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="appart", type="string", length=255, unique=true)
     */
    private $appart;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Coproprietaire
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Coproprietaire
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Coproprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

	/**
	 * Set email
	 *
	 * @param string $email
	 *
	 * @return Coproprietaire
	 */
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}

    /**
     * Set appart
     *
     * @param string $appart
     *
     * @return Coproprietaire
     */
    public function setAppart($appart)
    {
        $this->appart = $appart;

        return $this;
    }

    /**
     * Get appart
     *
     * @return string
     */
    public function getAppart()
    {
        return $this->appart;
    }
}

