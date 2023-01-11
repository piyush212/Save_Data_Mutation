<?php


namespace Codilar\SearchList\Model\ResourceModel\Search;


use Codilar\SearchList\Model\Search;
use Codilar\SearchList\Model\ResourceModel\Search as SearchResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Search::class, SearchResourceModel::class);
    }
}
