<?php

namespace Mohdibra\Filters\Api;

/**
 * Interface for get filters for category
 * @api
 * @since 100.0.2
 */
interface FiltersInterface
{
    /**
     * Get Filters
     *
     * @param int $categoryId
     * @return \Mohdibra\Filters\Api\Data\AvailableFilterInterface
     */
    public function getFilters($categoryId);
}