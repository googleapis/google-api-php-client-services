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

namespace Google\Service\CloudFTP;

class InternalServerConfig extends \Google\Collection
{
  protected $collection_key = 'pscEndpoints';
  protected $consumerAcceptListType = AllowedConsumer::class;
  protected $consumerAcceptListDataType = 'array';
  protected $consumerRejectListType = DeniedConsumer::class;
  protected $consumerRejectListDataType = 'array';
  protected $pscEndpointsType = PscEndpoint::class;
  protected $pscEndpointsDataType = 'array';
  /**
   * Output only. The resource name of the service attachment. Format: `projects
   * /{project}/regions/{region}/serviceAttachments/{service_attachment}`
   *
   * @var string
   */
  public $serviceAttachment;

  /**
   * Required. A list of projects that are permitted to connect. At least one
   * project is required in the allow list.
   *
   * @param AllowedConsumer[] $consumerAcceptList
   */
  public function setConsumerAcceptList($consumerAcceptList)
  {
    $this->consumerAcceptList = $consumerAcceptList;
  }
  /**
   * @return AllowedConsumer[]
   */
  public function getConsumerAcceptList()
  {
    return $this->consumerAcceptList;
  }
  /**
   * Optional. A list of projects that are denied connection. Format:
   * "projects/sample_project_id" or "projects/1234567890" Projects in this list
   * will be denied access, even if they are included in the `allow_list`. If
   * this list is empty, no projects are explicitly rejected.
   *
   * @param DeniedConsumer[] $consumerRejectList
   */
  public function setConsumerRejectList($consumerRejectList)
  {
    $this->consumerRejectList = $consumerRejectList;
  }
  /**
   * @return DeniedConsumer[]
   */
  public function getConsumerRejectList()
  {
    return $this->consumerRejectList;
  }
  /**
   * Output only. Details of endpoints created by the customer.
   *
   * @param PscEndpoint[] $pscEndpoints
   */
  public function setPscEndpoints($pscEndpoints)
  {
    $this->pscEndpoints = $pscEndpoints;
  }
  /**
   * @return PscEndpoint[]
   */
  public function getPscEndpoints()
  {
    return $this->pscEndpoints;
  }
  /**
   * Output only. The resource name of the service attachment. Format: `projects
   * /{project}/regions/{region}/serviceAttachments/{service_attachment}`
   *
   * @param string $serviceAttachment
   */
  public function setServiceAttachment($serviceAttachment)
  {
    $this->serviceAttachment = $serviceAttachment;
  }
  /**
   * @return string
   */
  public function getServiceAttachment()
  {
    return $this->serviceAttachment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InternalServerConfig::class, 'Google_Service_CloudFTP_InternalServerConfig');
