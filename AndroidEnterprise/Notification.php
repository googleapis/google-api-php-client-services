<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_AndroidEnterprise_Notification extends Google_Model
{
  public $appRestrictionsSchemaChangeEvent;
  public $appUpdateEvent;
  public $enterpriseId;
  public $installFailureEvent;
  public $newPermissionsEvent;
  public $productApprovalEvent;
  public $productAvailabilityChangeEvent;
  public $timestampMillis;

  public function setAppRestrictionsSchemaChangeEvent(Google_Service_AndroidEnterprise_AppRestrictionsSchemaChangeEvent $appRestrictionsSchemaChangeEvent)
  {
    $this->appRestrictionsSchemaChangeEvent = $appRestrictionsSchemaChangeEvent;
  }
  public function getAppRestrictionsSchemaChangeEvent()
  {
    return $this->appRestrictionsSchemaChangeEvent;
  }
  public function setAppUpdateEvent(Google_Service_AndroidEnterprise_AppUpdateEvent $appUpdateEvent)
  {
    $this->appUpdateEvent = $appUpdateEvent;
  }
  public function getAppUpdateEvent()
  {
    return $this->appUpdateEvent;
  }
  public function setEnterpriseId($enterpriseId)
  {
    $this->enterpriseId = $enterpriseId;
  }
  public function getEnterpriseId()
  {
    return $this->enterpriseId;
  }
  public function setInstallFailureEvent(Google_Service_AndroidEnterprise_InstallFailureEvent $installFailureEvent)
  {
    $this->installFailureEvent = $installFailureEvent;
  }
  public function getInstallFailureEvent()
  {
    return $this->installFailureEvent;
  }
  public function setNewPermissionsEvent(Google_Service_AndroidEnterprise_NewPermissionsEvent $newPermissionsEvent)
  {
    $this->newPermissionsEvent = $newPermissionsEvent;
  }
  public function getNewPermissionsEvent()
  {
    return $this->newPermissionsEvent;
  }
  public function setProductApprovalEvent(Google_Service_AndroidEnterprise_ProductApprovalEvent $productApprovalEvent)
  {
    $this->productApprovalEvent = $productApprovalEvent;
  }
  public function getProductApprovalEvent()
  {
    return $this->productApprovalEvent;
  }
  public function setProductAvailabilityChangeEvent(Google_Service_AndroidEnterprise_ProductAvailabilityChangeEvent $productAvailabilityChangeEvent)
  {
    $this->productAvailabilityChangeEvent = $productAvailabilityChangeEvent;
  }
  public function getProductAvailabilityChangeEvent()
  {
    return $this->productAvailabilityChangeEvent;
  }
  public function setTimestampMillis($timestampMillis)
  {
    $this->timestampMillis = $timestampMillis;
  }
  public function getTimestampMillis()
  {
    return $this->timestampMillis;
  }
}
