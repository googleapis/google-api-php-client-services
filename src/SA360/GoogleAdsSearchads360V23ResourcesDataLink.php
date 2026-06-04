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

class GoogleAdsSearchads360V23ResourcesDataLink extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Link has been requested by one party, but not confirmed by the other party.
   */
  public const STATUS_REQUESTED = 'REQUESTED';
  /**
   * Link is waiting for the customer to approve.
   */
  public const STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
  /**
   * Link is established and can be used as needed.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Link is no longer valid and should be ignored.
   */
  public const STATUS_DISABLED = 'DISABLED';
  /**
   * Link request has been cancelled by the requester and further cleanup may be
   * needed.
   */
  public const STATUS_REVOKED = 'REVOKED';
  /**
   * Link request has been rejected by the approver.
   */
  public const STATUS_REJECTED = 'REJECTED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * A data link to YouTube video.
   */
  public const TYPE_VIDEO = 'VIDEO';
  /**
   * Output only. The ID of the data link. This field is read only.
   *
   * @var string
   */
  public $dataLinkId;
  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @var string
   */
  public $productLinkId;
  /**
   * Immutable. Resource name of the product data link. DataLink resource names
   * have the form: `
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the data link.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. The type of the data.
   *
   * @var string
   */
  public $type;
  protected $youtubeVideoType = GoogleAdsSearchads360V23ResourcesYoutubeVideoIdentifier::class;
  protected $youtubeVideoDataType = '';

  /**
   * Output only. The ID of the data link. This field is read only.
   *
   * @param string $dataLinkId
   */
  public function setDataLinkId($dataLinkId)
  {
    $this->dataLinkId = $dataLinkId;
  }
  /**
   * @return string
   */
  public function getDataLinkId()
  {
    return $this->dataLinkId;
  }
  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @param string $productLinkId
   */
  public function setProductLinkId($productLinkId)
  {
    $this->productLinkId = $productLinkId;
  }
  /**
   * @return string
   */
  public function getProductLinkId()
  {
    return $this->productLinkId;
  }
  /**
   * Immutable. Resource name of the product data link. DataLink resource names
   * have the form: `
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
   * Output only. The status of the data link.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUESTED, PENDING_APPROVAL,
   * ENABLED, DISABLED, REVOKED, REJECTED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. The type of the data.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VIDEO
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Immutable. A data link to YouTube video.
   *
   * @param GoogleAdsSearchads360V23ResourcesYoutubeVideoIdentifier $youtubeVideo
   */
  public function setYoutubeVideo(GoogleAdsSearchads360V23ResourcesYoutubeVideoIdentifier $youtubeVideo)
  {
    $this->youtubeVideo = $youtubeVideo;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesYoutubeVideoIdentifier
   */
  public function getYoutubeVideo()
  {
    return $this->youtubeVideo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesDataLink::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesDataLink');
