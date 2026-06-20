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

namespace Google\Service\DatabaseCenter;

class SubResource extends \Google\Model
{
  /**
   * Specifies where the resource is created. For Google Cloud resources, it is
   * the full name of the project.
   *
   * @var string
   */
  public $container;
  /**
   * Optional. Resource name associated with the sub resource where backup
   * settings are configured. E.g."//spanner.googleapis.com/projects/project1/in
   * stances/inst1/databases/db1" for Spanner where backup retention is
   * configured on database within an instance OPTIONAL
   *
   * @var string
   */
  public $fullResourceName;
  protected $productType = Product::class;
  protected $productDataType = '';
  /**
   * Optional. Resource type associated with the sub resource where backup
   * settings are configured. E.g. "spanner.googleapis.com/Database" for Spanner
   * where backup retention is configured on database within an instance
   * OPTIONAL
   *
   * @var string
   */
  public $resourceType;

  /**
   * Specifies where the resource is created. For Google Cloud resources, it is
   * the full name of the project.
   *
   * @param string $container
   */
  public function setContainer($container)
  {
    $this->container = $container;
  }
  /**
   * @return string
   */
  public function getContainer()
  {
    return $this->container;
  }
  /**
   * Optional. Resource name associated with the sub resource where backup
   * settings are configured. E.g."//spanner.googleapis.com/projects/project1/in
   * stances/inst1/databases/db1" for Spanner where backup retention is
   * configured on database within an instance OPTIONAL
   *
   * @param string $fullResourceName
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * Optional. Product information associated with the sub resource where backup
   * retention settings are configured. e.g. ``` product: { type :
   * PRODUCT_TYPE_SPANNER engine : ENGINE_CLOUD_SPANNER_WITH_POSTGRES_DIALECT }
   * ``` for Spanner where backup is configured on database within an instance
   * OPTIONAL
   *
   * @param Product $product
   */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /**
   * @return Product
   */
  public function getProduct()
  {
    return $this->product;
  }
  /**
   * Optional. Resource type associated with the sub resource where backup
   * settings are configured. E.g. "spanner.googleapis.com/Database" for Spanner
   * where backup retention is configured on database within an instance
   * OPTIONAL
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubResource::class, 'Google_Service_DatabaseCenter_SubResource');
