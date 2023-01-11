<?php

namespace Codilar\SearchList\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SearchInterface extends ExtensibleDataInterface
{
    public function getId();
    public function setQuery($query);



    public function setProduct($numberOfProduct);


    public function setCreatedAt($createdAt);

    public function setUpdatedAt($updatedAt);
}
