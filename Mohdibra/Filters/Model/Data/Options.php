<?php

namespace Mohdibra\Filters\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Mohdibra\Filters\Api\Data\OptionsInterface;

class Options extends AbstractExtensibleObject implements OptionsInterface
{
    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * Set Name
     *
     * @param string|null $name
     * @return $this
     * @api
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Filter Id
     *
     * @return string|null
     */
    public function getFilterId()
    {
        return $this->_get(self::FILTER_ID);
    }

    /**
     * Set Filter Id
     *
     * @param string|null $filterId
     * @return $this
     * @api
     */
    public function setFilterId($filterId)
    {
        return $this->setData(self::FILTER_ID, $filterId);
    }

    /**
     * Get Count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->_get(self::COUNT);
    }

    /**
     * Set Count
     *
     * @param int|null $count
     * @return $this
     * @api
     */
    public function setCount($count)
    {
        return $this->setData(self::COUNT, $count);
    }
}
