<?php
/*
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

class Google_Service_Ghire_Offer extends Google_Model
{
  public $acceptedDateMs;
  public $createDateMs;
  protected $hiringManagerType = 'Google_Service_Ghire_PrincipalWithName';
  protected $hiringManagerDataType = '';
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsOfferData';
  protected $legacyAtsDataDataType = '';
  public $notes;
  public $offerDeclinedDateMs;
  public $offerDeletedDateMs;
  public $offerExtendedDateMs;
  public $offerId;
  public $offerRescindedDateMs;
  public $offerStatus;
  public $offerType;
  public $owfOfferId;
  public $prospectivePosition;
  public $startDateMs;
  public $updateDateMs;

  public function setAcceptedDateMs($acceptedDateMs)
  {
    $this->acceptedDateMs = $acceptedDateMs;
  }
  public function getAcceptedDateMs()
  {
    return $this->acceptedDateMs;
  }
  public function setCreateDateMs($createDateMs)
  {
    $this->createDateMs = $createDateMs;
  }
  public function getCreateDateMs()
  {
    return $this->createDateMs;
  }
  public function setHiringManager(Google_Service_Ghire_PrincipalWithName $hiringManager)
  {
    $this->hiringManager = $hiringManager;
  }
  public function getHiringManager()
  {
    return $this->hiringManager;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsOfferData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
  public function setOfferDeclinedDateMs($offerDeclinedDateMs)
  {
    $this->offerDeclinedDateMs = $offerDeclinedDateMs;
  }
  public function getOfferDeclinedDateMs()
  {
    return $this->offerDeclinedDateMs;
  }
  public function setOfferDeletedDateMs($offerDeletedDateMs)
  {
    $this->offerDeletedDateMs = $offerDeletedDateMs;
  }
  public function getOfferDeletedDateMs()
  {
    return $this->offerDeletedDateMs;
  }
  public function setOfferExtendedDateMs($offerExtendedDateMs)
  {
    $this->offerExtendedDateMs = $offerExtendedDateMs;
  }
  public function getOfferExtendedDateMs()
  {
    return $this->offerExtendedDateMs;
  }
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  public function getOfferId()
  {
    return $this->offerId;
  }
  public function setOfferRescindedDateMs($offerRescindedDateMs)
  {
    $this->offerRescindedDateMs = $offerRescindedDateMs;
  }
  public function getOfferRescindedDateMs()
  {
    return $this->offerRescindedDateMs;
  }
  public function setOfferStatus($offerStatus)
  {
    $this->offerStatus = $offerStatus;
  }
  public function getOfferStatus()
  {
    return $this->offerStatus;
  }
  public function setOfferType($offerType)
  {
    $this->offerType = $offerType;
  }
  public function getOfferType()
  {
    return $this->offerType;
  }
  public function setOwfOfferId($owfOfferId)
  {
    $this->owfOfferId = $owfOfferId;
  }
  public function getOwfOfferId()
  {
    return $this->owfOfferId;
  }
  public function setProspectivePosition($prospectivePosition)
  {
    $this->prospectivePosition = $prospectivePosition;
  }
  public function getProspectivePosition()
  {
    return $this->prospectivePosition;
  }
  public function setStartDateMs($startDateMs)
  {
    $this->startDateMs = $startDateMs;
  }
  public function getStartDateMs()
  {
    return $this->startDateMs;
  }
  public function setUpdateDateMs($updateDateMs)
  {
    $this->updateDateMs = $updateDateMs;
  }
  public function getUpdateDateMs()
  {
    return $this->updateDateMs;
  }
}
