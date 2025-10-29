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

namespace Google\Service\Document;

class GoogleCloudDocumentaiUiv1beta3ProcessorVersion extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var bool
   */
  public $deploymentAllowed;
  protected $deprecationInfoType = GoogleCloudDocumentaiUiv1beta3ProcessorVersionDeprecationInfo::class;
  protected $deprecationInfoDataType = '';
  /**
   * @var string
   */
  public $displayName;
  protected $documentSchemaType = GoogleCloudDocumentaiUiv1beta3DocumentSchema::class;
  protected $documentSchemaDataType = '';
  protected $genAiModelInfoType = GoogleCloudDocumentaiUiv1beta3ProcessorVersionGenAiModelInfo::class;
  protected $genAiModelInfoDataType = '';
  /**
   * @var bool
   */
  public $googleManaged;
  /**
   * @var string
   */
  public $kmsKeyName;
  /**
   * @var string
   */
  public $kmsKeyVersionName;
  protected $latestEvaluationType = GoogleCloudDocumentaiUiv1beta3EvaluationReference::class;
  protected $latestEvaluationDataType = '';
  /**
   * @var string
   */
  public $modelType;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $satisfiesPzi;
  /**
   * @var bool
   */
  public $satisfiesPzs;
  protected $schemaType = GoogleCloudDocumentaiUiv1beta3Schema::class;
  protected $schemaDataType = '';
  /**
   * @var string
   */
  public $state;

  /**
   * @param string
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
   * @param bool
   */
  public function setDeploymentAllowed($deploymentAllowed)
  {
    $this->deploymentAllowed = $deploymentAllowed;
  }
  /**
   * @return bool
   */
  public function getDeploymentAllowed()
  {
    return $this->deploymentAllowed;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3ProcessorVersionDeprecationInfo
   */
  public function setDeprecationInfo(GoogleCloudDocumentaiUiv1beta3ProcessorVersionDeprecationInfo $deprecationInfo)
  {
    $this->deprecationInfo = $deprecationInfo;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3ProcessorVersionDeprecationInfo
   */
  public function getDeprecationInfo()
  {
    return $this->deprecationInfo;
  }
  /**
   * @param string
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
   * @param GoogleCloudDocumentaiUiv1beta3DocumentSchema
   */
  public function setDocumentSchema(GoogleCloudDocumentaiUiv1beta3DocumentSchema $documentSchema)
  {
    $this->documentSchema = $documentSchema;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3DocumentSchema
   */
  public function getDocumentSchema()
  {
    return $this->documentSchema;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3ProcessorVersionGenAiModelInfo
   */
  public function setGenAiModelInfo(GoogleCloudDocumentaiUiv1beta3ProcessorVersionGenAiModelInfo $genAiModelInfo)
  {
    $this->genAiModelInfo = $genAiModelInfo;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3ProcessorVersionGenAiModelInfo
   */
  public function getGenAiModelInfo()
  {
    return $this->genAiModelInfo;
  }
  /**
   * @param bool
   */
  public function setGoogleManaged($googleManaged)
  {
    $this->googleManaged = $googleManaged;
  }
  /**
   * @return bool
   */
  public function getGoogleManaged()
  {
    return $this->googleManaged;
  }
  /**
   * @param string
   */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /**
   * @return string
   */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
  /**
   * @param string
   */
  public function setKmsKeyVersionName($kmsKeyVersionName)
  {
    $this->kmsKeyVersionName = $kmsKeyVersionName;
  }
  /**
   * @return string
   */
  public function getKmsKeyVersionName()
  {
    return $this->kmsKeyVersionName;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3EvaluationReference
   */
  public function setLatestEvaluation(GoogleCloudDocumentaiUiv1beta3EvaluationReference $latestEvaluation)
  {
    $this->latestEvaluation = $latestEvaluation;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3EvaluationReference
   */
  public function getLatestEvaluation()
  {
    return $this->latestEvaluation;
  }
  /**
   * @param string
   */
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  /**
   * @return string
   */
  public function getModelType()
  {
    return $this->modelType;
  }
  /**
   * @param string
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
   * @param bool
   */
  public function setSatisfiesPzi($satisfiesPzi)
  {
    $this->satisfiesPzi = $satisfiesPzi;
  }
  /**
   * @return bool
   */
  public function getSatisfiesPzi()
  {
    return $this->satisfiesPzi;
  }
  /**
   * @param bool
   */
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  /**
   * @return bool
   */
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3Schema
   */
  public function setSchema(GoogleCloudDocumentaiUiv1beta3Schema $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3Schema
   */
  public function getSchema()
  {
    return $this->schema;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3ProcessorVersion::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3ProcessorVersion');
