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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV1CustomConfig extends \Google\Model
{
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_LOW = 'LOW';
  protected $customOutputType = GoogleCloudSecuritycenterV1CustomOutputSpec::class;
  protected $customOutputDataType = '';
  /**
   * @var string
   */
  public $description;
  protected $predicateType = Expr::class;
  protected $predicateDataType = '';
  /**
   * @var string
   */
  public $recommendation;
  protected $resourceSelectorType = GoogleCloudSecuritycenterV1ResourceSelector::class;
  protected $resourceSelectorDataType = '';
  /**
   * @var string
   */
  public $severity;

  /**
   * @param GoogleCloudSecuritycenterV1CustomOutputSpec $customOutput
   */
  public function setCustomOutput(GoogleCloudSecuritycenterV1CustomOutputSpec $customOutput)
  {
    $this->customOutput = $customOutput;
  }
  /**
   * @return GoogleCloudSecuritycenterV1CustomOutputSpec
   */
  public function getCustomOutput()
  {
    return $this->customOutput;
  }
  /**
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param Expr $predicate
   */
  public function setPredicate(Expr $predicate)
  {
    $this->predicate = $predicate;
  }
  /**
   * @return Expr
   */
  public function getPredicate()
  {
    return $this->predicate;
  }
  /**
   * @param string $recommendation
   */
  public function setRecommendation($recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /**
   * @return string
   */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
  /**
   * @param GoogleCloudSecuritycenterV1ResourceSelector $resourceSelector
   */
  public function setResourceSelector(GoogleCloudSecuritycenterV1ResourceSelector $resourceSelector)
  {
    $this->resourceSelector = $resourceSelector;
  }
  /**
   * @return GoogleCloudSecuritycenterV1ResourceSelector
   */
  public function getResourceSelector()
  {
    return $this->resourceSelector;
  }
  /**
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV1CustomConfig::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1CustomConfig');
