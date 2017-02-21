<?php
/*
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

class Google_Service_Supportcases_Issue extends Google_Collection
{
  protected $collection_key = 'subProducts';
  public $localeCode;
  public $previewText;
  protected $productType = 'Google_Service_Supportcases_Product';
  protected $productDataType = '';
  protected $subProductsType = 'Google_Service_Supportcases_Product';
  protected $subProductsDataType = 'array';
  public $summary;

  public function setLocaleCode($localeCode)
  {
    $this->localeCode = $localeCode;
  }
  public function getLocaleCode()
  {
    return $this->localeCode;
  }
  public function setPreviewText($previewText)
  {
    $this->previewText = $previewText;
  }
  public function getPreviewText()
  {
    return $this->previewText;
  }
  public function setProduct(Google_Service_Supportcases_Product $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
  }
  public function setSubProducts($subProducts)
  {
    $this->subProducts = $subProducts;
  }
  public function getSubProducts()
  {
    return $this->subProducts;
  }
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  public function getSummary()
  {
    return $this->summary;
  }
}
