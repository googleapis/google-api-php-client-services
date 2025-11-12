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

namespace Google\Service\DataManager;

class RequestStatusPerDestination extends \Google\Model
{
  protected $audienceMembersIngestionStatusType = IngestAudienceMembersStatus::class;
  protected $audienceMembersIngestionStatusDataType = '';
  protected $audienceMembersRemovalStatusType = RemoveAudienceMembersStatus::class;
  protected $audienceMembersRemovalStatusDataType = '';
  protected $destinationType = Destination::class;
  protected $destinationDataType = '';
  protected $errorInfoType = ErrorInfo::class;
  protected $errorInfoDataType = '';
  protected $eventsIngestionStatusType = IngestEventsStatus::class;
  protected $eventsIngestionStatusDataType = '';
  /**
   * @var string
   */
  public $requestStatus;
  protected $warningInfoType = WarningInfo::class;
  protected $warningInfoDataType = '';

  /**
   * @param IngestAudienceMembersStatus
   */
  public function setAudienceMembersIngestionStatus(IngestAudienceMembersStatus $audienceMembersIngestionStatus)
  {
    $this->audienceMembersIngestionStatus = $audienceMembersIngestionStatus;
  }
  /**
   * @return IngestAudienceMembersStatus
   */
  public function getAudienceMembersIngestionStatus()
  {
    return $this->audienceMembersIngestionStatus;
  }
  /**
   * @param RemoveAudienceMembersStatus
   */
  public function setAudienceMembersRemovalStatus(RemoveAudienceMembersStatus $audienceMembersRemovalStatus)
  {
    $this->audienceMembersRemovalStatus = $audienceMembersRemovalStatus;
  }
  /**
   * @return RemoveAudienceMembersStatus
   */
  public function getAudienceMembersRemovalStatus()
  {
    return $this->audienceMembersRemovalStatus;
  }
  /**
   * @param Destination
   */
  public function setDestination(Destination $destination)
  {
    $this->destination = $destination;
  }
  /**
   * @return Destination
   */
  public function getDestination()
  {
    return $this->destination;
  }
  /**
   * @param ErrorInfo
   */
  public function setErrorInfo(ErrorInfo $errorInfo)
  {
    $this->errorInfo = $errorInfo;
  }
  /**
   * @return ErrorInfo
   */
  public function getErrorInfo()
  {
    return $this->errorInfo;
  }
  /**
   * @param IngestEventsStatus
   */
  public function setEventsIngestionStatus(IngestEventsStatus $eventsIngestionStatus)
  {
    $this->eventsIngestionStatus = $eventsIngestionStatus;
  }
  /**
   * @return IngestEventsStatus
   */
  public function getEventsIngestionStatus()
  {
    return $this->eventsIngestionStatus;
  }
  /**
   * @param string
   */
  public function setRequestStatus($requestStatus)
  {
    $this->requestStatus = $requestStatus;
  }
  /**
   * @return string
   */
  public function getRequestStatus()
  {
    return $this->requestStatus;
  }
  /**
   * @param WarningInfo
   */
  public function setWarningInfo(WarningInfo $warningInfo)
  {
    $this->warningInfo = $warningInfo;
  }
  /**
   * @return WarningInfo
   */
  public function getWarningInfo()
  {
    return $this->warningInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestStatusPerDestination::class, 'Google_Service_DataManager_RequestStatusPerDestination');
