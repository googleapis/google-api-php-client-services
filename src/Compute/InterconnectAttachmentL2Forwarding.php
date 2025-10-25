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

class InterconnectAttachmentL2Forwarding extends \Google\Model
{
  protected $applianceMappingsType = InterconnectAttachmentL2ForwardingApplianceMapping::class;
  protected $applianceMappingsDataType = 'map';
  /**
   * @var string
   */
  public $defaultApplianceIpAddress;
  protected $geneveHeaderType = InterconnectAttachmentL2ForwardingGeneveHeader::class;
  protected $geneveHeaderDataType = '';
  /**
   * @var string
   */
  public $network;
  /**
   * @var string
   */
  public $tunnelEndpointIpAddress;

  /**
   * @param InterconnectAttachmentL2ForwardingApplianceMapping[]
   */
  public function setApplianceMappings($applianceMappings)
  {
    $this->applianceMappings = $applianceMappings;
  }
  /**
   * @return InterconnectAttachmentL2ForwardingApplianceMapping[]
   */
  public function getApplianceMappings()
  {
    return $this->applianceMappings;
  }
  /**
   * @param string
   */
  public function setDefaultApplianceIpAddress($defaultApplianceIpAddress)
  {
    $this->defaultApplianceIpAddress = $defaultApplianceIpAddress;
  }
  /**
   * @return string
   */
  public function getDefaultApplianceIpAddress()
  {
    return $this->defaultApplianceIpAddress;
  }
  /**
   * @param InterconnectAttachmentL2ForwardingGeneveHeader
   */
  public function setGeneveHeader(InterconnectAttachmentL2ForwardingGeneveHeader $geneveHeader)
  {
    $this->geneveHeader = $geneveHeader;
  }
  /**
   * @return InterconnectAttachmentL2ForwardingGeneveHeader
   */
  public function getGeneveHeader()
  {
    return $this->geneveHeader;
  }
  /**
   * @param string
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * @param string
   */
  public function setTunnelEndpointIpAddress($tunnelEndpointIpAddress)
  {
    $this->tunnelEndpointIpAddress = $tunnelEndpointIpAddress;
  }
  /**
   * @return string
   */
  public function getTunnelEndpointIpAddress()
  {
    return $this->tunnelEndpointIpAddress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InterconnectAttachmentL2Forwarding::class, 'Google_Service_Compute_InterconnectAttachmentL2Forwarding');
