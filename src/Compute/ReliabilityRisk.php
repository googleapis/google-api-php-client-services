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

namespace Google\Service\Compute;

class ReliabilityRisk extends \Google\Model
{
  /**
   * Output only. [Output Only] Creation timestamp in RFC3339 text format.
   *
   * @var string
   */
  public $creationTimestamp;
  /**
   * An optional textual description of the resource; provided when the resource
   * is created.
   *
   * @var string
   */
  public $description;
  protected $detailsType = RiskDetails::class;
  protected $detailsDataType = '';
  /**
   * [Output Only] The unique identifier for the resource. This identifier is
   * defined by the server.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. [Output Only] Type of resource. Always compute#reliabilityRisk
   * for reliability risks.
   *
   * @var string
   */
  public $kind;
  /**
   * Name of the resource. The name must be 1-63 characters long and comply with
   * RFC1035.
   *
   * @var string
   */
  public $name;
  protected $recommendationType = RiskRecommendation::class;
  protected $recommendationDataType = '';
  /**
   * Output only. [Output Only] Server-defined URL for the resource.
   *
   * @var string
   */
  public $selfLink;
  /**
   * Output only. [Output Only] Server-defined URL for this resource with the
   * resource id.
   *
   * @var string
   */
  public $selfLinkWithId;

  /**
   * Output only. [Output Only] Creation timestamp in RFC3339 text format.
   *
   * @param string $creationTimestamp
   */
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  /**
   * @return string
   */
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  /**
   * An optional textual description of the resource; provided when the resource
   * is created.
   *
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
   * [Output Only] Details of the reliability risk resource
   *
   * @param RiskDetails $details
   */
  public function setDetails(RiskDetails $details)
  {
    $this->details = $details;
  }
  /**
   * @return RiskDetails
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * [Output Only] The unique identifier for the resource. This identifier is
   * defined by the server.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. [Output Only] Type of resource. Always compute#reliabilityRisk
   * for reliability risks.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Name of the resource. The name must be 1-63 characters long and comply with
   * RFC1035.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * The recommendation to mitigate the risk.
   *
   * @param RiskRecommendation $recommendation
   */
  public function setRecommendation(RiskRecommendation $recommendation)
  {
    $this->recommendation = $recommendation;
  }
  /**
   * @return RiskRecommendation
   */
  public function getRecommendation()
  {
    return $this->recommendation;
  }
  /**
   * Output only. [Output Only] Server-defined URL for the resource.
   *
   * @param string $selfLink
   */
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  /**
   * @return string
   */
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * Output only. [Output Only] Server-defined URL for this resource with the
   * resource id.
   *
   * @param string $selfLinkWithId
   */
  public function setSelfLinkWithId($selfLinkWithId)
  {
    $this->selfLinkWithId = $selfLinkWithId;
  }
  /**
   * @return string
   */
  public function getSelfLinkWithId()
  {
    return $this->selfLinkWithId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReliabilityRisk::class, 'Google_Service_Compute_ReliabilityRisk');
