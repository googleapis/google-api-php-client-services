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

class KnowledgeAnswersIntentQueryArgumentProvenance extends \Google\Model
{
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenanceQueryAnaphor
   */
  public $anaphor;
  protected $anaphorType = KnowledgeAnswersIntentQueryArgumentProvenanceQueryAnaphor::class;
  protected $anaphorDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenanceAttentionalEntity
   */
  public $attentionalEntity;
  protected $attentionalEntityType = KnowledgeAnswersIntentQueryArgumentProvenanceAttentionalEntity::class;
  protected $attentionalEntityDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenanceCurrentQuery
   */
  public $currentQuery;
  protected $currentQueryType = KnowledgeAnswersIntentQueryArgumentProvenanceCurrentQuery::class;
  protected $currentQueryDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenanceInjectedContextualSchema
   */
  public $injectedContextualSchema;
  protected $injectedContextualSchemaType = KnowledgeAnswersIntentQueryArgumentProvenanceInjectedContextualSchema::class;
  protected $injectedContextualSchemaDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenancePreviousQuery
   */
  public $previousQuery;
  protected $previousQueryType = KnowledgeAnswersIntentQueryArgumentProvenancePreviousQuery::class;
  protected $previousQueryDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenancePreviousResponseMeaning
   */
  public $previousResponseMeaning;
  protected $previousResponseMeaningType = KnowledgeAnswersIntentQueryArgumentProvenancePreviousResponseMeaning::class;
  protected $previousResponseMeaningDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenancePreviousTaskState
   */
  public $previousTaskState;
  protected $previousTaskStateType = KnowledgeAnswersIntentQueryArgumentProvenancePreviousTaskState::class;
  protected $previousTaskStateDataType = '';
  /**
   * @var KnowledgeAnswersIntentQueryArgumentProvenanceSearchAnswerValue
   */
  public $searchAnswerValue;
  protected $searchAnswerValueType = KnowledgeAnswersIntentQueryArgumentProvenanceSearchAnswerValue::class;
  protected $searchAnswerValueDataType = '';

  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenanceQueryAnaphor
   */
  public function setAnaphor(KnowledgeAnswersIntentQueryArgumentProvenanceQueryAnaphor $anaphor)
  {
    $this->anaphor = $anaphor;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenanceQueryAnaphor
   */
  public function getAnaphor()
  {
    return $this->anaphor;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenanceAttentionalEntity
   */
  public function setAttentionalEntity(KnowledgeAnswersIntentQueryArgumentProvenanceAttentionalEntity $attentionalEntity)
  {
    $this->attentionalEntity = $attentionalEntity;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenanceAttentionalEntity
   */
  public function getAttentionalEntity()
  {
    return $this->attentionalEntity;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenanceCurrentQuery
   */
  public function setCurrentQuery(KnowledgeAnswersIntentQueryArgumentProvenanceCurrentQuery $currentQuery)
  {
    $this->currentQuery = $currentQuery;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenanceCurrentQuery
   */
  public function getCurrentQuery()
  {
    return $this->currentQuery;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenanceInjectedContextualSchema
   */
  public function setInjectedContextualSchema(KnowledgeAnswersIntentQueryArgumentProvenanceInjectedContextualSchema $injectedContextualSchema)
  {
    $this->injectedContextualSchema = $injectedContextualSchema;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenanceInjectedContextualSchema
   */
  public function getInjectedContextualSchema()
  {
    return $this->injectedContextualSchema;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenancePreviousQuery
   */
  public function setPreviousQuery(KnowledgeAnswersIntentQueryArgumentProvenancePreviousQuery $previousQuery)
  {
    $this->previousQuery = $previousQuery;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenancePreviousQuery
   */
  public function getPreviousQuery()
  {
    return $this->previousQuery;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenancePreviousResponseMeaning
   */
  public function setPreviousResponseMeaning(KnowledgeAnswersIntentQueryArgumentProvenancePreviousResponseMeaning $previousResponseMeaning)
  {
    $this->previousResponseMeaning = $previousResponseMeaning;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenancePreviousResponseMeaning
   */
  public function getPreviousResponseMeaning()
  {
    return $this->previousResponseMeaning;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenancePreviousTaskState
   */
  public function setPreviousTaskState(KnowledgeAnswersIntentQueryArgumentProvenancePreviousTaskState $previousTaskState)
  {
    $this->previousTaskState = $previousTaskState;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenancePreviousTaskState
   */
  public function getPreviousTaskState()
  {
    return $this->previousTaskState;
  }
  /**
   * @param KnowledgeAnswersIntentQueryArgumentProvenanceSearchAnswerValue
   */
  public function setSearchAnswerValue(KnowledgeAnswersIntentQueryArgumentProvenanceSearchAnswerValue $searchAnswerValue)
  {
    $this->searchAnswerValue = $searchAnswerValue;
  }
  /**
   * @return KnowledgeAnswersIntentQueryArgumentProvenanceSearchAnswerValue
   */
  public function getSearchAnswerValue()
  {
    return $this->searchAnswerValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KnowledgeAnswersIntentQueryArgumentProvenance::class, 'Google_Service_Contentwarehouse_KnowledgeAnswersIntentQueryArgumentProvenance');
