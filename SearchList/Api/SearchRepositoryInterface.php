<?php

namespace Codilar\SearchList\Api;

use Codilar\SearchList\Api\Data\SearchInterface;

interface SearchRepositoryInterface
{


    /**
     * @param \Codilar\SearchList\Api\Data\SearchInterface $search
     * @return \Codilar\SearchList\Api\Data\SearchInterface
     */
    public function save(SearchInterface $search);

     public function create();



}
