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

namespace Google\Service\Aiplatform;

class LearningGenaiRootFilterMetadataFilterDebugInfo extends \Google\Model
{
  /**
   * @var LearningGenaiRootClassifierOutput
   */
  public $classifierOutput;
  protected $classifierOutputType = LearningGenaiRootClassifierOutput::class;
  protected $classifierOutputDataType = '';
  /**
   * @var string
   */
  public $defaultMetadata;
  /**
   * @var LearningServingLlmLanguageFilterResult
   */
  public $languageFilterResult;
  protected $languageFilterResultType = LearningServingLlmLanguageFilterResult::class;
  protected $languageFilterResultDataType = '';
  /**
   * @var LearningGenaiRootRAIOutput
   */
  public $raiOutput;
  protected $raiOutputType = LearningGenaiRootRAIOutput::class;
  protected $raiOutputDataType = '';
  /**
   * @var CloudAiNlLlmProtoServiceRaiResult
   */
  public $raiResult;
  protected $raiResultType = CloudAiNlLlmProtoServiceRaiResult::class;
  protected $raiResultDataType = '';
  /**
   * @var CloudAiNlLlmProtoServiceRaiSignal
   */
  public $raiSignal;
  protected $raiSignalType = CloudAiNlLlmProtoServiceRaiSignal::class;
  protected $raiSignalDataType = '';
  /**
   * @var LanguageLabsAidaTrustRecitationProtoStreamRecitationResult
   */
  public $streamRecitationResult;
  protected $streamRecitationResultType = LanguageLabsAidaTrustRecitationProtoStreamRecitationResult::class;
  protected $streamRecitationResultDataType = '';
  /**
   * @var LearningGenaiRootTakedownResult
   */
  public $takedownResult;
  protected $takedownResultType = LearningGenaiRootTakedownResult::class;
  protected $takedownResultDataType = '';
  /**
   * @var LearningGenaiRootToxicityResult
   */
  public $toxicityResult;
  protected $toxicityResultType = LearningGenaiRootToxicityResult::class;
  protected $toxicityResultDataType = '';

  /**
   * @param LearningGenaiRootClassifierOutput
   */
  public function setClassifierOutput(LearningGenaiRootClassifierOutput $classifierOutput)
  {
    $this->classifierOutput = $classifierOutput;
  }
  /**
   * @return LearningGenaiRootClassifierOutput
   */
  public function getClassifierOutput()
  {
    return $this->classifierOutput;
  }
  /**
   * @param string
   */
  public function setDefaultMetadata($defaultMetadata)
  {
    $this->defaultMetadata = $defaultMetadata;
  }
  /**
   * @return string
   */
  public function getDefaultMetadata()
  {
    return $this->defaultMetadata;
  }
  /**
   * @param LearningServingLlmLanguageFilterResult
   */
  public function setLanguageFilterResult(LearningServingLlmLanguageFilterResult $languageFilterResult)
  {
    $this->languageFilterResult = $languageFilterResult;
  }
  /**
   * @return LearningServingLlmLanguageFilterResult
   */
  public function getLanguageFilterResult()
  {
    return $this->languageFilterResult;
  }
  /**
   * @param LearningGenaiRootRAIOutput
   */
  public function setRaiOutput(LearningGenaiRootRAIOutput $raiOutput)
  {
    $this->raiOutput = $raiOutput;
  }
  /**
   * @return LearningGenaiRootRAIOutput
   */
  public function getRaiOutput()
  {
    return $this->raiOutput;
  }
  /**
   * @param CloudAiNlLlmProtoServiceRaiResult
   */
  public function setRaiResult(CloudAiNlLlmProtoServiceRaiResult $raiResult)
  {
    $this->raiResult = $raiResult;
  }
  /**
   * @return CloudAiNlLlmProtoServiceRaiResult
   */
  public function getRaiResult()
  {
    return $this->raiResult;
  }
  /**
   * @param CloudAiNlLlmProtoServiceRaiSignal
   */
  public function setRaiSignal(CloudAiNlLlmProtoServiceRaiSignal $raiSignal)
  {
    $this->raiSignal = $raiSignal;
  }
  /**
   * @return CloudAiNlLlmProtoServiceRaiSignal
   */
  public function getRaiSignal()
  {
    return $this->raiSignal;
  }
  /**
   * @param LanguageLabsAidaTrustRecitationProtoStreamRecitationResult
   */
  public function setStreamRecitationResult(LanguageLabsAidaTrustRecitationProtoStreamRecitationResult $streamRecitationResult)
  {
    $this->streamRecitationResult = $streamRecitationResult;
  }
  /**
   * @return LanguageLabsAidaTrustRecitationProtoStreamRecitationResult
   */
  public function getStreamRecitationResult()
  {
    return $this->streamRecitationResult;
  }
  /**
   * @param LearningGenaiRootTakedownResult
   */
  public function setTakedownResult(LearningGenaiRootTakedownResult $takedownResult)
  {
    $this->takedownResult = $takedownResult;
  }
  /**
   * @return LearningGenaiRootTakedownResult
   */
  public function getTakedownResult()
  {
    return $this->takedownResult;
  }
  /**
   * @param LearningGenaiRootToxicityResult
   */
  public function setToxicityResult(LearningGenaiRootToxicityResult $toxicityResult)
  {
    $this->toxicityResult = $toxicityResult;
  }
  /**
   * @return LearningGenaiRootToxicityResult
   */
  public function getToxicityResult()
  {
    return $this->toxicityResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LearningGenaiRootFilterMetadataFilterDebugInfo::class, 'Google_Service_Aiplatform_LearningGenaiRootFilterMetadataFilterDebugInfo');
