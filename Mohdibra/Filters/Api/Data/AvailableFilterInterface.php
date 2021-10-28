<?php

namespace Mohdibra\Filters\Api\Data;

/**
 * available filters
 * @api
 */
interface AvailableFilterInterface
{
    const AVAILABLE_FILTER = 'available_filter';

    /**
     * Get Available Filters
     *
     * @return \Mohdibra\Filters\Api\Data\FilterInterface[]|null
     */
    public function getAvailableFilter();

    /**
     * Set Available Filters
     *
     * @api
     * @param \Mohdibra\Filters\Api\Data\FilterInterface[] $filters/null
     * @return $this
     */
    public function setAvailableFilter(array $filters = null);
}