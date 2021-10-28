<?php

namespace Mohdibra\Filters\Api\Data;

/**
 * Filter Options
 * @api
 */
interface OptionsInterface
{

    const NAME = 'name';

    const FILTER_ID = 'filter_id';

    const COUNT = 'count';

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set Name
     *
     * @api
     * @param string|null $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get Filter Id
     *
     * @return string|null
     */
    public function getFilterId();

    /**
     * Set Filter Id
     *
     * @api
     * @param string|null $filterId
     * @return $this
     */
    public function setFilterId($filterId);

    /**
     * Get Count
     *
     * @return int|null
     */
    public function getCount();

    /**
     * Set Count
     *
     * @api
     * @param int|null $count
     * @return $this
     */
    public function setCount($count);
}