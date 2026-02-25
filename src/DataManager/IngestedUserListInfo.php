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

class IngestedUserListInfo extends \Google\Collection
{
  protected $collection_key = 'uploadKeyTypes';
  protected $contactIdInfoType = ContactIdInfo::class;
  protected $contactIdInfoDataType = '';
  protected $mobileIdInfoType = MobileIdInfo::class;
  protected $mobileIdInfoDataType = '';
  protected $pairIdInfoType = PairIdInfo::class;
  protected $pairIdInfoDataType = '';
  protected $partnerAudienceInfoType = PartnerAudienceInfo::class;
  protected $partnerAudienceInfoDataType = '';
  protected $pseudonymousIdInfoType = PseudonymousIdInfo::class;
  protected $pseudonymousIdInfoDataType = '';
  /**
   * Required. Immutable. Upload key types of this user list.
   *
   * @var string[]
   */
  public $uploadKeyTypes;
  protected $userIdInfoType = UserIdInfo::class;
  protected $userIdInfoDataType = '';

  /**
   * Optional. Additional information when `CONTACT_ID` is one of the
   * `upload_key_types`.
   *
   * @param ContactIdInfo $contactIdInfo
   */
  public function setContactIdInfo(ContactIdInfo $contactIdInfo)
  {
    $this->contactIdInfo = $contactIdInfo;
  }
  /**
   * @return ContactIdInfo
   */
  public function getContactIdInfo()
  {
    return $this->contactIdInfo;
  }
  /**
   * Optional. Additional information when `MOBILE_ID` is one of the
   * `upload_key_types`.
   *
   * @param MobileIdInfo $mobileIdInfo
   */
  public function setMobileIdInfo(MobileIdInfo $mobileIdInfo)
  {
    $this->mobileIdInfo = $mobileIdInfo;
  }
  /**
   * @return MobileIdInfo
   */
  public function getMobileIdInfo()
  {
    return $this->mobileIdInfo;
  }
  /**
   * Optional. Additional information when `PAIR_ID` is one of the
   * `upload_key_types`. This feature is only available to data partners.
   *
   * @param PairIdInfo $pairIdInfo
   */
  public function setPairIdInfo(PairIdInfo $pairIdInfo)
  {
    $this->pairIdInfo = $pairIdInfo;
  }
  /**
   * @return PairIdInfo
   */
  public function getPairIdInfo()
  {
    return $this->pairIdInfo;
  }
  /**
   * Optional. Additional information for partner audiences. This feature is
   * only available to data partners.
   *
   * @param PartnerAudienceInfo $partnerAudienceInfo
   */
  public function setPartnerAudienceInfo(PartnerAudienceInfo $partnerAudienceInfo)
  {
    $this->partnerAudienceInfo = $partnerAudienceInfo;
  }
  /**
   * @return PartnerAudienceInfo
   */
  public function getPartnerAudienceInfo()
  {
    return $this->partnerAudienceInfo;
  }
  /**
   * Optional. Additional information for `PSEUDONYMOUS_ID` is one of the
   * `upload_key_types`.
   *
   * @param PseudonymousIdInfo $pseudonymousIdInfo
   */
  public function setPseudonymousIdInfo(PseudonymousIdInfo $pseudonymousIdInfo)
  {
    $this->pseudonymousIdInfo = $pseudonymousIdInfo;
  }
  /**
   * @return PseudonymousIdInfo
   */
  public function getPseudonymousIdInfo()
  {
    return $this->pseudonymousIdInfo;
  }
  /**
   * Required. Immutable. Upload key types of this user list.
   *
   * @param string[] $uploadKeyTypes
   */
  public function setUploadKeyTypes($uploadKeyTypes)
  {
    $this->uploadKeyTypes = $uploadKeyTypes;
  }
  /**
   * @return string[]
   */
  public function getUploadKeyTypes()
  {
    return $this->uploadKeyTypes;
  }
  /**
   * Optional. Additional information when `USER_ID` is one of the
   * `upload_key_types`.
   *
   * @param UserIdInfo $userIdInfo
   */
  public function setUserIdInfo(UserIdInfo $userIdInfo)
  {
    $this->userIdInfo = $userIdInfo;
  }
  /**
   * @return UserIdInfo
   */
  public function getUserIdInfo()
  {
    return $this->userIdInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestedUserListInfo::class, 'Google_Service_DataManager_IngestedUserListInfo');
