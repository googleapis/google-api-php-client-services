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

class GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const CLIENT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CLIENT_UNKNOWN = 'UNKNOWN';
  /**
   * Google Ads API.
   */
  public const CLIENT_GOOGLE_ADS_API = 'GOOGLE_ADS_API';
  /**
   * Google Ads web client, which could include multiple sources like Ads UI,
   * SFTP, etc.
   */
  public const CLIENT_GOOGLE_ADS_WEB_CLIENT = 'GOOGLE_ADS_WEB_CLIENT';
  /**
   * Connection platform.
   */
  public const CLIENT_ADS_DATA_CONNECTOR = 'ADS_DATA_CONNECTOR';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Your offline data ingestion setup is active and optimal for downstream
   * processing.
   */
  public const STATUS_EXCELLENT = 'EXCELLENT';
  /**
   * Your offline ingestion setup is active, but there are further improvements
   * you could make. See alerts.
   */
  public const STATUS_GOOD = 'GOOD';
  /**
   * Your offline ingestion setup is active, but there are errors that require
   * your attention. See alerts.
   */
  public const STATUS_NEEDS_ATTENTION = 'NEEDS_ATTENTION';
  /**
   * Your offline ingestion setup has not received data in the last 28 days,
   * there may be something wrong.
   */
  public const STATUS_NO_RECENT_UPLOAD = 'NO_RECENT_UPLOAD';
  protected $collection_key = 'jobSummaries';
  protected $alertsType = GoogleAdsSearchads360V23ResourcesOfflineConversionAlert::class;
  protected $alertsDataType = 'array';
  /**
   * Output only. Client type of the upload event.
   *
   * @var string
   */
  public $client;
  /**
   * Output only. Conversion action id.
   *
   * @var string
   */
  public $conversionActionId;
  /**
   * Output only. The name of the conversion action.
   *
   * @var string
   */
  public $conversionActionName;
  protected $dailySummariesType = GoogleAdsSearchads360V23ResourcesOfflineConversionSummary::class;
  protected $dailySummariesDataType = 'array';
  protected $jobSummariesType = GoogleAdsSearchads360V23ResourcesOfflineConversionSummary::class;
  protected $jobSummariesDataType = 'array';
  /**
   * Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
   * hh:mm:ss", and it's in the time zone of the Google Ads account.
   *
   * @var string
   */
  public $lastUploadDateTime;
  /**
   * Output only. Total count of pending uploaded events.
   *
   * @var string
   */
  public $pendingEventCount;
  /**
   * Output only. The resource name of the offline conversion upload summary at
   * conversion action level. Offline conversion upload conversion action
   * summary resource names have the form: `customers/{customer_id}/offlineConve
   * rsionUploadConversionActionSummaries/{conversion_action_id}~{client}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Overall status for offline conversion upload conversion action
   * summary. Status is generated from most recent calendar day with upload
   * stats.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Total count of successful uploaded events.
   *
   * @var string
   */
  public $successfulEventCount;
  /**
   * Output only. Total count of uploaded events.
   *
   * @var string
   */
  public $totalEventCount;

  /**
   * Output only. Details for each error code. Alerts are generated from most
   * recent calendar day with upload stats.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineConversionAlert[] $alerts
   */
  public function setAlerts($alerts)
  {
    $this->alerts = $alerts;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineConversionAlert[]
   */
  public function getAlerts()
  {
    return $this->alerts;
  }
  /**
   * Output only. Client type of the upload event.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GOOGLE_ADS_API,
   * GOOGLE_ADS_WEB_CLIENT, ADS_DATA_CONNECTOR
   *
   * @param self::CLIENT_* $client
   */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /**
   * @return self::CLIENT_*
   */
  public function getClient()
  {
    return $this->client;
  }
  /**
   * Output only. Conversion action id.
   *
   * @param string $conversionActionId
   */
  public function setConversionActionId($conversionActionId)
  {
    $this->conversionActionId = $conversionActionId;
  }
  /**
   * @return string
   */
  public function getConversionActionId()
  {
    return $this->conversionActionId;
  }
  /**
   * Output only. The name of the conversion action.
   *
   * @param string $conversionActionName
   */
  public function setConversionActionName($conversionActionName)
  {
    $this->conversionActionName = $conversionActionName;
  }
  /**
   * @return string
   */
  public function getConversionActionName()
  {
    return $this->conversionActionName;
  }
  /**
   * Output only. Summary of history stats by last N days.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineConversionSummary[] $dailySummaries
   */
  public function setDailySummaries($dailySummaries)
  {
    $this->dailySummaries = $dailySummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineConversionSummary[]
   */
  public function getDailySummaries()
  {
    return $this->dailySummaries;
  }
  /**
   * Output only. Summary of history stats by last N jobs.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineConversionSummary[] $jobSummaries
   */
  public function setJobSummaries($jobSummaries)
  {
    $this->jobSummaries = $jobSummaries;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineConversionSummary[]
   */
  public function getJobSummaries()
  {
    return $this->jobSummaries;
  }
  /**
   * Output only. Date for the latest upload batch. The format is "yyyy-mm-dd
   * hh:mm:ss", and it's in the time zone of the Google Ads account.
   *
   * @param string $lastUploadDateTime
   */
  public function setLastUploadDateTime($lastUploadDateTime)
  {
    $this->lastUploadDateTime = $lastUploadDateTime;
  }
  /**
   * @return string
   */
  public function getLastUploadDateTime()
  {
    return $this->lastUploadDateTime;
  }
  /**
   * Output only. Total count of pending uploaded events.
   *
   * @param string $pendingEventCount
   */
  public function setPendingEventCount($pendingEventCount)
  {
    $this->pendingEventCount = $pendingEventCount;
  }
  /**
   * @return string
   */
  public function getPendingEventCount()
  {
    return $this->pendingEventCount;
  }
  /**
   * Output only. The resource name of the offline conversion upload summary at
   * conversion action level. Offline conversion upload conversion action
   * summary resource names have the form: `customers/{customer_id}/offlineConve
   * rsionUploadConversionActionSummaries/{conversion_action_id}~{client}`
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
   * Output only. Overall status for offline conversion upload conversion action
   * summary. Status is generated from most recent calendar day with upload
   * stats.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXCELLENT, GOOD, NEEDS_ATTENTION,
   * NO_RECENT_UPLOAD
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
   * Output only. Total count of successful uploaded events.
   *
   * @param string $successfulEventCount
   */
  public function setSuccessfulEventCount($successfulEventCount)
  {
    $this->successfulEventCount = $successfulEventCount;
  }
  /**
   * @return string
   */
  public function getSuccessfulEventCount()
  {
    return $this->successfulEventCount;
  }
  /**
   * Output only. Total count of uploaded events.
   *
   * @param string $totalEventCount
   */
  public function setTotalEventCount($totalEventCount)
  {
    $this->totalEventCount = $totalEventCount;
  }
  /**
   * @return string
   */
  public function getTotalEventCount()
  {
    return $this->totalEventCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOfflineConversionUploadConversionActionSummary');
