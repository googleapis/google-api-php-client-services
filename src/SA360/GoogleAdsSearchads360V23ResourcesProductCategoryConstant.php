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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesProductCategoryConstant extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * Level 1.
   */
  public const LEVEL_LEVEL1 = 'LEVEL1';
  /**
   * Level 2.
   */
  public const LEVEL_LEVEL2 = 'LEVEL2';
  /**
   * Level 3.
   */
  public const LEVEL_LEVEL3 = 'LEVEL3';
  /**
   * Level 4.
   */
  public const LEVEL_LEVEL4 = 'LEVEL4';
  /**
   * Level 5.
   */
  public const LEVEL_LEVEL5 = 'LEVEL5';
  /**
   * Not specified.
   */
  public const STATE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATE_UNKNOWN = 'UNKNOWN';
  /**
   * The category is enabled.
   */
  public const STATE_ENABLED = 'ENABLED';
  /**
   * The category is obsolete. Used only for reporting purposes.
   */
  public const STATE_OBSOLETE = 'OBSOLETE';
  protected $collection_key = 'localizations';
  /**
   * Output only. The ID of the product category. This ID is equivalent to the
   * google_product_category ID as described in this article:
   * https://support.google.com/merchants/answer/6324436.
   *
   * @var string
   */
  public $categoryId;
  /**
   * Output only. Level of the product category.
   *
   * @var string
   */
  public $level;
  protected $localizationsType = GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization::class;
  protected $localizationsDataType = 'array';
  /**
   * Output only. Resource name of the parent product category.
   *
   * @var string
   */
  public $productCategoryConstantParent;
  /**
   * Output only. The resource name of the product category. Product category
   * resource names have the form:
   * `productCategoryConstants/{level}~{category_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. State of the product category.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The ID of the product category. This ID is equivalent to the
   * google_product_category ID as described in this article:
   * https://support.google.com/merchants/answer/6324436.
   *
   * @param string $categoryId
   */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /**
   * @return string
   */
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  /**
   * Output only. Level of the product category.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LEVEL1, LEVEL2, LEVEL3, LEVEL4,
   * LEVEL5
   *
   * @param self::LEVEL_* $level
   */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /**
   * @return self::LEVEL_*
   */
  public function getLevel()
  {
    return $this->level;
  }
  /**
   * Output only. List of all available localizations of the product category.
   *
   * @param GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization[] $localizations
   */
  public function setLocalizations($localizations)
  {
    $this->localizations = $localizations;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesProductCategoryConstantProductCategoryLocalization[]
   */
  public function getLocalizations()
  {
    return $this->localizations;
  }
  /**
   * Output only. Resource name of the parent product category.
   *
   * @param string $productCategoryConstantParent
   */
  public function setProductCategoryConstantParent($productCategoryConstantParent)
  {
    $this->productCategoryConstantParent = $productCategoryConstantParent;
  }
  /**
   * @return string
   */
  public function getProductCategoryConstantParent()
  {
    return $this->productCategoryConstantParent;
  }
  /**
   * Output only. The resource name of the product category. Product category
   * resource names have the form:
   * `productCategoryConstants/{level}~{category_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. State of the product category.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, OBSOLETE
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesProductCategoryConstant::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesProductCategoryConstant');
