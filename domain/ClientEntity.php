<?php
/**
 *
 */

namespace domain;


class ClientEntity extends IdentityObject
{
    protected $firstName;
    protected $lastName;
    /** @var CityEntity */
    protected $city;
    /** @var CountryEntity */
    protected $country;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return ClientEntity
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return ClientEntity
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return CityEntity
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param CityEntity $city
     * @return ClientEntity
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return CountryEntity
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param CountryEntity $country
     * @return ClientEntity
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}
