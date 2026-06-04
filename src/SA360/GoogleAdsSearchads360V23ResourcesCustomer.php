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

class GoogleAdsSearchads360V23ResourcesCustomer extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const ACCOUNT_LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCOUNT_LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * Client account (Facebook)
   */
  public const ACCOUNT_LEVEL_CLIENT_ACCOUNT_FACEBOOK = 'CLIENT_ACCOUNT_FACEBOOK';
  /**
   * Client account (Google Ads)
   */
  public const ACCOUNT_LEVEL_CLIENT_ACCOUNT_GOOGLE_ADS = 'CLIENT_ACCOUNT_GOOGLE_ADS';
  /**
   * Client account (Microsoft)
   */
  public const ACCOUNT_LEVEL_CLIENT_ACCOUNT_MICROSOFT = 'CLIENT_ACCOUNT_MICROSOFT';
  /**
   * Client account (Yahoo Japan)
   */
  public const ACCOUNT_LEVEL_CLIENT_ACCOUNT_YAHOO_JAPAN = 'CLIENT_ACCOUNT_YAHOO_JAPAN';
  /**
   * Client account (Engine Track)
   */
  public const ACCOUNT_LEVEL_CLIENT_ACCOUNT_ENGINE_TRACK = 'CLIENT_ACCOUNT_ENGINE_TRACK';
  /**
   * Top-level manager.
   */
  public const ACCOUNT_LEVEL_MANAGER = 'MANAGER';
  /**
   * Sub manager.
   */
  public const ACCOUNT_LEVEL_SUB_MANAGER = 'SUB_MANAGER';
  /**
   * Associate manager.
   */
  public const ACCOUNT_LEVEL_ASSOCIATE_MANAGER = 'ASSOCIATE_MANAGER';
  /**
   * Default value.
   */
  public const ACCOUNT_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown value.
   */
  public const ACCOUNT_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Account is able to serve ads.
   */
  public const ACCOUNT_STATUS_ENABLED = 'ENABLED';
  /**
   * Account is deactivated by the user.
   */
  public const ACCOUNT_STATUS_PAUSED = 'PAUSED';
  /**
   * Account is deactivated by an internal process.
   */
  public const ACCOUNT_STATUS_SUSPENDED = 'SUSPENDED';
  /**
   * Account is irrevocably deactivated.
   */
  public const ACCOUNT_STATUS_REMOVED = 'REMOVED';
  /**
   * Account is still in the process of setup, not ENABLED yet.
   */
  public const ACCOUNT_STATUS_DRAFT = 'DRAFT';
  /**
   * Not specified.
   */
  public const ACCOUNT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCOUNT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Baidu account.
   */
  public const ACCOUNT_TYPE_BAIDU = 'BAIDU';
  /**
   * Engine track account.
   */
  public const ACCOUNT_TYPE_ENGINE_TRACK = 'ENGINE_TRACK';
  /**
   * Facebook account.
   */
  public const ACCOUNT_TYPE_FACEBOOK = 'FACEBOOK';
  /**
   * Facebook account managed through gateway.
   */
  public const ACCOUNT_TYPE_FACEBOOK_GATEWAY = 'FACEBOOK_GATEWAY';
  /**
   * Google Ads account.
   */
  public const ACCOUNT_TYPE_GOOGLE_ADS = 'GOOGLE_ADS';
  /**
   * Microsoft Advertising account.
   */
  public const ACCOUNT_TYPE_MICROSOFT = 'MICROSOFT';
  /**
   * Search Ads 360 manager account.
   */
  public const ACCOUNT_TYPE_SEARCH_ADS_360 = 'SEARCH_ADS_360';
  /**
   * Yahoo Japan account.
   */
  public const ACCOUNT_TYPE_YAHOO_JAPAN = 'YAHOO_JAPAN';
  /**
   * Not specified.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign contains political advertising targeted towards the EU. The
   * campaign will be restricted from serving ads in the EU.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_CONTAINS_EU_POLITICAL_ADVERTISING = 'CONTAINS_EU_POLITICAL_ADVERTISING';
  /**
   * The campaign does not contain political advertising targeted towards the
   * EU. No additional serving restrictions will apply.
   */
  public const CONTAINS_EU_POLITICAL_ADVERTISING_DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING = 'DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Indicates an active account able to serve ads.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Indicates a canceled account unable to serve ads. Can be reactivated by an
   * admin user.
   */
  public const STATUS_CANCELED = 'CANCELED';
  /**
   * Indicates a suspended account unable to serve ads. May only be activated by
   * Google support.
   */
  public const STATUS_SUSPENDED = 'SUSPENDED';
  /**
   * Indicates a closed account unable to serve ads. Test account will also have
   * CLOSED status. Status is permanent and may not be reopened.
   */
  public const STATUS_CLOSED = 'CLOSED';
  /**
   * Not specified.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_UNKNOWN = 'UNKNOWN';
  /**
   * This option lets you show ads across all inventory on YouTube and video
   * partners that meet our standards for monetization. This option may be an
   * appropriate choice for brands that want maximum access to the full breadth
   * of videos eligible for ads, including, for example, videos that have strong
   * profanity in the context of comedy or a documentary, or excessive violence
   * as featured in video games.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_EXPANDED_INVENTORY = 'EXPANDED_INVENTORY';
  /**
   * This option lets you show ads across a wide range of content that's
   * appropriate for most brands, such as popular music videos, documentaries,
   * and movie trailers. The content you can show ads on is based on YouTube's
   * advertiser-friendly content guidelines that take into account, for example,
   * the strength or frequency of profanity, or the appropriateness of subject
   * matter like sensitive events. Ads won't show, for example, on content with
   * repeated strong profanity, strong sexual content, or graphic violence.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_STANDARD_INVENTORY = 'STANDARD_INVENTORY';
  /**
   * This option lets you show ads on a reduced range of content that's
   * appropriate for brands with particularly strict guidelines around
   * inappropriate language and sexual suggestiveness; above and beyond what
   * YouTube's advertiser-friendly content guidelines address. The videos
   * accessible in this sensitive category meet heightened requirements,
   * especially for inappropriate language and sexual suggestiveness. For
   * example, your ads will be excluded from showing on some of YouTube's most
   * popular music videos and other pop culture content across YouTube and
   * Google video partners.
   */
  public const VIDEO_BRAND_SAFETY_SUITABILITY_LIMITED_INVENTORY = 'LIMITED_INVENTORY';
  protected $collection_key = 'payPerConversionEligibilityFailureReasons';
  /**
   * Output only. The account level of the customer: Manager, Sub-manager,
   * Associate manager, Service account.
   *
   * @var string
   */
  public $accountLevel;
  /**
   * Output only. Account status, for example, Enabled, Paused, Removed, etc.
   *
   * @var string
   */
  public $accountStatus;
  /**
   * Output only. Engine account type, for example, Google Ads, Microsoft
   * Advertising, Yahoo Japan, Baidu, Facebook, Engine Track, etc.
   *
   * @var string
   */
  public $accountType;
  /**
   * Output only. The descriptive name of the associate manager.
   *
   * @var string
   */
  public $associateManagerDescriptiveName;
  /**
   * Output only. The customer ID of the associate manager. A 0 value indicates
   * that the customer has no SA360 associate manager.
   *
   * @var string
   */
  public $associateManagerId;
  /**
   * Whether auto-tagging is enabled for the customer.
   *
   * @var bool
   */
  public $autoTaggingEnabled;
  protected $callReportingSettingType = GoogleAdsSearchads360V23ResourcesCallReportingSetting::class;
  protected $callReportingSettingDataType = '';
  /**
   * Output only. Returns the advertiser self-declaration status of whether this
   * customer contains political advertising content targeted towards the
   * European Union. You can use the Google Ads UI to update this account-level
   * declaration, or use the API to update the self-declaration status of
   * individual campaigns.
   *
   * @var string
   */
  public $containsEuPoliticalAdvertising;
  protected $conversionTrackingSettingType = GoogleAdsSearchads360V23ResourcesConversionTrackingSetting::class;
  protected $conversionTrackingSettingDataType = '';
  /**
   * Output only. The timestamp when this customer was created. The timestamp is
   * in the customer's time zone and in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @var string
   */
  public $creationTime;
  /**
   * Immutable. The currency in which the account operates. A subset of the
   * currency codes from the ISO 4217 standard is supported.
   *
   * @var string
   */
  public $currencyCode;
  protected $customerAgreementSettingType = GoogleAdsSearchads360V23ResourcesCustomerAgreementSetting::class;
  protected $customerAgreementSettingDataType = '';
  /**
   * Optional, non-unique descriptive name of the customer.
   *
   * @var string
   */
  public $descriptiveName;
  protected $doubleClickCampaignManagerSettingType = GoogleAdsSearchads360V23ResourcesDoubleClickCampaignManagerSetting::class;
  protected $doubleClickCampaignManagerSettingDataType = '';
  /**
   * Output only. ID of the account in the external engine account.
   *
   * @var string
   */
  public $engineId;
  /**
   * The URL template for appending params to the final URL.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * Output only. Whether the Customer has a Partners program badge. If the
   * Customer is not associated with the Partners program, this will be false.
   * For more information, see
   * https://support.google.com/partners/answer/3125774.
   *
   * @var bool
   */
  public $hasPartnersBadge;
  /**
   * Output only. The ID of the customer.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. True if feed based image has been migrated to asset based
   * image.
   *
   * @var bool
   */
  public $imageAssetAutoMigrationDone;
  /**
   * Output only. Timestamp of migration from feed based image to asset base
   * image in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $imageAssetAutoMigrationDoneDateTime;
  /**
   * Output only. The datetime when this customer was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @var string
   */
  public $lastModifiedTime;
  protected $localServicesSettingsType = GoogleAdsSearchads360V23ResourcesLocalServicesSettings::class;
  protected $localServicesSettingsDataType = '';
  /**
   * Output only. True if feed based location has been migrated to asset based
   * location.
   *
   * @var bool
   */
  public $locationAssetAutoMigrationDone;
  /**
   * Output only. Timestamp of migration from feed based location to asset base
   * location in yyyy-MM-dd HH:mm:ss format.
   *
   * @var string
   */
  public $locationAssetAutoMigrationDoneDateTime;
  /**
   * Output only. Whether the customer is a manager.
   *
   * @var bool
   */
  public $manager;
  /**
   * Output only. The descriptive name of the manager.
   *
   * @var string
   */
  public $managerDescriptiveName;
  /**
   * Output only. The customer ID of the manager. A 0 value indicates that the
   * customer has no SA360 manager.
   *
   * @var string
   */
  public $managerId;
  /**
   * Output only. Optimization score of the customer. Optimization score is an
   * estimate of how well a customer's campaigns are set to perform. It ranges
   * from 0% (0.0) to 100% (1.0). This field is null for all manager customers,
   * and for unscored non-manager customers. See "About optimization score" at
   * https://support.google.com/google-ads/answer/9061546. This field is read-
   * only.
   *
   * @var 
   */
  public $optimizationScore;
  /**
   * Output only. Optimization score weight of the customer. Optimization score
   * weight can be used to compare/aggregate optimization scores across multiple
   * non-manager customers. The aggregate optimization score of a manager is
   * computed as the sum over all of their customers of
   * `Customer.optimization_score * Customer.optimization_score_weight`. This
   * field is 0 for all manager customers, and for unscored non-manager
   * customers. This field is read-only.
   *
   * @var 
   */
  public $optimizationScoreWeight;
  /**
   * Output only. Reasons why the customer is not eligible to use
   * PaymentMode.CONVERSIONS. If the list is empty, the customer is eligible.
   * This field is read-only.
   *
   * @var string[]
   */
  public $payPerConversionEligibilityFailureReasons;
  protected $remarketingSettingType = GoogleAdsSearchads360V23ResourcesRemarketingSetting::class;
  protected $remarketingSettingDataType = '';
  /**
   * Immutable. The resource name of the customer. Customer resource names have
   * the form: `customers/{customer_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the customer.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. The descriptive name of the sub manager.
   *
   * @var string
   */
  public $subManagerDescriptiveName;
  /**
   * Output only. The customer ID of the sub manager. A 0 value indicates that
   * the customer has no sub SA360 manager.
   *
   * @var string
   */
  public $subManagerId;
  /**
   * Output only. Whether the customer is a test account.
   *
   * @var bool
   */
  public $testAccount;
  /**
   * Immutable. The local timezone ID of the customer.
   *
   * @var string
   */
  public $timeZone;
  /**
   * The URL template for constructing a tracking URL out of parameters.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  /**
   * Brand Safety setting at the account level. Allows for selecting an
   * inventory type to show your ads on content that is the right fit for your
   * brand. See https://support.google.com/google-ads/answer/7515513.
   *
   * @var string
   */
  public $videoBrandSafetySuitability;
  protected $videoCustomerType = GoogleAdsSearchads360V23ResourcesVideoCustomer::class;
  protected $videoCustomerDataType = '';

  /**
   * Output only. The account level of the customer: Manager, Sub-manager,
   * Associate manager, Service account.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CLIENT_ACCOUNT_FACEBOOK,
   * CLIENT_ACCOUNT_GOOGLE_ADS, CLIENT_ACCOUNT_MICROSOFT,
   * CLIENT_ACCOUNT_YAHOO_JAPAN, CLIENT_ACCOUNT_ENGINE_TRACK, MANAGER,
   * SUB_MANAGER, ASSOCIATE_MANAGER
   *
   * @param self::ACCOUNT_LEVEL_* $accountLevel
   */
  public function setAccountLevel($accountLevel)
  {
    $this->accountLevel = $accountLevel;
  }
  /**
   * @return self::ACCOUNT_LEVEL_*
   */
  public function getAccountLevel()
  {
    return $this->accountLevel;
  }
  /**
   * Output only. Account status, for example, Enabled, Paused, Removed, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, PAUSED, SUSPENDED, REMOVED,
   * DRAFT
   *
   * @param self::ACCOUNT_STATUS_* $accountStatus
   */
  public function setAccountStatus($accountStatus)
  {
    $this->accountStatus = $accountStatus;
  }
  /**
   * @return self::ACCOUNT_STATUS_*
   */
  public function getAccountStatus()
  {
    return $this->accountStatus;
  }
  /**
   * Output only. Engine account type, for example, Google Ads, Microsoft
   * Advertising, Yahoo Japan, Baidu, Facebook, Engine Track, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BAIDU, ENGINE_TRACK, FACEBOOK,
   * FACEBOOK_GATEWAY, GOOGLE_ADS, MICROSOFT, SEARCH_ADS_360, YAHOO_JAPAN
   *
   * @param self::ACCOUNT_TYPE_* $accountType
   */
  public function setAccountType($accountType)
  {
    $this->accountType = $accountType;
  }
  /**
   * @return self::ACCOUNT_TYPE_*
   */
  public function getAccountType()
  {
    return $this->accountType;
  }
  /**
   * Output only. The descriptive name of the associate manager.
   *
   * @param string $associateManagerDescriptiveName
   */
  public function setAssociateManagerDescriptiveName($associateManagerDescriptiveName)
  {
    $this->associateManagerDescriptiveName = $associateManagerDescriptiveName;
  }
  /**
   * @return string
   */
  public function getAssociateManagerDescriptiveName()
  {
    return $this->associateManagerDescriptiveName;
  }
  /**
   * Output only. The customer ID of the associate manager. A 0 value indicates
   * that the customer has no SA360 associate manager.
   *
   * @param string $associateManagerId
   */
  public function setAssociateManagerId($associateManagerId)
  {
    $this->associateManagerId = $associateManagerId;
  }
  /**
   * @return string
   */
  public function getAssociateManagerId()
  {
    return $this->associateManagerId;
  }
  /**
   * Whether auto-tagging is enabled for the customer.
   *
   * @param bool $autoTaggingEnabled
   */
  public function setAutoTaggingEnabled($autoTaggingEnabled)
  {
    $this->autoTaggingEnabled = $autoTaggingEnabled;
  }
  /**
   * @return bool
   */
  public function getAutoTaggingEnabled()
  {
    return $this->autoTaggingEnabled;
  }
  /**
   * Call reporting setting for a customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesCallReportingSetting $callReportingSetting
   */
  public function setCallReportingSetting(GoogleAdsSearchads360V23ResourcesCallReportingSetting $callReportingSetting)
  {
    $this->callReportingSetting = $callReportingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCallReportingSetting
   */
  public function getCallReportingSetting()
  {
    return $this->callReportingSetting;
  }
  /**
   * Output only. Returns the advertiser self-declaration status of whether this
   * customer contains political advertising content targeted towards the
   * European Union. You can use the Google Ads UI to update this account-level
   * declaration, or use the API to update the self-declaration status of
   * individual campaigns.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONTAINS_EU_POLITICAL_ADVERTISING,
   * DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING
   *
   * @param self::CONTAINS_EU_POLITICAL_ADVERTISING_* $containsEuPoliticalAdvertising
   */
  public function setContainsEuPoliticalAdvertising($containsEuPoliticalAdvertising)
  {
    $this->containsEuPoliticalAdvertising = $containsEuPoliticalAdvertising;
  }
  /**
   * @return self::CONTAINS_EU_POLITICAL_ADVERTISING_*
   */
  public function getContainsEuPoliticalAdvertising()
  {
    return $this->containsEuPoliticalAdvertising;
  }
  /**
   * Conversion tracking setting for a customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesConversionTrackingSetting $conversionTrackingSetting
   */
  public function setConversionTrackingSetting(GoogleAdsSearchads360V23ResourcesConversionTrackingSetting $conversionTrackingSetting)
  {
    $this->conversionTrackingSetting = $conversionTrackingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesConversionTrackingSetting
   */
  public function getConversionTrackingSetting()
  {
    return $this->conversionTrackingSetting;
  }
  /**
   * Output only. The timestamp when this customer was created. The timestamp is
   * in the customer's time zone and in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Immutable. The currency in which the account operates. A subset of the
   * currency codes from the ISO 4217 standard is supported.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Output only. Customer Agreement Setting for a customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerAgreementSetting $customerAgreementSetting
   */
  public function setCustomerAgreementSetting(GoogleAdsSearchads360V23ResourcesCustomerAgreementSetting $customerAgreementSetting)
  {
    $this->customerAgreementSetting = $customerAgreementSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerAgreementSetting
   */
  public function getCustomerAgreementSetting()
  {
    return $this->customerAgreementSetting;
  }
  /**
   * Optional, non-unique descriptive name of the customer.
   *
   * @param string $descriptiveName
   */
  public function setDescriptiveName($descriptiveName)
  {
    $this->descriptiveName = $descriptiveName;
  }
  /**
   * @return string
   */
  public function getDescriptiveName()
  {
    return $this->descriptiveName;
  }
  /**
   * Output only. DoubleClick Campaign Manager (DCM) setting for a manager
   * customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesDoubleClickCampaignManagerSetting $doubleClickCampaignManagerSetting
   */
  public function setDoubleClickCampaignManagerSetting(GoogleAdsSearchads360V23ResourcesDoubleClickCampaignManagerSetting $doubleClickCampaignManagerSetting)
  {
    $this->doubleClickCampaignManagerSetting = $doubleClickCampaignManagerSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDoubleClickCampaignManagerSetting
   */
  public function getDoubleClickCampaignManagerSetting()
  {
    return $this->doubleClickCampaignManagerSetting;
  }
  /**
   * Output only. ID of the account in the external engine account.
   *
   * @param string $engineId
   */
  public function setEngineId($engineId)
  {
    $this->engineId = $engineId;
  }
  /**
   * @return string
   */
  public function getEngineId()
  {
    return $this->engineId;
  }
  /**
   * The URL template for appending params to the final URL.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * Output only. Whether the Customer has a Partners program badge. If the
   * Customer is not associated with the Partners program, this will be false.
   * For more information, see
   * https://support.google.com/partners/answer/3125774.
   *
   * @param bool $hasPartnersBadge
   */
  public function setHasPartnersBadge($hasPartnersBadge)
  {
    $this->hasPartnersBadge = $hasPartnersBadge;
  }
  /**
   * @return bool
   */
  public function getHasPartnersBadge()
  {
    return $this->hasPartnersBadge;
  }
  /**
   * Output only. The ID of the customer.
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
   * Output only. True if feed based image has been migrated to asset based
   * image.
   *
   * @param bool $imageAssetAutoMigrationDone
   */
  public function setImageAssetAutoMigrationDone($imageAssetAutoMigrationDone)
  {
    $this->imageAssetAutoMigrationDone = $imageAssetAutoMigrationDone;
  }
  /**
   * @return bool
   */
  public function getImageAssetAutoMigrationDone()
  {
    return $this->imageAssetAutoMigrationDone;
  }
  /**
   * Output only. Timestamp of migration from feed based image to asset base
   * image in yyyy-MM-dd HH:mm:ss format.
   *
   * @param string $imageAssetAutoMigrationDoneDateTime
   */
  public function setImageAssetAutoMigrationDoneDateTime($imageAssetAutoMigrationDoneDateTime)
  {
    $this->imageAssetAutoMigrationDoneDateTime = $imageAssetAutoMigrationDoneDateTime;
  }
  /**
   * @return string
   */
  public function getImageAssetAutoMigrationDoneDateTime()
  {
    return $this->imageAssetAutoMigrationDoneDateTime;
  }
  /**
   * Output only. The datetime when this customer was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @param string $lastModifiedTime
   */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /**
   * @return string
   */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /**
   * Output only. Settings for Local Services customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesLocalServicesSettings $localServicesSettings
   */
  public function setLocalServicesSettings(GoogleAdsSearchads360V23ResourcesLocalServicesSettings $localServicesSettings)
  {
    $this->localServicesSettings = $localServicesSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLocalServicesSettings
   */
  public function getLocalServicesSettings()
  {
    return $this->localServicesSettings;
  }
  /**
   * Output only. True if feed based location has been migrated to asset based
   * location.
   *
   * @param bool $locationAssetAutoMigrationDone
   */
  public function setLocationAssetAutoMigrationDone($locationAssetAutoMigrationDone)
  {
    $this->locationAssetAutoMigrationDone = $locationAssetAutoMigrationDone;
  }
  /**
   * @return bool
   */
  public function getLocationAssetAutoMigrationDone()
  {
    return $this->locationAssetAutoMigrationDone;
  }
  /**
   * Output only. Timestamp of migration from feed based location to asset base
   * location in yyyy-MM-dd HH:mm:ss format.
   *
   * @param string $locationAssetAutoMigrationDoneDateTime
   */
  public function setLocationAssetAutoMigrationDoneDateTime($locationAssetAutoMigrationDoneDateTime)
  {
    $this->locationAssetAutoMigrationDoneDateTime = $locationAssetAutoMigrationDoneDateTime;
  }
  /**
   * @return string
   */
  public function getLocationAssetAutoMigrationDoneDateTime()
  {
    return $this->locationAssetAutoMigrationDoneDateTime;
  }
  /**
   * Output only. Whether the customer is a manager.
   *
   * @param bool $manager
   */
  public function setManager($manager)
  {
    $this->manager = $manager;
  }
  /**
   * @return bool
   */
  public function getManager()
  {
    return $this->manager;
  }
  /**
   * Output only. The descriptive name of the manager.
   *
   * @param string $managerDescriptiveName
   */
  public function setManagerDescriptiveName($managerDescriptiveName)
  {
    $this->managerDescriptiveName = $managerDescriptiveName;
  }
  /**
   * @return string
   */
  public function getManagerDescriptiveName()
  {
    return $this->managerDescriptiveName;
  }
  /**
   * Output only. The customer ID of the manager. A 0 value indicates that the
   * customer has no SA360 manager.
   *
   * @param string $managerId
   */
  public function setManagerId($managerId)
  {
    $this->managerId = $managerId;
  }
  /**
   * @return string
   */
  public function getManagerId()
  {
    return $this->managerId;
  }
  public function setOptimizationScore($optimizationScore)
  {
    $this->optimizationScore = $optimizationScore;
  }
  public function getOptimizationScore()
  {
    return $this->optimizationScore;
  }
  public function setOptimizationScoreWeight($optimizationScoreWeight)
  {
    $this->optimizationScoreWeight = $optimizationScoreWeight;
  }
  public function getOptimizationScoreWeight()
  {
    return $this->optimizationScoreWeight;
  }
  /**
   * Output only. Reasons why the customer is not eligible to use
   * PaymentMode.CONVERSIONS. If the list is empty, the customer is eligible.
   * This field is read-only.
   *
   * @param string[] $payPerConversionEligibilityFailureReasons
   */
  public function setPayPerConversionEligibilityFailureReasons($payPerConversionEligibilityFailureReasons)
  {
    $this->payPerConversionEligibilityFailureReasons = $payPerConversionEligibilityFailureReasons;
  }
  /**
   * @return string[]
   */
  public function getPayPerConversionEligibilityFailureReasons()
  {
    return $this->payPerConversionEligibilityFailureReasons;
  }
  /**
   * Output only. Remarketing setting for a customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesRemarketingSetting $remarketingSetting
   */
  public function setRemarketingSetting(GoogleAdsSearchads360V23ResourcesRemarketingSetting $remarketingSetting)
  {
    $this->remarketingSetting = $remarketingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRemarketingSetting
   */
  public function getRemarketingSetting()
  {
    return $this->remarketingSetting;
  }
  /**
   * Immutable. The resource name of the customer. Customer resource names have
   * the form: `customers/{customer_id}`
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
   * Output only. The status of the customer.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, CANCELED, SUSPENDED, CLOSED
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
   * Output only. The descriptive name of the sub manager.
   *
   * @param string $subManagerDescriptiveName
   */
  public function setSubManagerDescriptiveName($subManagerDescriptiveName)
  {
    $this->subManagerDescriptiveName = $subManagerDescriptiveName;
  }
  /**
   * @return string
   */
  public function getSubManagerDescriptiveName()
  {
    return $this->subManagerDescriptiveName;
  }
  /**
   * Output only. The customer ID of the sub manager. A 0 value indicates that
   * the customer has no sub SA360 manager.
   *
   * @param string $subManagerId
   */
  public function setSubManagerId($subManagerId)
  {
    $this->subManagerId = $subManagerId;
  }
  /**
   * @return string
   */
  public function getSubManagerId()
  {
    return $this->subManagerId;
  }
  /**
   * Output only. Whether the customer is a test account.
   *
   * @param bool $testAccount
   */
  public function setTestAccount($testAccount)
  {
    $this->testAccount = $testAccount;
  }
  /**
   * @return bool
   */
  public function getTestAccount()
  {
    return $this->testAccount;
  }
  /**
   * Immutable. The local timezone ID of the customer.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /**
   * The URL template for constructing a tracking URL out of parameters.
   *
   * @param string $trackingUrlTemplate
   */
  public function setTrackingUrlTemplate($trackingUrlTemplate)
  {
    $this->trackingUrlTemplate = $trackingUrlTemplate;
  }
  /**
   * @return string
   */
  public function getTrackingUrlTemplate()
  {
    return $this->trackingUrlTemplate;
  }
  /**
   * Brand Safety setting at the account level. Allows for selecting an
   * inventory type to show your ads on content that is the right fit for your
   * brand. See https://support.google.com/google-ads/answer/7515513.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXPANDED_INVENTORY,
   * STANDARD_INVENTORY, LIMITED_INVENTORY
   *
   * @param self::VIDEO_BRAND_SAFETY_SUITABILITY_* $videoBrandSafetySuitability
   */
  public function setVideoBrandSafetySuitability($videoBrandSafetySuitability)
  {
    $this->videoBrandSafetySuitability = $videoBrandSafetySuitability;
  }
  /**
   * @return self::VIDEO_BRAND_SAFETY_SUITABILITY_*
   */
  public function getVideoBrandSafetySuitability()
  {
    return $this->videoBrandSafetySuitability;
  }
  /**
   * Video specific information about a Customer.
   *
   * @param GoogleAdsSearchads360V23ResourcesVideoCustomer $videoCustomer
   */
  public function setVideoCustomer(GoogleAdsSearchads360V23ResourcesVideoCustomer $videoCustomer)
  {
    $this->videoCustomer = $videoCustomer;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesVideoCustomer
   */
  public function getVideoCustomer()
  {
    return $this->videoCustomer;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomer::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomer');
