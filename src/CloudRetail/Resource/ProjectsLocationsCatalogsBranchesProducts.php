<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudRetail\Resource;

use Google\Service\CloudRetail\GoogleCloudRetailV2ImportProductsRequest;
use Google\Service\CloudRetail\GoogleCloudRetailV2Product;
use Google\Service\CloudRetail\GoogleLongrunningOperation;
use Google\Service\CloudRetail\GoogleProtobufEmpty;

/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $retailService = new Google\Service\CloudRetail(...);
 *   $products = $retailService->products;
 *  </code>
 */
class ProjectsLocationsCatalogsBranchesProducts extends \Google\Service\Resource
{
  /**
   * Creates a Product. (products.create)
   *
   * @param string $parent Required. The parent catalog resource name, such as
   * `projects/locations/global/catalogs/default_catalog/branches/default_branch`.
   * @param GoogleCloudRetailV2Product $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string productId Required. The ID to use for the Product, which
   * will become the final component of the Product.name. If the caller does not
   * have permission to create the Product, regardless of whether or not it
   * exists, a PERMISSION_DENIED error is returned. This field must be unique
   * among all Products with the same parent. Otherwise, an ALREADY_EXISTS error
   * is returned. This field must be a UTF-8 encoded string with a length limit of
   * 128 characters. Otherwise, an INVALID_ARGUMENT error is returned.
   * @return GoogleCloudRetailV2Product
   */
  public function create($parent, GoogleCloudRetailV2Product $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudRetailV2Product::class);
  }
  /**
   * Deletes a Product. (products.delete)
   *
   * @param string $name Required. Full resource name of Product, such as `project
   * s/locations/global/catalogs/default_catalog/branches/default_branch/products/
   * some_product_id`. If the caller does not have permission to delete the
   * Product, regardless of whether or not it exists, a PERMISSION_DENIED error is
   * returned. If the Product to delete does not exist, a NOT_FOUND error is
   * returned. The Product to delete can neither be a Product.Type.COLLECTION
   * Product member nor a Product.Type.PRIMARY Product with more than one
   * variants. Otherwise, an INVALID_ARGUMENT error is returned. All inventory
   * information for the named Product will be deleted.
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets a Product. (products.get)
   *
   * @param string $name Required. Full resource name of Product, such as `project
   * s/locations/global/catalogs/default_catalog/branches/default_branch/products/
   * some_product_id`. If the caller does not have permission to access the
   * Product, regardless of whether or not it exists, a PERMISSION_DENIED error is
   * returned. If the requested Product does not exist, a NOT_FOUND error is
   * returned.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudRetailV2Product
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudRetailV2Product::class);
  }
  /**
   * Bulk import of multiple Products. Request processing may be synchronous. No
   * partial updating is supported. Non-existing items are created. Note that it
   * is possible for a subset of the Products to be successfully updated.
   * (products.import)
   *
   * @param string $parent Required. `projects/1234/locations/global/catalogs/defa
   * ult_catalog/branches/default_branch` If no updateMask is specified, requires
   * products.create permission. If updateMask is specified, requires
   * products.update permission.
   * @param GoogleCloudRetailV2ImportProductsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function import($parent, GoogleCloudRetailV2ImportProductsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('import', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Updates a Product. (products.patch)
   *
   * @param string $name Immutable. Full resource name of the product, such as `pr
   * ojects/locations/global/catalogs/default_catalog/branches/default_branch/prod
   * ucts/product_id`. The branch ID must be "default_branch".
   * @param GoogleCloudRetailV2Product $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing If set to true, and the Product is not found, a
   * new Product will be created. In this situation, `update_mask` is ignored.
   * @opt_param string updateMask Indicates which fields in the provided Product
   * to update. The immutable and output only fields are NOT supported. If not
   * set, all supported fields (the fields that are neither immutable nor output
   * only) are updated. If an unsupported or unknown field is provided, an
   * INVALID_ARGUMENT error is returned.
   * @return GoogleCloudRetailV2Product
   */
  public function patch($name, GoogleCloudRetailV2Product $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudRetailV2Product::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCatalogsBranchesProducts::class, 'Google_Service_CloudRetail_Resource_ProjectsLocationsCatalogsBranchesProducts');
