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

namespace Google\Service\Contentwarehouse;

class AssistantPrefulfillmentRankerPrefulfillmentSignals extends \Google\Model
{
  public $calibratedParsingScore;
  /**
   * @var bool
   */
  public $deepMediaDominant;
  /**
   * @var bool
   */
  public $dominant;
  /**
   * @var float
   */
  public $effectiveArgSpanLength;
  /**
   * @var bool
   */
  public $fulfillableDominantMedia;
  /**
   * @var bool
   */
  public $generatedByLegacyAquaDomain;
  /**
   * @var bool
   */
  public $hasAnswerGroup;
  /**
   * @var bool
   */
  public $hasIntentUpdate;
  /**
   * @var float
   */
  public $inQueryMaxEffectiveArgSpanLength;
  /**
   * @var string
   */
  public $intentName;
  public $intentNameAuisScore;
  public $intentNameAuisScoreExp;
  /**
   * @var string
   */
  public $intentType;
  /**
   * @var bool
   */
  public $isAquaMediaIntent;
  /**
   * @var bool
   */
  public $isCommunicationOpaRawTargetIntent;
  /**
   * @var bool
   */
  public $isDummyIntent;
  /**
   * @var bool
   */
  public $isFullyGrounded;
  /**
   * @var bool
   */
  public $isHighConfidencePodcastIntent;
  /**
   * @var bool
   */
  public $isIntentFromOrbit;
  /**
   * @var bool
   */
  public $isMediaControlIntent;
  /**
   * @var bool
   */
  public $isMediaIntent;
  /**
   * @var bool
   */
  public $isNspDescopedIntent;
  /**
   * @var bool
   */
  public $isNspEnabledIntent;
  /**
   * @var bool
   */
  public $isNspIntent;
  /**
   * @var bool
   */
  public $isNspTargetIntent;
  /**
   * @var bool
   */
  public $isPlayGenericMusic;
  /**
   * @var bool
   */
  public $isPodcastGenericIntent;
  /**
   * @var bool
   */
  public $isPodcastIntent;
  /**
   * @var bool
   */
  public $isRadioIntent;
  /**
   * @var bool
   */
  public $isSageDisabledIntent;
  /**
   * @var bool
   */
  public $isSageInNageIntent;
  /**
   * @var bool
   */
  public $isSageIntent;
  /**
   * @var bool
   */
  public $isScoreBasedIntent;
  /**
   * @var bool
   */
  public $isTvmIntent;
  /**
   * @var bool
   */
  public $isValidSmarthomeIntent;
  /**
   * @var bool
   */
  public $isVideoIntent;
  /**
   * @var float
   */
  public $kScore;
  /**
   * @var int
   */
  public $kscorerRank;
  public $maxHgrScoreAcrossBindingSets;
  public $nspIntentParseScore;
  /**
   * @var int
   */
  public $nspRank;
  public $numConstraints;
  public $numConstraintsSatisfied;
  public $numGroundableArgs;
  public $numGroundedArgs;
  /**
   * @var int
   */
  public $parsingScoreMse8BucketId;
  /**
   * @var string
   */
  public $phase;
  /**
   * @var bool
   */
  public $platinumSource;
  public $pq2tVsAssistantIbstCosine;
  public $pq2tVsIbstCosine;
  /**
   * @var float
   */
  public $predictedIntentConfidence;
  /**
   * @var string
   */
  public $searchDispatch;
  protected $smarthomeIntentMetadataType = AssistantPfrSmartHomeIntentMetadata::class;
  protected $smarthomeIntentMetadataDataType = '';
  /**
   * @var string
   */
  public $subIntentType;
  protected $tiebreakingMetadataType = AssistantPfrTiebreakingMetadata::class;
  protected $tiebreakingMetadataDataType = '';
  /**
   * @var bool
   */
  public $usesGroundingBox;

  public function setCalibratedParsingScore($calibratedParsingScore)
  {
    $this->calibratedParsingScore = $calibratedParsingScore;
  }
  public function getCalibratedParsingScore()
  {
    return $this->calibratedParsingScore;
  }
  /**
   * @param bool
   */
  public function setDeepMediaDominant($deepMediaDominant)
  {
    $this->deepMediaDominant = $deepMediaDominant;
  }
  /**
   * @return bool
   */
  public function getDeepMediaDominant()
  {
    return $this->deepMediaDominant;
  }
  /**
   * @param bool
   */
  public function setDominant($dominant)
  {
    $this->dominant = $dominant;
  }
  /**
   * @return bool
   */
  public function getDominant()
  {
    return $this->dominant;
  }
  /**
   * @param float
   */
  public function setEffectiveArgSpanLength($effectiveArgSpanLength)
  {
    $this->effectiveArgSpanLength = $effectiveArgSpanLength;
  }
  /**
   * @return float
   */
  public function getEffectiveArgSpanLength()
  {
    return $this->effectiveArgSpanLength;
  }
  /**
   * @param bool
   */
  public function setFulfillableDominantMedia($fulfillableDominantMedia)
  {
    $this->fulfillableDominantMedia = $fulfillableDominantMedia;
  }
  /**
   * @return bool
   */
  public function getFulfillableDominantMedia()
  {
    return $this->fulfillableDominantMedia;
  }
  /**
   * @param bool
   */
  public function setGeneratedByLegacyAquaDomain($generatedByLegacyAquaDomain)
  {
    $this->generatedByLegacyAquaDomain = $generatedByLegacyAquaDomain;
  }
  /**
   * @return bool
   */
  public function getGeneratedByLegacyAquaDomain()
  {
    return $this->generatedByLegacyAquaDomain;
  }
  /**
   * @param bool
   */
  public function setHasAnswerGroup($hasAnswerGroup)
  {
    $this->hasAnswerGroup = $hasAnswerGroup;
  }
  /**
   * @return bool
   */
  public function getHasAnswerGroup()
  {
    return $this->hasAnswerGroup;
  }
  /**
   * @param bool
   */
  public function setHasIntentUpdate($hasIntentUpdate)
  {
    $this->hasIntentUpdate = $hasIntentUpdate;
  }
  /**
   * @return bool
   */
  public function getHasIntentUpdate()
  {
    return $this->hasIntentUpdate;
  }
  /**
   * @param float
   */
  public function setInQueryMaxEffectiveArgSpanLength($inQueryMaxEffectiveArgSpanLength)
  {
    $this->inQueryMaxEffectiveArgSpanLength = $inQueryMaxEffectiveArgSpanLength;
  }
  /**
   * @return float
   */
  public function getInQueryMaxEffectiveArgSpanLength()
  {
    return $this->inQueryMaxEffectiveArgSpanLength;
  }
  /**
   * @param string
   */
  public function setIntentName($intentName)
  {
    $this->intentName = $intentName;
  }
  /**
   * @return string
   */
  public function getIntentName()
  {
    return $this->intentName;
  }
  public function setIntentNameAuisScore($intentNameAuisScore)
  {
    $this->intentNameAuisScore = $intentNameAuisScore;
  }
  public function getIntentNameAuisScore()
  {
    return $this->intentNameAuisScore;
  }
  public function setIntentNameAuisScoreExp($intentNameAuisScoreExp)
  {
    $this->intentNameAuisScoreExp = $intentNameAuisScoreExp;
  }
  public function getIntentNameAuisScoreExp()
  {
    return $this->intentNameAuisScoreExp;
  }
  /**
   * @param string
   */
  public function setIntentType($intentType)
  {
    $this->intentType = $intentType;
  }
  /**
   * @return string
   */
  public function getIntentType()
  {
    return $this->intentType;
  }
  /**
   * @param bool
   */
  public function setIsAquaMediaIntent($isAquaMediaIntent)
  {
    $this->isAquaMediaIntent = $isAquaMediaIntent;
  }
  /**
   * @return bool
   */
  public function getIsAquaMediaIntent()
  {
    return $this->isAquaMediaIntent;
  }
  /**
   * @param bool
   */
  public function setIsCommunicationOpaRawTargetIntent($isCommunicationOpaRawTargetIntent)
  {
    $this->isCommunicationOpaRawTargetIntent = $isCommunicationOpaRawTargetIntent;
  }
  /**
   * @return bool
   */
  public function getIsCommunicationOpaRawTargetIntent()
  {
    return $this->isCommunicationOpaRawTargetIntent;
  }
  /**
   * @param bool
   */
  public function setIsDummyIntent($isDummyIntent)
  {
    $this->isDummyIntent = $isDummyIntent;
  }
  /**
   * @return bool
   */
  public function getIsDummyIntent()
  {
    return $this->isDummyIntent;
  }
  /**
   * @param bool
   */
  public function setIsFullyGrounded($isFullyGrounded)
  {
    $this->isFullyGrounded = $isFullyGrounded;
  }
  /**
   * @return bool
   */
  public function getIsFullyGrounded()
  {
    return $this->isFullyGrounded;
  }
  /**
   * @param bool
   */
  public function setIsHighConfidencePodcastIntent($isHighConfidencePodcastIntent)
  {
    $this->isHighConfidencePodcastIntent = $isHighConfidencePodcastIntent;
  }
  /**
   * @return bool
   */
  public function getIsHighConfidencePodcastIntent()
  {
    return $this->isHighConfidencePodcastIntent;
  }
  /**
   * @param bool
   */
  public function setIsIntentFromOrbit($isIntentFromOrbit)
  {
    $this->isIntentFromOrbit = $isIntentFromOrbit;
  }
  /**
   * @return bool
   */
  public function getIsIntentFromOrbit()
  {
    return $this->isIntentFromOrbit;
  }
  /**
   * @param bool
   */
  public function setIsMediaControlIntent($isMediaControlIntent)
  {
    $this->isMediaControlIntent = $isMediaControlIntent;
  }
  /**
   * @return bool
   */
  public function getIsMediaControlIntent()
  {
    return $this->isMediaControlIntent;
  }
  /**
   * @param bool
   */
  public function setIsMediaIntent($isMediaIntent)
  {
    $this->isMediaIntent = $isMediaIntent;
  }
  /**
   * @return bool
   */
  public function getIsMediaIntent()
  {
    return $this->isMediaIntent;
  }
  /**
   * @param bool
   */
  public function setIsNspDescopedIntent($isNspDescopedIntent)
  {
    $this->isNspDescopedIntent = $isNspDescopedIntent;
  }
  /**
   * @return bool
   */
  public function getIsNspDescopedIntent()
  {
    return $this->isNspDescopedIntent;
  }
  /**
   * @param bool
   */
  public function setIsNspEnabledIntent($isNspEnabledIntent)
  {
    $this->isNspEnabledIntent = $isNspEnabledIntent;
  }
  /**
   * @return bool
   */
  public function getIsNspEnabledIntent()
  {
    return $this->isNspEnabledIntent;
  }
  /**
   * @param bool
   */
  public function setIsNspIntent($isNspIntent)
  {
    $this->isNspIntent = $isNspIntent;
  }
  /**
   * @return bool
   */
  public function getIsNspIntent()
  {
    return $this->isNspIntent;
  }
  /**
   * @param bool
   */
  public function setIsNspTargetIntent($isNspTargetIntent)
  {
    $this->isNspTargetIntent = $isNspTargetIntent;
  }
  /**
   * @return bool
   */
  public function getIsNspTargetIntent()
  {
    return $this->isNspTargetIntent;
  }
  /**
   * @param bool
   */
  public function setIsPlayGenericMusic($isPlayGenericMusic)
  {
    $this->isPlayGenericMusic = $isPlayGenericMusic;
  }
  /**
   * @return bool
   */
  public function getIsPlayGenericMusic()
  {
    return $this->isPlayGenericMusic;
  }
  /**
   * @param bool
   */
  public function setIsPodcastGenericIntent($isPodcastGenericIntent)
  {
    $this->isPodcastGenericIntent = $isPodcastGenericIntent;
  }
  /**
   * @return bool
   */
  public function getIsPodcastGenericIntent()
  {
    return $this->isPodcastGenericIntent;
  }
  /**
   * @param bool
   */
  public function setIsPodcastIntent($isPodcastIntent)
  {
    $this->isPodcastIntent = $isPodcastIntent;
  }
  /**
   * @return bool
   */
  public function getIsPodcastIntent()
  {
    return $this->isPodcastIntent;
  }
  /**
   * @param bool
   */
  public function setIsRadioIntent($isRadioIntent)
  {
    $this->isRadioIntent = $isRadioIntent;
  }
  /**
   * @return bool
   */
  public function getIsRadioIntent()
  {
    return $this->isRadioIntent;
  }
  /**
   * @param bool
   */
  public function setIsSageDisabledIntent($isSageDisabledIntent)
  {
    $this->isSageDisabledIntent = $isSageDisabledIntent;
  }
  /**
   * @return bool
   */
  public function getIsSageDisabledIntent()
  {
    return $this->isSageDisabledIntent;
  }
  /**
   * @param bool
   */
  public function setIsSageInNageIntent($isSageInNageIntent)
  {
    $this->isSageInNageIntent = $isSageInNageIntent;
  }
  /**
   * @return bool
   */
  public function getIsSageInNageIntent()
  {
    return $this->isSageInNageIntent;
  }
  /**
   * @param bool
   */
  public function setIsSageIntent($isSageIntent)
  {
    $this->isSageIntent = $isSageIntent;
  }
  /**
   * @return bool
   */
  public function getIsSageIntent()
  {
    return $this->isSageIntent;
  }
  /**
   * @param bool
   */
  public function setIsScoreBasedIntent($isScoreBasedIntent)
  {
    $this->isScoreBasedIntent = $isScoreBasedIntent;
  }
  /**
   * @return bool
   */
  public function getIsScoreBasedIntent()
  {
    return $this->isScoreBasedIntent;
  }
  /**
   * @param bool
   */
  public function setIsTvmIntent($isTvmIntent)
  {
    $this->isTvmIntent = $isTvmIntent;
  }
  /**
   * @return bool
   */
  public function getIsTvmIntent()
  {
    return $this->isTvmIntent;
  }
  /**
   * @param bool
   */
  public function setIsValidSmarthomeIntent($isValidSmarthomeIntent)
  {
    $this->isValidSmarthomeIntent = $isValidSmarthomeIntent;
  }
  /**
   * @return bool
   */
  public function getIsValidSmarthomeIntent()
  {
    return $this->isValidSmarthomeIntent;
  }
  /**
   * @param bool
   */
  public function setIsVideoIntent($isVideoIntent)
  {
    $this->isVideoIntent = $isVideoIntent;
  }
  /**
   * @return bool
   */
  public function getIsVideoIntent()
  {
    return $this->isVideoIntent;
  }
  /**
   * @param float
   */
  public function setKScore($kScore)
  {
    $this->kScore = $kScore;
  }
  /**
   * @return float
   */
  public function getKScore()
  {
    return $this->kScore;
  }
  /**
   * @param int
   */
  public function setKscorerRank($kscorerRank)
  {
    $this->kscorerRank = $kscorerRank;
  }
  /**
   * @return int
   */
  public function getKscorerRank()
  {
    return $this->kscorerRank;
  }
  public function setMaxHgrScoreAcrossBindingSets($maxHgrScoreAcrossBindingSets)
  {
    $this->maxHgrScoreAcrossBindingSets = $maxHgrScoreAcrossBindingSets;
  }
  public function getMaxHgrScoreAcrossBindingSets()
  {
    return $this->maxHgrScoreAcrossBindingSets;
  }
  public function setNspIntentParseScore($nspIntentParseScore)
  {
    $this->nspIntentParseScore = $nspIntentParseScore;
  }
  public function getNspIntentParseScore()
  {
    return $this->nspIntentParseScore;
  }
  /**
   * @param int
   */
  public function setNspRank($nspRank)
  {
    $this->nspRank = $nspRank;
  }
  /**
   * @return int
   */
  public function getNspRank()
  {
    return $this->nspRank;
  }
  public function setNumConstraints($numConstraints)
  {
    $this->numConstraints = $numConstraints;
  }
  public function getNumConstraints()
  {
    return $this->numConstraints;
  }
  public function setNumConstraintsSatisfied($numConstraintsSatisfied)
  {
    $this->numConstraintsSatisfied = $numConstraintsSatisfied;
  }
  public function getNumConstraintsSatisfied()
  {
    return $this->numConstraintsSatisfied;
  }
  public function setNumGroundableArgs($numGroundableArgs)
  {
    $this->numGroundableArgs = $numGroundableArgs;
  }
  public function getNumGroundableArgs()
  {
    return $this->numGroundableArgs;
  }
  public function setNumGroundedArgs($numGroundedArgs)
  {
    $this->numGroundedArgs = $numGroundedArgs;
  }
  public function getNumGroundedArgs()
  {
    return $this->numGroundedArgs;
  }
  /**
   * @param int
   */
  public function setParsingScoreMse8BucketId($parsingScoreMse8BucketId)
  {
    $this->parsingScoreMse8BucketId = $parsingScoreMse8BucketId;
  }
  /**
   * @return int
   */
  public function getParsingScoreMse8BucketId()
  {
    return $this->parsingScoreMse8BucketId;
  }
  /**
   * @param string
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return string
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * @param bool
   */
  public function setPlatinumSource($platinumSource)
  {
    $this->platinumSource = $platinumSource;
  }
  /**
   * @return bool
   */
  public function getPlatinumSource()
  {
    return $this->platinumSource;
  }
  public function setPq2tVsAssistantIbstCosine($pq2tVsAssistantIbstCosine)
  {
    $this->pq2tVsAssistantIbstCosine = $pq2tVsAssistantIbstCosine;
  }
  public function getPq2tVsAssistantIbstCosine()
  {
    return $this->pq2tVsAssistantIbstCosine;
  }
  public function setPq2tVsIbstCosine($pq2tVsIbstCosine)
  {
    $this->pq2tVsIbstCosine = $pq2tVsIbstCosine;
  }
  public function getPq2tVsIbstCosine()
  {
    return $this->pq2tVsIbstCosine;
  }
  /**
   * @param float
   */
  public function setPredictedIntentConfidence($predictedIntentConfidence)
  {
    $this->predictedIntentConfidence = $predictedIntentConfidence;
  }
  /**
   * @return float
   */
  public function getPredictedIntentConfidence()
  {
    return $this->predictedIntentConfidence;
  }
  /**
   * @param string
   */
  public function setSearchDispatch($searchDispatch)
  {
    $this->searchDispatch = $searchDispatch;
  }
  /**
   * @return string
   */
  public function getSearchDispatch()
  {
    return $this->searchDispatch;
  }
  /**
   * @param AssistantPfrSmartHomeIntentMetadata
   */
  public function setSmarthomeIntentMetadata(AssistantPfrSmartHomeIntentMetadata $smarthomeIntentMetadata)
  {
    $this->smarthomeIntentMetadata = $smarthomeIntentMetadata;
  }
  /**
   * @return AssistantPfrSmartHomeIntentMetadata
   */
  public function getSmarthomeIntentMetadata()
  {
    return $this->smarthomeIntentMetadata;
  }
  /**
   * @param string
   */
  public function setSubIntentType($subIntentType)
  {
    $this->subIntentType = $subIntentType;
  }
  /**
   * @return string
   */
  public function getSubIntentType()
  {
    return $this->subIntentType;
  }
  /**
   * @param AssistantPfrTiebreakingMetadata
   */
  public function setTiebreakingMetadata(AssistantPfrTiebreakingMetadata $tiebreakingMetadata)
  {
    $this->tiebreakingMetadata = $tiebreakingMetadata;
  }
  /**
   * @return AssistantPfrTiebreakingMetadata
   */
  public function getTiebreakingMetadata()
  {
    return $this->tiebreakingMetadata;
  }
  /**
   * @param bool
   */
  public function setUsesGroundingBox($usesGroundingBox)
  {
    $this->usesGroundingBox = $usesGroundingBox;
  }
  /**
   * @return bool
   */
  public function getUsesGroundingBox()
  {
    return $this->usesGroundingBox;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantPrefulfillmentRankerPrefulfillmentSignals::class, 'Google_Service_Contentwarehouse_AssistantPrefulfillmentRankerPrefulfillmentSignals');
