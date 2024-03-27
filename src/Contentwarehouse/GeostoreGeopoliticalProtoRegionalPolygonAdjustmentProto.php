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

namespace Google\Service\Contentwarehouse;

class GeostoreGeopoliticalProtoRegionalPolygonAdjustmentProto extends \Google\Model
{
  protected $polygonToAddType = GeostorePolygonProto::class;
  protected $polygonToAddDataType = '';
  protected $polygonToSubtractType = GeostorePolygonProto::class;
  protected $polygonToSubtractDataType = '';
  /**
   * @var string
   */
  public $regionCode;

  /**
   * @param GeostorePolygonProto
   */
  public function setPolygonToAdd(GeostorePolygonProto $polygonToAdd)
  {
    $this->polygonToAdd = $polygonToAdd;
  }
  /**
   * @return GeostorePolygonProto
   */
  public function getPolygonToAdd()
  {
    return $this->polygonToAdd;
  }
  /**
   * @param GeostorePolygonProto
   */
  public function setPolygonToSubtract(GeostorePolygonProto $polygonToSubtract)
  {
    $this->polygonToSubtract = $polygonToSubtract;
  }
  /**
   * @return GeostorePolygonProto
   */
  public function getPolygonToSubtract()
  {
    return $this->polygonToSubtract;
  }
  /**
   * @param string
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreGeopoliticalProtoRegionalPolygonAdjustmentProto::class, 'Google_Service_Contentwarehouse_GeostoreGeopoliticalProtoRegionalPolygonAdjustmentProto');
