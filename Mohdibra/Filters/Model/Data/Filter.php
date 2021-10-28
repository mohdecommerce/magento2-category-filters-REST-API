<?php

namespace Mohdibra\Filters\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Mohdibra\Filters\Api\Data\FilterInterface;

class Filter extends AbstractExtensibleObject implements FilterInterface
{

    /**
     * Get Filter Name
     *
     * @return string
     */
    public function getFilterName()
    {
        return $this->_get(self::FILTER_NAME);
    }

    /**
     * Set Filter Name
     *
     * @param string name
     * @return $this
     * @api
     */
    public function setFilterName($name)
    {
        return $this->setData(self::FILTER_NAME, $name);
    }

    /**
     * Get Filter Code
     *
     * @return string
     */
    public function getFilterCode()
    {
        return $this->_get(self::FILTER_CODE);
    }

    /**
     * Set Filter Code
     * @param string code
     * @return $this
     * @api
     */
    public function setFilterCode($code)
    {
        return $this->setData(self::FILTER_CODE, $code);
    }

    /**
     * Get Available Options
     *
     * @return \Mohdibra\Filters\Api\Data\OptionsInterface[]|null
     */
    public function getOptions()
    {
        return $this->_get(self::OPTIONS);
    }

    /**
     * Set Available Options
     *
     * @param \Mohdibra\Filters\Api\Data\OptionsInterface[] $options /null
     * @return $this
     * @api
     */
    public function setOptions(array $options = null)
    {
        return $this->setData(self::OPTIONS, $options);
    }

    /**
     * Get Min Price
     *
     * @return float|null
     */
    public function getMinPrice()
    {
        return $this->_get(self::MIN_PRICE);
    }

    /**
     * Set Min Price
     *
     * @param float|null $minPrice
     * @return $this
     * @api
     */
    public function setMinPrice($minPrice)
    {
        return $this->setData(self::MIN_PRICE, $minPrice);
    }

    /**
     * Get Min Price
     *
     * @return float|null
     */
    public function getMaxPrice()
    {
        return $this->_get(self::MAX_PRICE);
    }

    /**
     * Set Max Price
     *
     * @param float|null $maxPrice
     * @return $this
     * @api
     */
    public function setMaxPrice($maxPrice)
    {
        return $this->setData(self::MAX_PRICE, $maxPrice);
    }
}
