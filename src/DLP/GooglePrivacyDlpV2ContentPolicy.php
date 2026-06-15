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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2ContentPolicy extends \Google\Collection
{
  protected $collection_key = 'rules';
  /**
   * Output only. The creation timestamp of a contentPolicy; output-only field.
   *
   * @var string
   */
  public $createTime;
  protected $defaultActionType = GooglePrivacyDlpV2PolicyAction::class;
  protected $defaultActionDataType = '';
  /**
   * Optional. Display name (max 63 chars)
   *
   * @var string
   */
  public $displayName;
  protected $errorsType = GooglePrivacyDlpV2Error::class;
  protected $errorsDataType = 'array';
  protected $failedToScanSupportedFileTypeType = GooglePrivacyDlpV2PolicyAction::class;
  protected $failedToScanSupportedFileTypeDataType = '';
  protected $inputTooLargeType = GooglePrivacyDlpV2PolicyAction::class;
  protected $inputTooLargeDataType = '';
  protected $inspectConfigType = GooglePrivacyDlpV2InspectConfig::class;
  protected $inspectConfigDataType = '';
  protected $inspectTemplateType = GooglePrivacyDlpV2InspectTemplate::class;
  protected $inspectTemplateDataType = '';
  protected $loggingConfigsType = GooglePrivacyDlpV2LoggingConfig::class;
  protected $loggingConfigsDataType = 'array';
  /**
   * Output only. Resource name of the policy.
   *
   * @var string
   */
  public $name;
  protected $rulesType = GooglePrivacyDlpV2PolicyRule::class;
  protected $rulesDataType = 'array';
  protected $unsupportedFileTypeType = GooglePrivacyDlpV2PolicyAction::class;
  protected $unsupportedFileTypeDataType = '';
  /**
   * Output only. The last update timestamp of a contentPolicy; output-only
   * field.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The creation timestamp of a contentPolicy; output-only field.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Action to take if the content is scanned and no rules match. Defaults to
   * returning an ALLOW verdict if not set.
   *
   * @param GooglePrivacyDlpV2PolicyAction $defaultAction
   */
  public function setDefaultAction(GooglePrivacyDlpV2PolicyAction $defaultAction)
  {
    $this->defaultAction = $defaultAction;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyAction
   */
  public function getDefaultAction()
  {
    return $this->defaultAction;
  }
  /**
   * Optional. Display name (max 63 chars)
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. A stream of errors encountered when the policy was applied.
   * Output only field. Will return the last 100 errors. Whenever the policy is
   * modified this list will be cleared.
   *
   * @param GooglePrivacyDlpV2Error[] $errors
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return GooglePrivacyDlpV2Error[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * Optional. Action to take if the content is a supported file type and size
   * but fails to be scanned, for example because the file is encrypted or
   * corrupted.
   *
   * @param GooglePrivacyDlpV2PolicyAction $failedToScanSupportedFileType
   */
  public function setFailedToScanSupportedFileType(GooglePrivacyDlpV2PolicyAction $failedToScanSupportedFileType)
  {
    $this->failedToScanSupportedFileType = $failedToScanSupportedFileType;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyAction
   */
  public function getFailedToScanSupportedFileType()
  {
    return $this->failedToScanSupportedFileType;
  }
  /**
   * Optional. Action to take if the content is a supported file type but is too
   * large to be scanned.
   *
   * @param GooglePrivacyDlpV2PolicyAction $inputTooLarge
   */
  public function setInputTooLarge(GooglePrivacyDlpV2PolicyAction $inputTooLarge)
  {
    $this->inputTooLarge = $inputTooLarge;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyAction
   */
  public function getInputTooLarge()
  {
    return $this->inputTooLarge;
  }
  /**
   * Optional. InspectConfig to use to produce findings.
   *
   * @param GooglePrivacyDlpV2InspectConfig $inspectConfig
   */
  public function setInspectConfig(GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /**
   * @return GooglePrivacyDlpV2InspectConfig
   */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }
  /**
   * Optional. InspectTemplate to use to produce findings. Deprecated: use
   * inspect_config instead.
   *
   * @deprecated
   * @param GooglePrivacyDlpV2InspectTemplate $inspectTemplate
   */
  public function setInspectTemplate(GooglePrivacyDlpV2InspectTemplate $inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /**
   * @deprecated
   * @return GooglePrivacyDlpV2InspectTemplate
   */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
  }
  /**
   * Optional. Log the actions taken by the content policy to external systems.
   *
   * @param GooglePrivacyDlpV2LoggingConfig[] $loggingConfigs
   */
  public function setLoggingConfigs($loggingConfigs)
  {
    $this->loggingConfigs = $loggingConfigs;
  }
  /**
   * @return GooglePrivacyDlpV2LoggingConfig[]
   */
  public function getLoggingConfigs()
  {
    return $this->loggingConfigs;
  }
  /**
   * Output only. Resource name of the policy.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. Policies to apply, based on the findings returned by inspection.
   * The first rule to match applies.
   *
   * @param GooglePrivacyDlpV2PolicyRule[] $rules
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyRule[]
   */
  public function getRules()
  {
    return $this->rules;
  }
  /**
   * Optional. Action to take if the content is an unsupported file type.
   *
   * @param GooglePrivacyDlpV2PolicyAction $unsupportedFileType
   */
  public function setUnsupportedFileType(GooglePrivacyDlpV2PolicyAction $unsupportedFileType)
  {
    $this->unsupportedFileType = $unsupportedFileType;
  }
  /**
   * @return GooglePrivacyDlpV2PolicyAction
   */
  public function getUnsupportedFileType()
  {
    return $this->unsupportedFileType;
  }
  /**
   * Output only. The last update timestamp of a contentPolicy; output-only
   * field.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ContentPolicy::class, 'Google_Service_DLP_GooglePrivacyDlpV2ContentPolicy');
