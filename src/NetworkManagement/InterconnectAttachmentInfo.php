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

namespace Google\Service\NetworkManagement;

class InterconnectAttachmentInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $cloudRouterUri;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $interconnectUri;
  /**
   * @var string
   */
  public $l2AttachmentMatchedIpAddress;
  /**
   * @var string
   */
  public $region;
  /**
   * @var string
   */
  public $type;
  /**
   * @var string
   */
  public $uri;

  /**
   * @param string
   */
  public function setCloudRouterUri($cloudRouterUri)
  {
    $this->cloudRouterUri = $cloudRouterUri;
  }
  /**
   * @return string
   */
  public function getCloudRouterUri()
  {
    return $this->cloudRouterUri;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setInterconnectUri($interconnectUri)
  {
    $this->interconnectUri = $interconnectUri;
  }
  /**
   * @return string
   */
  public function getInterconnectUri()
  {
    return $this->interconnectUri;
  }
  /**
   * @param string
   */
  public function setL2AttachmentMatchedIpAddress($l2AttachmentMatchedIpAddress)
  {
    $this->l2AttachmentMatchedIpAddress = $l2AttachmentMatchedIpAddress;
  }
  /**
   * @return string
   */
  public function getL2AttachmentMatchedIpAddress()
  {
    return $this->l2AttachmentMatchedIpAddress;
  }
  /**
   * @param string
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param string
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InterconnectAttachmentInfo::class, 'Google_Service_NetworkManagement_InterconnectAttachmentInfo');
