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

class GoogleAdsSearchads360V23ResourcesOfflineUserDataJob extends \Google\Model
{
  /**
   * Not specified.
   */
  public const FAILURE_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const FAILURE_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The matched transactions are insufficient.
   */
  public const FAILURE_REASON_INSUFFICIENT_MATCHED_TRANSACTIONS = 'INSUFFICIENT_MATCHED_TRANSACTIONS';
  /**
   * The uploaded transactions are insufficient.
   */
  public const FAILURE_REASON_INSUFFICIENT_TRANSACTIONS = 'INSUFFICIENT_TRANSACTIONS';
  /**
   * The average transaction value is unusually high for your account. If this
   * is intended, contact support to request an exception. Learn more at
   * https://support.google.com/google-ads/answer/10018944#transaction_value
   */
  public const FAILURE_REASON_HIGH_AVERAGE_TRANSACTION_VALUE = 'HIGH_AVERAGE_TRANSACTION_VALUE';
  /**
   * The average transaction value is unusually low for your account. If this is
   * intended, contact support to request an exception. Learn more at
   * https://support.google.com/google-ads/answer/10018944#transaction_value
   */
  public const FAILURE_REASON_LOW_AVERAGE_TRANSACTION_VALUE = 'LOW_AVERAGE_TRANSACTION_VALUE';
  /**
   * There's a currency code that you haven't used before in your uploads. If
   * this is intended, contact support to request an exception. Learn more at
   * https://support.google.com/google-ads/answer/10018944#Unrecognized_currency
   */
  public const FAILURE_REASON_NEWLY_OBSERVED_CURRENCY_CODE = 'NEWLY_OBSERVED_CURRENCY_CODE';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The job has been successfully created and pending for uploading.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * Upload(s) have been accepted and data is being processed.
   */
  public const STATUS_RUNNING = 'RUNNING';
  /**
   * Uploaded data has been successfully processed. The job might have no
   * operations, which can happen if the job was run without any operations
   * added, or if all operations failed validation individually when attempting
   * to add them to the job.
   */
  public const STATUS_SUCCESS = 'SUCCESS';
  /**
   * Uploaded data has failed to be processed. Some operations may have been
   * successfully processed.
   */
  public const STATUS_FAILED = 'FAILED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Store Sales Direct data for self service.
   */
  public const TYPE_STORE_SALES_UPLOAD_FIRST_PARTY = 'STORE_SALES_UPLOAD_FIRST_PARTY';
  /**
   * Store Sales Direct data for third party.
   */
  public const TYPE_STORE_SALES_UPLOAD_THIRD_PARTY = 'STORE_SALES_UPLOAD_THIRD_PARTY';
  /**
   * Customer Match user list data.
   */
  public const TYPE_CUSTOMER_MATCH_USER_LIST = 'CUSTOMER_MATCH_USER_LIST';
  /**
   * Customer Match with attribute data.
   */
  public const TYPE_CUSTOMER_MATCH_WITH_ATTRIBUTES = 'CUSTOMER_MATCH_WITH_ATTRIBUTES';
  protected $customerMatchUserListMetadataType = GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata::class;
  protected $customerMatchUserListMetadataDataType = '';
  /**
   * Immutable. User specified job ID.
   *
   * @var string
   */
  public $externalId;
  /**
   * Output only. Reason for the processing failure, if status is FAILED.
   *
   * @var string
   */
  public $failureReason;
  /**
   * Output only. ID of this offline user data job.
   *
   * @var string
   */
  public $id;
  protected $operationMetadataType = GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata::class;
  protected $operationMetadataDataType = '';
  /**
   * Immutable. The resource name of the offline user data job. Offline user
   * data job resource names have the form:
   * `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Status of the job.
   *
   * @var string
   */
  public $status;
  protected $storeSalesMetadataType = GoogleAdsSearchads360V23CommonStoreSalesMetadata::class;
  protected $storeSalesMetadataDataType = '';
  /**
   * Immutable. Type of the job.
   *
   * @var string
   */
  public $type;

  /**
   * Immutable. Metadata for data updates to a CRM-based user list.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata $customerMatchUserListMetadata
   */
  public function setCustomerMatchUserListMetadata(GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata $customerMatchUserListMetadata)
  {
    $this->customerMatchUserListMetadata = $customerMatchUserListMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata
   */
  public function getCustomerMatchUserListMetadata()
  {
    return $this->customerMatchUserListMetadata;
  }
  /**
   * Immutable. User specified job ID.
   *
   * @param string $externalId
   */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  /**
   * @return string
   */
  public function getExternalId()
  {
    return $this->externalId;
  }
  /**
   * Output only. Reason for the processing failure, if status is FAILED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INSUFFICIENT_MATCHED_TRANSACTIONS,
   * INSUFFICIENT_TRANSACTIONS, HIGH_AVERAGE_TRANSACTION_VALUE,
   * LOW_AVERAGE_TRANSACTION_VALUE, NEWLY_OBSERVED_CURRENCY_CODE
   *
   * @param self::FAILURE_REASON_* $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return self::FAILURE_REASON_*
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * Output only. ID of this offline user data job.
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
   * Output only. Metadata of offline user data job depicting match rate range.
   *
   * @param GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata $operationMetadata
   */
  public function setOperationMetadata(GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata $operationMetadata)
  {
    $this->operationMetadata = $operationMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesOfflineUserDataJobMetadata
   */
  public function getOperationMetadata()
  {
    return $this->operationMetadata;
  }
  /**
   * Immutable. The resource name of the offline user data job. Offline user
   * data job resource names have the form:
   * `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
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
   * Output only. Status of the job.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, RUNNING, SUCCESS, FAILED
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
   * Immutable. Metadata for store sales data update.
   *
   * @param GoogleAdsSearchads360V23CommonStoreSalesMetadata $storeSalesMetadata
   */
  public function setStoreSalesMetadata(GoogleAdsSearchads360V23CommonStoreSalesMetadata $storeSalesMetadata)
  {
    $this->storeSalesMetadata = $storeSalesMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonStoreSalesMetadata
   */
  public function getStoreSalesMetadata()
  {
    return $this->storeSalesMetadata;
  }
  /**
   * Immutable. Type of the job.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, STORE_SALES_UPLOAD_FIRST_PARTY,
   * STORE_SALES_UPLOAD_THIRD_PARTY, CUSTOMER_MATCH_USER_LIST,
   * CUSTOMER_MATCH_WITH_ATTRIBUTES
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOfflineUserDataJob::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOfflineUserDataJob');
