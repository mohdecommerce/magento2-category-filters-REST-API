<?php

namespace Mohdibra\Filters\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Mohdibra\Filters\Api\Data\AvailableFilterInterface;

class AvailableFilter extends AbstractExtensibleObject implements AvailableFilterInterface
{

    /**
     * Get Available Filters
     *
     * @return \Mohdibra\Filters\Api\Data\FilterInterface[]|null
     */
    public function getAvailableFilter()
    {
        return $this->_get(self::AVAILABLE_FILTER);
    }

    /**
     * Set Available Filters
     *
     * @param \Mohdibra\Filters\Api\Data\FilterInterface[] $filters /null
     * @return $this
     * @api
     */
    public function setAvailableFilter(array $filters = null)
    {
        return $this->setData(self::AVAILABLE_FILTER, $filters);
    }
}
