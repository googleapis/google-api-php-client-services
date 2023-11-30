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

class GoogleCloudContactcenterinsightsV1alpha1CallAnnotation extends \Google\Model
{
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public $annotationEndBoundary;
  protected $annotationEndBoundaryType = GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary::class;
  protected $annotationEndBoundaryDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public $annotationStartBoundary;
  protected $annotationStartBoundaryType = GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary::class;
  protected $annotationStartBoundaryDataType = '';
  /**
   * @var int
   */
  public $channelTag;
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1EntityMentionData
   */
  public $entityMentionData;
  protected $entityMentionDataType = GoogleCloudContactcenterinsightsV1alpha1EntityMentionData::class;
  protected $entityMentionDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1HoldData
   */
  public $holdData;
  protected $holdDataType = GoogleCloudContactcenterinsightsV1alpha1HoldData::class;
  protected $holdDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1IntentMatchData
   */
  public $intentMatchData;
  protected $intentMatchDataType = GoogleCloudContactcenterinsightsV1alpha1IntentMatchData::class;
  protected $intentMatchDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1InterruptionData
   */
  public $interruptionData;
  protected $interruptionDataType = GoogleCloudContactcenterinsightsV1alpha1InterruptionData::class;
  protected $interruptionDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1IssueMatchData
   */
  public $issueMatchData;
  protected $issueMatchDataType = GoogleCloudContactcenterinsightsV1alpha1IssueMatchData::class;
  protected $issueMatchDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1PhraseMatchData
   */
  public $phraseMatchData;
  protected $phraseMatchDataType = GoogleCloudContactcenterinsightsV1alpha1PhraseMatchData::class;
  protected $phraseMatchDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1SentimentData
   */
  public $sentimentData;
  protected $sentimentDataType = GoogleCloudContactcenterinsightsV1alpha1SentimentData::class;
  protected $sentimentDataDataType = '';
  /**
   * @var GoogleCloudContactcenterinsightsV1alpha1SilenceData
   */
  public $silenceData;
  protected $silenceDataType = GoogleCloudContactcenterinsightsV1alpha1SilenceData::class;
  protected $silenceDataDataType = '';

  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public function setAnnotationEndBoundary(GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary $annotationEndBoundary)
  {
    $this->annotationEndBoundary = $annotationEndBoundary;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public function getAnnotationEndBoundary()
  {
    return $this->annotationEndBoundary;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public function setAnnotationStartBoundary(GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary $annotationStartBoundary)
  {
    $this->annotationStartBoundary = $annotationStartBoundary;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1AnnotationBoundary
   */
  public function getAnnotationStartBoundary()
  {
    return $this->annotationStartBoundary;
  }
  /**
   * @param int
   */
  public function setChannelTag($channelTag)
  {
    $this->channelTag = $channelTag;
  }
  /**
   * @return int
   */
  public function getChannelTag()
  {
    return $this->channelTag;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1EntityMentionData
   */
  public function setEntityMentionData(GoogleCloudContactcenterinsightsV1alpha1EntityMentionData $entityMentionData)
  {
    $this->entityMentionData = $entityMentionData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1EntityMentionData
   */
  public function getEntityMentionData()
  {
    return $this->entityMentionData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1HoldData
   */
  public function setHoldData(GoogleCloudContactcenterinsightsV1alpha1HoldData $holdData)
  {
    $this->holdData = $holdData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1HoldData
   */
  public function getHoldData()
  {
    return $this->holdData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1IntentMatchData
   */
  public function setIntentMatchData(GoogleCloudContactcenterinsightsV1alpha1IntentMatchData $intentMatchData)
  {
    $this->intentMatchData = $intentMatchData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1IntentMatchData
   */
  public function getIntentMatchData()
  {
    return $this->intentMatchData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1InterruptionData
   */
  public function setInterruptionData(GoogleCloudContactcenterinsightsV1alpha1InterruptionData $interruptionData)
  {
    $this->interruptionData = $interruptionData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1InterruptionData
   */
  public function getInterruptionData()
  {
    return $this->interruptionData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1IssueMatchData
   */
  public function setIssueMatchData(GoogleCloudContactcenterinsightsV1alpha1IssueMatchData $issueMatchData)
  {
    $this->issueMatchData = $issueMatchData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1IssueMatchData
   */
  public function getIssueMatchData()
  {
    return $this->issueMatchData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1PhraseMatchData
   */
  public function setPhraseMatchData(GoogleCloudContactcenterinsightsV1alpha1PhraseMatchData $phraseMatchData)
  {
    $this->phraseMatchData = $phraseMatchData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1PhraseMatchData
   */
  public function getPhraseMatchData()
  {
    return $this->phraseMatchData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1SentimentData
   */
  public function setSentimentData(GoogleCloudContactcenterinsightsV1alpha1SentimentData $sentimentData)
  {
    $this->sentimentData = $sentimentData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1SentimentData
   */
  public function getSentimentData()
  {
    return $this->sentimentData;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1alpha1SilenceData
   */
  public function setSilenceData(GoogleCloudContactcenterinsightsV1alpha1SilenceData $silenceData)
  {
    $this->silenceData = $silenceData;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1SilenceData
   */
  public function getSilenceData()
  {
    return $this->silenceData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1CallAnnotation::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1CallAnnotation');
