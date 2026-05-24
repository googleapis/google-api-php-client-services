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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataProductAccessRequest extends \Google\Model
{
  /**
   * Output only. The display name of the access group defined in the Data
   * Product for which access is being requested.
   *
   * @var string
   */
  public $accessGroupDisplayName;
  /**
   * Required. The ID of the access group for which access is being requested.
   * This corresponds to the unique identifier of the AccessGroup defined in the
   * Data Product.
   *
   * @var string
   */
  public $accessGroupId;
  /**
   * Required. The resource name of the data product. Format: projects/{project_
   * number}/locations/{location_id}/dataProducts/{data_product_id}
   *
   * @var string
   */
  public $parent;
  /**
   * Optional. The principal for which access is being requested in IAM format.
   * If not specified, the requestor's principal will be used. Example:
   * serviceAccount:my-sa@my-project.iam.gserviceaccount.com. Only service
   * account principals are currently supported.
   * https://cloud.google.com/iam/docs/principal-identifiers
   *
   * @var string
   */
  public $requestedPrincipal;

  /**
   * Output only. The display name of the access group defined in the Data
   * Product for which access is being requested.
   *
   * @param string $accessGroupDisplayName
   */
  public function setAccessGroupDisplayName($accessGroupDisplayName)
  {
    $this->accessGroupDisplayName = $accessGroupDisplayName;
  }
  /**
   * @return string
   */
  public function getAccessGroupDisplayName()
  {
    return $this->accessGroupDisplayName;
  }
  /**
   * Required. The ID of the access group for which access is being requested.
   * This corresponds to the unique identifier of the AccessGroup defined in the
   * Data Product.
   *
   * @param string $accessGroupId
   */
  public function setAccessGroupId($accessGroupId)
  {
    $this->accessGroupId = $accessGroupId;
  }
  /**
   * @return string
   */
  public function getAccessGroupId()
  {
    return $this->accessGroupId;
  }
  /**
   * Required. The resource name of the data product. Format: projects/{project_
   * number}/locations/{location_id}/dataProducts/{data_product_id}
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * Optional. The principal for which access is being requested in IAM format.
   * If not specified, the requestor's principal will be used. Example:
   * serviceAccount:my-sa@my-project.iam.gserviceaccount.com. Only service
   * account principals are currently supported.
   * https://cloud.google.com/iam/docs/principal-identifiers
   *
   * @param string $requestedPrincipal
   */
  public function setRequestedPrincipal($requestedPrincipal)
  {
    $this->requestedPrincipal = $requestedPrincipal;
  }
  /**
   * @return string
   */
  public function getRequestedPrincipal()
  {
    return $this->requestedPrincipal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataProductAccessRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataProductAccessRequest');
