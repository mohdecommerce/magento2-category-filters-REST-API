<?php

namespace Mohdibra\Filters\Model;

use Magento\Catalog\Model\Layer\Category\FilterableAttributeList;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\ObjectManagerInterface;
use Mohdibra\Filters\Model\Data\AvailableFilterFactory;
use Mohdibra\Filters\Model\Data\FilterFactory;
use Mohdibra\Filters\Model\Data\OptionsFactory;
use Mohdibra\Filters\Api\FiltersInterface;

class Filters implements FiltersInterface
{
    /**
     * @var FilterableAttributeList
     */
    private $filterableAttributeList;

    /**
     * @var Resolver
     */
    private $resolver;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var AvailableFilterFactory
     */
    private $availableFilterFactory;

    /**
     * @var FilterFactory
     */
    private $filterFactory;

    /**
     * @var OptionsFactory
     */
    private $optionsFactory;

    /**
     * Filters constructor.
     * @param FilterableAttributeList $filterableAttributeList
     * @param Resolver $resolver
     * @param ObjectManagerInterface $objectManager
     * @param AvailableFilterFactory $availableFilterFactory
     * @param FilterFactory $filterFactory
     * @param OptionsFactory $optionsFactory
     */
    public function __construct(
        FilterableAttributeList $filterableAttributeList,
        Resolver $resolver,
        ObjectManagerInterface $objectManager,
        AvailableFilterFactory $availableFilterFactory,
        FilterFactory $filterFactory,
        OptionsFactory $optionsFactory
    )
    {
        $this->filterableAttributeList = $filterableAttributeList;
        $this->resolver = $resolver;
        $this->objectManager = $objectManager;
        $this->availableFilterFactory = $availableFilterFactory;
        $this->filterFactory = $filterFactory;
        $this->optionsFactory = $optionsFactory;
    }

    /**
     * @param int $categoryId
     * @return \Mohdibra\Filters\Api\Data\AvailableFilterInterface|Data\AvailableFilter
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getFilters($categoryId)
    {
        $filtersArray = [];
        $filterList = $this->objectManager->create(
            \Magento\Catalog\Model\Layer\FilterList::class,
            [
                'filterableAttributes' => $this->filterableAttributeList
            ]
        );
        $layer = $this->resolver->get();
        $layer->setCurrentCategory($categoryId);
        $filters = $filterList->getFilters($layer);
        $i = 0;
        $productCollection = $layer->getProductCollection();
        $minPrice = $productCollection->getMinPrice();
        $maxPrice = $productCollection->getMaxPrice();
        foreach($filters as $filter)
        {
            $filterName = (string)$filter->getName();
            $items = $filter->getItems();
            if ($filter instanceof \Magento\Catalog\Model\Layer\Filter\Category) {
                $attributeCode = 'cat';
            } else {
                $attributeCode = $filter->getAttributeModel()->getAttributeCode();
            }
            $j = 0;
            $options = [];
            foreach($items as $item)
            {
                $option = $this->optionsFactory->create();
                $option->setName(strip_tags($item->getLabel()))
                       ->setFilterId($item->getValue())
                       ->setCount($item->getCount());
                $options[] = $option;
                $j++;
            }
            if(!empty($options) && count($options) > 0 )
            {
                $filterObject = $this->filterFactory->create();
                if ($attributeCode == 'price') {
                    $filterObject->setFilterCode($attributeCode)
                                 ->setFilterName($filterName)
                                 ->setMinPrice($minPrice)
                                 ->setMaxPrice($maxPrice);
                } else {
                    $filterObject->setFilterCode($attributeCode)
                        ->setFilterName($filterName)
                        ->setOptions($options);
                }

                $filtersArray[] = $filterObject;
            }
            $i++;
        }
        return $this->availableFilterFactory->create()->setAvailableFilter($filtersArray);
    }
}
