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

class GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData extends \Google\Collection
{
  protected $collection_key = 'leadFormSubmissionFields';
  /**
   * Output only. AdGroup associated with the submitted lead form.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. AdGroupAd associated with the submitted lead form.
   *
   * @var string
   */
  public $adGroupAd;
  /**
   * Output only. Asset associated with the submitted lead form.
   *
   * @var string
   */
  public $asset;
  /**
   * Output only. Campaign associated with the submitted lead form.
   *
   * @var string
   */
  public $campaign;
  protected $customLeadFormSubmissionFieldsType = GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField::class;
  protected $customLeadFormSubmissionFieldsDataType = 'array';
  /**
   * Output only. Google Click Id associated with the submissed lead form.
   *
   * @var string
   */
  public $gclid;
  /**
   * Output only. ID of this lead form submission.
   *
   * @var string
   */
  public $id;
  protected $leadFormSubmissionFieldsType = GoogleAdsSearchads360V23ResourcesLeadFormSubmissionField::class;
  protected $leadFormSubmissionFieldsDataType = 'array';
  /**
   * Output only. The resource name of the lead form submission data. Lead form
   * submission data resource names have the form: `customers/{customer_id}/lead
   * FormSubmissionData/{lead_form_submission_data_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The date and time at which the lead form was submitted. The
   * format is "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01
   * 12:32:45-08:00".
   *
   * @var string
   */
  public $submissionDateTime;

  /**
   * Output only. AdGroup associated with the submitted lead form.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. AdGroupAd associated with the submitted lead form.
   *
   * @param string $adGroupAd
   */
  public function setAdGroupAd($adGroupAd)
  {
    $this->adGroupAd = $adGroupAd;
  }
  /**
   * @return string
   */
  public function getAdGroupAd()
  {
    return $this->adGroupAd;
  }
  /**
   * Output only. Asset associated with the submitted lead form.
   *
   * @param string $asset
   */
  public function setAsset($asset)
  {
    $this->asset = $asset;
  }
  /**
   * @return string
   */
  public function getAsset()
  {
    return $this->asset;
  }
  /**
   * Output only. Campaign associated with the submitted lead form.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. Submission data associated with a custom lead form.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField[] $customLeadFormSubmissionFields
   */
  public function setCustomLeadFormSubmissionFields($customLeadFormSubmissionFields)
  {
    $this->customLeadFormSubmissionFields = $customLeadFormSubmissionFields;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomLeadFormSubmissionField[]
   */
  public function getCustomLeadFormSubmissionFields()
  {
    return $this->customLeadFormSubmissionFields;
  }
  /**
   * Output only. Google Click Id associated with the submissed lead form.
   *
   * @param string $gclid
   */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /**
   * @return string
   */
  public function getGclid()
  {
    return $this->gclid;
  }
  /**
   * Output only. ID of this lead form submission.
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
   * Output only. Submission data associated with a lead form.
   *
   * @param GoogleAdsSearchads360V23ResourcesLeadFormSubmissionField[] $leadFormSubmissionFields
   */
  public function setLeadFormSubmissionFields($leadFormSubmissionFields)
  {
    $this->leadFormSubmissionFields = $leadFormSubmissionFields;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLeadFormSubmissionField[]
   */
  public function getLeadFormSubmissionFields()
  {
    return $this->leadFormSubmissionFields;
  }
  /**
   * Output only. The resource name of the lead form submission data. Lead form
   * submission data resource names have the form: `customers/{customer_id}/lead
   * FormSubmissionData/{lead_form_submission_data_id}`
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
   * Output only. The date and time at which the lead form was submitted. The
   * format is "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01
   * 12:32:45-08:00".
   *
   * @param string $submissionDateTime
   */
  public function setSubmissionDateTime($submissionDateTime)
  {
    $this->submissionDateTime = $submissionDateTime;
  }
  /**
   * @return string
   */
  public function getSubmissionDateTime()
  {
    return $this->submissionDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLeadFormSubmissionData');
