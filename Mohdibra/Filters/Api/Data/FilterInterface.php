<?php

namespace Mohdibra\Filters\Api\Data;

/**
 * available filters
 * @api
 */
interface FilterInterface
{

    const FILTER_NAME = 'filter_name';
    const FILTER_CODE = 'filter_code';
    const OPTIONS = 'options';
    const MIN_PRICE = 'min_price';
    const MAX_PRICE = 'max_price';

    /**
     * Get Filter Name
     *
     * @return string
     */
    public function getFilterName();

    /**
     * Set Filter Name
     *
     * @api
     * @param string name
     * @return $this
     */
    public function setFilterName($name);

    /**
     * Get Filter Code
     *
     * @return string|null
     */
    public function getFilterCode();

    /**
     * Set Filter Code
     * @api
     * @param string|null code
     * @return $this
     */
    public function setFilterCode($code);

    /**
     * Get Available Options
     *
     * @return \Mohdibra\Filters\Api\Data\OptionsInterface[]|null
     */
    public function getOptions();

    /**
     * Set Available Options
     *
     * @api
     * @param \Mohdibra\Filters\Api\Data\OptionsInterface[] $options/null
     * @return $this
     */
    public function setOptions(array $options = null);

    /**
     * Get Min Price
     *
     * @return float|null
     */
    public function getMinPrice();

    /**
     * Set Min Price
     *
     * @api
     * @param float|null $minPrice
     * @return $this
     */
    public function setMinPrice($minPrice);

    /**
     * Get Min Price
     *
     * @return float|null
     */
    public function getMaxPrice();

    /**
     * Set Max Price
     *
     * @api
     * @param float|null $maxPrice
     * @return $this
     */
    public function setMaxPrice($maxPrice);
}