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

class ResourceDetails extends \Google\Model
{
  /**
   * Specifies where the resource is created. For Google Cloud resources, it is
   * the full name of the project.
   *
   * @var string
   */
  public $container;
  /**
   * Full resource name of the resource.
   *
   * @var string
   */
  public $fullResourceName;
  /**
   * Location of the resource.
   *
   * @var string
   */
  public $location;
  protected $productType = Product::class;
  protected $productDataType = '';

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
   * Full resource name of the resource.
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
   * Location of the resource.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Product type of the resource.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceDetails::class, 'Google_Service_DatabaseCenter_ResourceDetails');
