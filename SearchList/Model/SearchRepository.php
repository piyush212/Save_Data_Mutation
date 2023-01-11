<?php
namespace Codilar\SearchList\Model;

use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Codilar\SearchList\Model\SearchFactory;
use Codilar\SearchList\Api\SearchRepositoryInterface;
use Codilar\SearchList\Api\Data\SearchInterface;
use Codilar\SearchList\Model\ResourceModel\Search as ObjectResourceModel;
use Codilar\SearchList\Model\ResourceModel\Search\CollectionFactory;


class SearchRepository implements SearchRepositoryInterface
{
    protected $objectFactory;
    protected $objectResourceModel;
    protected $collectionFactory;
    protected $searchResultsFactory;

    /**
     * SearchRepository constructor.
     *
     * @param SearchFactory $objectFactory
     * @param ObjectResourceModel $objectResourceModel
     * @param CollectionFactory $collectionFactory
     */


    /**
     * @var \Codilar\SearchList\Model\SearchFactory
     */
    private \Codilar\SearchList\Model\SearchFactory $searchFactory;

    public function __construct(
        SearchFactory $searchFactory,
        ObjectResourceModel $objectResourceModel,
        CollectionFactory $collectionFactory
    ) {
        $this->searchFactory = $searchFactory;
        $this->objectResourceModel  = $objectResourceModel;
        $this->collectionFactory    = $collectionFactory;

    }



    public function save(SearchInterface $search)
    {
        $collection = $this->collectionFactory->create();
        $collection->getResource()->save($search);
        return $search;
    }

    public function create()
    {
        return $this->searchFactory->create();
    }

}
