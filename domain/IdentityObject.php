<?php
/**
 * Базовый класс для всех идентифицируемых объектов
 */

namespace domain;


class IdentityObject
{
    protected $id;

    public function __construct($objectId = null)
    {
        if ($objectId) {
            $this->id = (int)$objectId;
        }
    }

    /**
     * Возвращает идентификатор объекта
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
}