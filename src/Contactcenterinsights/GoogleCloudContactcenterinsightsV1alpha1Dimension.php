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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1alpha1Dimension extends \Google\Model
{
  protected $agentDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata::class;
  protected $agentDimensionMetadataDataType = '';
  protected $clientSentimentCategoryDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionClientSentimentCategoryDimensionMetadata::class;
  protected $clientSentimentCategoryDimensionMetadataDataType = '';
  protected $conversationProfileDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionConversationProfileDimensionMetadata::class;
  protected $conversationProfileDimensionMetadataDataType = '';
  protected $conversationalAgentsPlaybookDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsPlaybookDimensionMetadata::class;
  protected $conversationalAgentsPlaybookDimensionMetadataDataType = '';
  protected $conversationalAgentsToolDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsToolDimensionMetadata::class;
  protected $conversationalAgentsToolDimensionMetadataDataType = '';
  /**
   * @var string
   */
  public $dimensionKey;
  protected $issueDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionIssueDimensionMetadata::class;
  protected $issueDimensionMetadataDataType = '';
  protected $mediumDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionMediumDimensionMetadata::class;
  protected $mediumDimensionMetadataDataType = '';
  protected $qaQuestionAnswerDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionAnswerDimensionMetadata::class;
  protected $qaQuestionAnswerDimensionMetadataDataType = '';
  protected $qaQuestionDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionDimensionMetadata::class;
  protected $qaQuestionDimensionMetadataDataType = '';
  protected $qaScorecardDimensionMetadataType = GoogleCloudContactcenterinsightsV1alpha1DimensionQaScorecardDimensionMetadata::class;
  protected $qaScorecardDimensionMetadataDataType = '';

  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata
   */
  public function setAgentDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata $agentDimensionMetadata)
  {
    $this->agentDimensionMetadata = $agentDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionAgentDimensionMetadata
   */
  public function getAgentDimensionMetadata()
  {
    return $this->agentDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionClientSentimentCategoryDimensionMetadata
   */
  public function setClientSentimentCategoryDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionClientSentimentCategoryDimensionMetadata $clientSentimentCategoryDimensionMetadata)
  {
    $this->clientSentimentCategoryDimensionMetadata = $clientSentimentCategoryDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionClientSentimentCategoryDimensionMetadata
   */
  public function getClientSentimentCategoryDimensionMetadata()
  {
    return $this->clientSentimentCategoryDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionConversationProfileDimensionMetadata
   */
  public function setConversationProfileDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionConversationProfileDimensionMetadata $conversationProfileDimensionMetadata)
  {
    $this->conversationProfileDimensionMetadata = $conversationProfileDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionConversationProfileDimensionMetadata
   */
  public function getConversationProfileDimensionMetadata()
  {
    return $this->conversationProfileDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsPlaybookDimensionMetadata
   */
  public function setConversationalAgentsPlaybookDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsPlaybookDimensionMetadata $conversationalAgentsPlaybookDimensionMetadata)
  {
    $this->conversationalAgentsPlaybookDimensionMetadata = $conversationalAgentsPlaybookDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsPlaybookDimensionMetadata
   */
  public function getConversationalAgentsPlaybookDimensionMetadata()
  {
    return $this->conversationalAgentsPlaybookDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsToolDimensionMetadata
   */
  public function setConversationalAgentsToolDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsToolDimensionMetadata $conversationalAgentsToolDimensionMetadata)
  {
    $this->conversationalAgentsToolDimensionMetadata = $conversationalAgentsToolDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionConversationalAgentsToolDimensionMetadata
   */
  public function getConversationalAgentsToolDimensionMetadata()
  {
    return $this->conversationalAgentsToolDimensionMetadata;
  }
  /**
   * @param string
   */
  public function setDimensionKey($dimensionKey)
  {
    $this->dimensionKey = $dimensionKey;
  }
  /**
   * @return string
   */
  public function getDimensionKey()
  {
    return $this->dimensionKey;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionIssueDimensionMetadata
   */
  public function setIssueDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionIssueDimensionMetadata $issueDimensionMetadata)
  {
    $this->issueDimensionMetadata = $issueDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionIssueDimensionMetadata
   */
  public function getIssueDimensionMetadata()
  {
    return $this->issueDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionMediumDimensionMetadata
   */
  public function setMediumDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionMediumDimensionMetadata $mediumDimensionMetadata)
  {
    $this->mediumDimensionMetadata = $mediumDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionMediumDimensionMetadata
   */
  public function getMediumDimensionMetadata()
  {
    return $this->mediumDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionAnswerDimensionMetadata
   */
  public function setQaQuestionAnswerDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionAnswerDimensionMetadata $qaQuestionAnswerDimensionMetadata)
  {
    $this->qaQuestionAnswerDimensionMetadata = $qaQuestionAnswerDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionAnswerDimensionMetadata
   */
  public function getQaQuestionAnswerDimensionMetadata()
  {
    return $this->qaQuestionAnswerDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionDimensionMetadata
   */
  public function setQaQuestionDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionDimensionMetadata $qaQuestionDimensionMetadata)
  {
    $this->qaQuestionDimensionMetadata = $qaQuestionDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionQaQuestionDimensionMetadata
   */
  public function getQaQuestionDimensionMetadata()
  {
    return $this->qaQuestionDimensionMetadata;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1DimensionQaScorecardDimensionMetadata
   */
  public function setQaScorecardDimensionMetadata(GoogleCloudContactcenterinsightsV1alpha1DimensionQaScorecardDimensionMetadata $qaScorecardDimensionMetadata)
  {
    $this->qaScorecardDimensionMetadata = $qaScorecardDimensionMetadata;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1DimensionQaScorecardDimensionMetadata
   */
  public function getQaScorecardDimensionMetadata()
  {
    return $this->qaScorecardDimensionMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1Dimension::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1Dimension');
