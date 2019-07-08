<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockAssetApi\Api;

use Magento\AdobeStockAssetApi\Api\Data\AssetInterface;
use Magento\AdobeStockAssetApi\Api\Data\AssetSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Interface AssetRepositoryInterface
 * @package Magento\AdobeStockImage\Api
 * @api
 */
interface AssetRepositoryInterface
{
    /**
     * Save asset
     *
     * @param AssetInterface $item
     * @return void
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(AssetInterface $item): void;

    /**
     * Delete item
     *
     * @param AssetInterface $item
     * @return void
     * @throws \Exception
     */
    public function delete(AssetInterface $item): void;

    /**
     * Get a list of assets
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return AssetSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria) : AssetSearchResultsInterface;

    /**
     * Get asset by id
     *
     * @param int $id
     * @return AssetInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id) : AssetInterface;

    /**
     * Delete asset
     *
     * @param int $id
     * @return void
     * @throws \Exception
     */
    public function deleteById(int $id): void;
}
