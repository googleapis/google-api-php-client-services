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

class ResourceId extends \Google\Model
{
  /**
   * The full resource name of the resource.
   *
   * @var string
   */
  public $fullResourceName;
  protected $productType = Product::class;
  protected $productDataType = '';
  /**
   * The type of the resource. sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   *
   * @var string
   */
  public $resourceType;

  /**
   * The full resource name of the resource.
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
   * The product of the resource, including the type, engine, and version.
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
   * The type of the resource. sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
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
class_alias(ResourceId::class, 'Google_Service_DatabaseCenter_ResourceId');
