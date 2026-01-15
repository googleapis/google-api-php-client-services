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

class GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasure extends \Google\Collection
{
  protected $collection_key = 'qaTagScores';
  /**
   * The number of conversations that were assigned to an AA human supervisor.
   *
   * @var int
   */
  public $aaSupervisorAssignedConversationsCount;
  /**
   * The number of conversations that were dropped, i.e. escalated but not
   * assigned to an AA human supervisor.
   *
   * @var int
   */
  public $aaSupervisorDroppedConversationsCount;
  /**
   * The number of conversations that were escalated to an AA human supervisor
   * for intervention.
   *
   * @var int
   */
  public $aaSupervisorEscalatedConversationsCount;
  /**
   * The number of conversations scanned by the AA human supervisor.
   *
   * @var int
   */
  public $aaSupervisorMonitoredConversationsCount;
  /**
   * The number of conversations transferred to a human agent.
   *
   * @var int
   */
  public $aaSupervisorTransferredToHumanAgentConvCount;
  /**
   * Count of agent messages that triggered an Ai Coach Suggestion.
   *
   * @var int
   */
  public $aiCoachSuggestionAgentMessageTriggerCount;
  /**
   * Count of Ai Coach Suggestion that has been used by agents.
   *
   * @var int
   */
  public $aiCoachSuggestionAgentUsageCount;
  /**
   * Proportion of Ai Coach Suggestion that has been used by agents.
   *
   * @var 
   */
  public $aiCoachSuggestionAgentUsageRatio;
  /**
   * Count of customer messages that triggered an Ai Coach Suggestion.
   *
   * @var int
   */
  public $aiCoachSuggestionCustomerMessageTriggerCount;
  /**
   * Proportion of customer messages that triggered an Ai Coach Suggestion.
   *
   * @var 
   */
  public $aiCoachSuggestionCustomerMessageTriggerRatio;
  /**
   * Count of end_of_utterance trigger event messages that triggered an Ai Coach
   * Suggestion.
   *
   * @var int
   */
  public $aiCoachSuggestionMessageTriggerCount;
  /**
   * Proportion of end_of_utterance trigger event messages that triggered an Ai
   * Coach Suggestion.
   *
   * @var 
   */
  public $aiCoachSuggestionMessageTriggerRatio;
  /**
   * The average agent's sentiment score.
   *
   * @var float
   */
  public $averageAgentSentimentScore;
  /**
   * The average client's sentiment score.
   *
   * @var float
   */
  public $averageClientSentimentScore;
  /**
   * The average customer satisfaction rating.
   *
   * @var 
   */
  public $averageCustomerSatisfactionRating;
  /**
   * The average duration.
   *
   * @var string
   */
  public $averageDuration;
  /**
   * The average normalized QA score for a scorecard. When computing the average
   * across a set of conversations, if a conversation has been evaluated with
   * multiple revisions of a scorecard, only the latest revision results will be
   * used. Will exclude 0's in average calculation. Will be only populated if
   * the request specifies a dimension of QA_SCORECARD_ID.
   *
   * @var 
   */
  public $averageQaNormalizedScore;
  /**
   * Average QA normalized score averaged for questions averaged across all
   * revisions of the parent scorecard. Will be only populated if the request
   * specifies a dimension of QA_QUESTION_ID.
   *
   * @var 
   */
  public $averageQaQuestionNormalizedScore;
  /**
   * The average silence percentage.
   *
   * @var float
   */
  public $averageSilencePercentage;
  /**
   * Average edit distance of the summarization suggestions. Edit distance (also
   * called as levenshtein distance) is calculated by summing up number of
   * insertions, deletions and substitutions required to transform the
   * summization feedback to the original summary suggestion.
   *
   * @var 
   */
  public $averageSummarizationSuggestionEditDistance;
  /**
   * Normalized Average edit distance of the summarization suggestions. Edit
   * distance (also called as levenshtein distance) is calculated by summing up
   * number of insertions, deletions and substitutions required to transform the
   * summization feedback to the original summary suggestion. Normalized edit
   * distance is the average of (edit distance / summary length).
   *
   * @var 
   */
  public $averageSummarizationSuggestionNormalizedEditDistance;
  /**
   * The average turn count.
   *
   * @var float
   */
  public $averageTurnCount;
  /**
   * The exponential moving average of the sentiment score of client turns in
   * the conversation.
   *
   * @var 
   */
  public $avgConversationClientTurnSentimentEma;
  /**
   * The number of conversations that were contained.
   *
   * @var int
   */
  public $containedConversationCount;
  /**
   * The percentage of conversations that were contained.
   *
   * @var 
   */
  public $containedConversationRatio;
  /**
   * Count of conversations that has Ai Coach Suggestions.
   *
   * @var int
   */
  public $conversationAiCoachSuggestionCount;
  /**
   * Proportion of conversations that has Ai Coach Suggestions.
   *
   * @var 
   */
  public $conversationAiCoachSuggestionRatio;
  /**
   * The conversation count.
   *
   * @var int
   */
  public $conversationCount;
  /**
   * Proportion of conversations that had a suggested summary.
   *
   * @var 
   */
  public $conversationSuggestedSummaryRatio;
  /**
   * The agent message count.
   *
   * @var int
   */
  public $conversationTotalAgentMessageCount;
  /**
   * The customer message count.
   *
   * @var int
   */
  public $conversationTotalCustomerMessageCount;
  /**
   * The average latency of conversational agents' audio in audio out latency
   * per interaction. This is computed as the average of the all the
   * interactions' audio in audio out latencies in a conversation and averaged
   * across conversations.
   *
   * @var 
   */
  public $conversationalAgentsAverageAudioInAudioOutLatency;
  /**
   * The average latency of conversational agents' latency per interaction. This
   * is computed as the average of the all the iteractions' end to end latencies
   * in a conversation and averaged across conversations. The e2e latency is the
   * time between the end of the user utterance and the start of the agent
   * utterance on the interaction level.
   *
   * @var 
   */
  public $conversationalAgentsAverageEndToEndLatency;
  /**
   * The average latency of conversational agents' LLM call latency per
   * interaction. This is computed as the average of the all the interactions
   * LLM call latencies in a conversation and averaged across conversations.
   *
   * @var 
   */
  public $conversationalAgentsAverageLlmCallLatency;
  /**
   * The macro average latency of conversational agents' TTS latency per
   * interaction. This is computed as the average of the all the interactions'
   * TTS latencies in a conversation and averaged across conversations.
   *
   * @var 
   */
  public $conversationalAgentsAverageTtsLatency;
  /**
   * Average latency of dialogflow webhook calls.
   *
   * @var 
   */
  public $dialogflowAverageWebhookLatency;
  /**
   * count of conversations that was handed off from virtual agent to human
   * agent.
   *
   * @var 
   */
  public $dialogflowConversationsEscalationCount;
  /**
   * Proportion of conversations that was handed off from virtual agent to human
   * agent.
   *
   * @var 
   */
  public $dialogflowConversationsEscalationRatio;
  /**
   * Proportion of dialogflow interactions that has empty input.
   *
   * @var 
   */
  public $dialogflowInteractionsNoInputRatio;
  /**
   * Proportion of dialogflow interactions that has no intent match for the
   * input.
   *
   * @var 
   */
  public $dialogflowInteractionsNoMatchRatio;
  /**
   * Proportion of dialogflow webhook calls that failed.
   *
   * @var 
   */
  public $dialogflowWebhookFailureRatio;
  /**
   * Proportion of dialogflow webhook calls that timed out.
   *
   * @var 
   */
  public $dialogflowWebhookTimeoutRatio;
  /**
   * Proportion of knowledge assist (Proactive Generative Knowledge Assist)
   * queries that had negative feedback.
   *
   * @var 
   */
  public $knowledgeAssistNegativeFeedbackRatio;
  /**
   * Proportion of knowledge assist (Proactive Generative Knowledge Assist)
   * queries that had positive feedback.
   *
   * @var 
   */
  public $knowledgeAssistPositiveFeedbackRatio;
  /**
   * Count of knowledge assist results (Proactive Generative Knowledge Assist)
   * shown to the user.
   *
   * @var int
   */
  public $knowledgeAssistResultCount;
  /**
   * Proportion of knowledge assist (Proactive Generative Knowledge Assist)
   * queries that had a URL clicked.
   *
   * @var 
   */
  public $knowledgeAssistUriClickRatio;
  /**
   * Proportion of knowledge search (Generative Knowledge Assist) queries made
   * by the agent compared to the total number of knowledge search queries made.
   *
   * @var 
   */
  public $knowledgeSearchAgentQuerySourceRatio;
  /**
   * Proportion of knowledge search (Generative Knowledge Assist) queries that
   * had negative feedback.
   *
   * @var 
   */
  public $knowledgeSearchNegativeFeedbackRatio;
  /**
   * Proportion of knowledge search (Generative Knowledge Assist) queries that
   * had positive feedback.
   *
   * @var 
   */
  public $knowledgeSearchPositiveFeedbackRatio;
  /**
   * Count of knowledge search results (Generative Knowledge Assist) shown to
   * the user.
   *
   * @var int
   */
  public $knowledgeSearchResultCount;
  /**
   * Proportion of knowledge search (Generative Knowledge Assist) queries
   * suggested compared to the total number of knowledge search queries made.
   *
   * @var 
   */
  public $knowledgeSearchSuggestedQuerySourceRatio;
  /**
   * Proportion of knowledge search (Generative Knowledge Assist) queries that
   * had a URL clicked.
   *
   * @var 
   */
  public $knowledgeSearchUriClickRatio;
  protected $qaTagScoresType = GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasureQaTagScore::class;
  protected $qaTagScoresDataType = 'array';
  /**
   * Proportion of summarization suggestions that were manually edited.
   *
   * @var 
   */
  public $summarizationSuggestionEditRatio;
  /**
   * Count of summarization suggestions results.
   *
   * @var int
   */
  public $summarizationSuggestionResultCount;

  /**
   * The number of conversations that were assigned to an AA human supervisor.
   *
   * @param int $aaSupervisorAssignedConversationsCount
   */
  public function setAaSupervisorAssignedConversationsCount($aaSupervisorAssignedConversationsCount)
  {
    $this->aaSupervisorAssignedConversationsCount = $aaSupervisorAssignedConversationsCount;
  }
  /**
   * @return int
   */
  public function getAaSupervisorAssignedConversationsCount()
  {
    return $this->aaSupervisorAssignedConversationsCount;
  }
  /**
   * The number of conversations that were dropped, i.e. escalated but not
   * assigned to an AA human supervisor.
   *
   * @param int $aaSupervisorDroppedConversationsCount
   */
  public function setAaSupervisorDroppedConversationsCount($aaSupervisorDroppedConversationsCount)
  {
    $this->aaSupervisorDroppedConversationsCount = $aaSupervisorDroppedConversationsCount;
  }
  /**
   * @return int
   */
  public function getAaSupervisorDroppedConversationsCount()
  {
    return $this->aaSupervisorDroppedConversationsCount;
  }
  /**
   * The number of conversations that were escalated to an AA human supervisor
   * for intervention.
   *
   * @param int $aaSupervisorEscalatedConversationsCount
   */
  public function setAaSupervisorEscalatedConversationsCount($aaSupervisorEscalatedConversationsCount)
  {
    $this->aaSupervisorEscalatedConversationsCount = $aaSupervisorEscalatedConversationsCount;
  }
  /**
   * @return int
   */
  public function getAaSupervisorEscalatedConversationsCount()
  {
    return $this->aaSupervisorEscalatedConversationsCount;
  }
  /**
   * The number of conversations scanned by the AA human supervisor.
   *
   * @param int $aaSupervisorMonitoredConversationsCount
   */
  public function setAaSupervisorMonitoredConversationsCount($aaSupervisorMonitoredConversationsCount)
  {
    $this->aaSupervisorMonitoredConversationsCount = $aaSupervisorMonitoredConversationsCount;
  }
  /**
   * @return int
   */
  public function getAaSupervisorMonitoredConversationsCount()
  {
    return $this->aaSupervisorMonitoredConversationsCount;
  }
  /**
   * The number of conversations transferred to a human agent.
   *
   * @param int $aaSupervisorTransferredToHumanAgentConvCount
   */
  public function setAaSupervisorTransferredToHumanAgentConvCount($aaSupervisorTransferredToHumanAgentConvCount)
  {
    $this->aaSupervisorTransferredToHumanAgentConvCount = $aaSupervisorTransferredToHumanAgentConvCount;
  }
  /**
   * @return int
   */
  public function getAaSupervisorTransferredToHumanAgentConvCount()
  {
    return $this->aaSupervisorTransferredToHumanAgentConvCount;
  }
  /**
   * Count of agent messages that triggered an Ai Coach Suggestion.
   *
   * @param int $aiCoachSuggestionAgentMessageTriggerCount
   */
  public function setAiCoachSuggestionAgentMessageTriggerCount($aiCoachSuggestionAgentMessageTriggerCount)
  {
    $this->aiCoachSuggestionAgentMessageTriggerCount = $aiCoachSuggestionAgentMessageTriggerCount;
  }
  /**
   * @return int
   */
  public function getAiCoachSuggestionAgentMessageTriggerCount()
  {
    return $this->aiCoachSuggestionAgentMessageTriggerCount;
  }
  /**
   * Count of Ai Coach Suggestion that has been used by agents.
   *
   * @param int $aiCoachSuggestionAgentUsageCount
   */
  public function setAiCoachSuggestionAgentUsageCount($aiCoachSuggestionAgentUsageCount)
  {
    $this->aiCoachSuggestionAgentUsageCount = $aiCoachSuggestionAgentUsageCount;
  }
  /**
   * @return int
   */
  public function getAiCoachSuggestionAgentUsageCount()
  {
    return $this->aiCoachSuggestionAgentUsageCount;
  }
  public function setAiCoachSuggestionAgentUsageRatio($aiCoachSuggestionAgentUsageRatio)
  {
    $this->aiCoachSuggestionAgentUsageRatio = $aiCoachSuggestionAgentUsageRatio;
  }
  public function getAiCoachSuggestionAgentUsageRatio()
  {
    return $this->aiCoachSuggestionAgentUsageRatio;
  }
  /**
   * Count of customer messages that triggered an Ai Coach Suggestion.
   *
   * @param int $aiCoachSuggestionCustomerMessageTriggerCount
   */
  public function setAiCoachSuggestionCustomerMessageTriggerCount($aiCoachSuggestionCustomerMessageTriggerCount)
  {
    $this->aiCoachSuggestionCustomerMessageTriggerCount = $aiCoachSuggestionCustomerMessageTriggerCount;
  }
  /**
   * @return int
   */
  public function getAiCoachSuggestionCustomerMessageTriggerCount()
  {
    return $this->aiCoachSuggestionCustomerMessageTriggerCount;
  }
  public function setAiCoachSuggestionCustomerMessageTriggerRatio($aiCoachSuggestionCustomerMessageTriggerRatio)
  {
    $this->aiCoachSuggestionCustomerMessageTriggerRatio = $aiCoachSuggestionCustomerMessageTriggerRatio;
  }
  public function getAiCoachSuggestionCustomerMessageTriggerRatio()
  {
    return $this->aiCoachSuggestionCustomerMessageTriggerRatio;
  }
  /**
   * Count of end_of_utterance trigger event messages that triggered an Ai Coach
   * Suggestion.
   *
   * @param int $aiCoachSuggestionMessageTriggerCount
   */
  public function setAiCoachSuggestionMessageTriggerCount($aiCoachSuggestionMessageTriggerCount)
  {
    $this->aiCoachSuggestionMessageTriggerCount = $aiCoachSuggestionMessageTriggerCount;
  }
  /**
   * @return int
   */
  public function getAiCoachSuggestionMessageTriggerCount()
  {
    return $this->aiCoachSuggestionMessageTriggerCount;
  }
  public function setAiCoachSuggestionMessageTriggerRatio($aiCoachSuggestionMessageTriggerRatio)
  {
    $this->aiCoachSuggestionMessageTriggerRatio = $aiCoachSuggestionMessageTriggerRatio;
  }
  public function getAiCoachSuggestionMessageTriggerRatio()
  {
    return $this->aiCoachSuggestionMessageTriggerRatio;
  }
  /**
   * The average agent's sentiment score.
   *
   * @param float $averageAgentSentimentScore
   */
  public function setAverageAgentSentimentScore($averageAgentSentimentScore)
  {
    $this->averageAgentSentimentScore = $averageAgentSentimentScore;
  }
  /**
   * @return float
   */
  public function getAverageAgentSentimentScore()
  {
    return $this->averageAgentSentimentScore;
  }
  /**
   * The average client's sentiment score.
   *
   * @param float $averageClientSentimentScore
   */
  public function setAverageClientSentimentScore($averageClientSentimentScore)
  {
    $this->averageClientSentimentScore = $averageClientSentimentScore;
  }
  /**
   * @return float
   */
  public function getAverageClientSentimentScore()
  {
    return $this->averageClientSentimentScore;
  }
  public function setAverageCustomerSatisfactionRating($averageCustomerSatisfactionRating)
  {
    $this->averageCustomerSatisfactionRating = $averageCustomerSatisfactionRating;
  }
  public function getAverageCustomerSatisfactionRating()
  {
    return $this->averageCustomerSatisfactionRating;
  }
  /**
   * The average duration.
   *
   * @param string $averageDuration
   */
  public function setAverageDuration($averageDuration)
  {
    $this->averageDuration = $averageDuration;
  }
  /**
   * @return string
   */
  public function getAverageDuration()
  {
    return $this->averageDuration;
  }
  public function setAverageQaNormalizedScore($averageQaNormalizedScore)
  {
    $this->averageQaNormalizedScore = $averageQaNormalizedScore;
  }
  public function getAverageQaNormalizedScore()
  {
    return $this->averageQaNormalizedScore;
  }
  public function setAverageQaQuestionNormalizedScore($averageQaQuestionNormalizedScore)
  {
    $this->averageQaQuestionNormalizedScore = $averageQaQuestionNormalizedScore;
  }
  public function getAverageQaQuestionNormalizedScore()
  {
    return $this->averageQaQuestionNormalizedScore;
  }
  /**
   * The average silence percentage.
   *
   * @param float $averageSilencePercentage
   */
  public function setAverageSilencePercentage($averageSilencePercentage)
  {
    $this->averageSilencePercentage = $averageSilencePercentage;
  }
  /**
   * @return float
   */
  public function getAverageSilencePercentage()
  {
    return $this->averageSilencePercentage;
  }
  public function setAverageSummarizationSuggestionEditDistance($averageSummarizationSuggestionEditDistance)
  {
    $this->averageSummarizationSuggestionEditDistance = $averageSummarizationSuggestionEditDistance;
  }
  public function getAverageSummarizationSuggestionEditDistance()
  {
    return $this->averageSummarizationSuggestionEditDistance;
  }
  public function setAverageSummarizationSuggestionNormalizedEditDistance($averageSummarizationSuggestionNormalizedEditDistance)
  {
    $this->averageSummarizationSuggestionNormalizedEditDistance = $averageSummarizationSuggestionNormalizedEditDistance;
  }
  public function getAverageSummarizationSuggestionNormalizedEditDistance()
  {
    return $this->averageSummarizationSuggestionNormalizedEditDistance;
  }
  /**
   * The average turn count.
   *
   * @param float $averageTurnCount
   */
  public function setAverageTurnCount($averageTurnCount)
  {
    $this->averageTurnCount = $averageTurnCount;
  }
  /**
   * @return float
   */
  public function getAverageTurnCount()
  {
    return $this->averageTurnCount;
  }
  public function setAvgConversationClientTurnSentimentEma($avgConversationClientTurnSentimentEma)
  {
    $this->avgConversationClientTurnSentimentEma = $avgConversationClientTurnSentimentEma;
  }
  public function getAvgConversationClientTurnSentimentEma()
  {
    return $this->avgConversationClientTurnSentimentEma;
  }
  /**
   * The number of conversations that were contained.
   *
   * @param int $containedConversationCount
   */
  public function setContainedConversationCount($containedConversationCount)
  {
    $this->containedConversationCount = $containedConversationCount;
  }
  /**
   * @return int
   */
  public function getContainedConversationCount()
  {
    return $this->containedConversationCount;
  }
  public function setContainedConversationRatio($containedConversationRatio)
  {
    $this->containedConversationRatio = $containedConversationRatio;
  }
  public function getContainedConversationRatio()
  {
    return $this->containedConversationRatio;
  }
  /**
   * Count of conversations that has Ai Coach Suggestions.
   *
   * @param int $conversationAiCoachSuggestionCount
   */
  public function setConversationAiCoachSuggestionCount($conversationAiCoachSuggestionCount)
  {
    $this->conversationAiCoachSuggestionCount = $conversationAiCoachSuggestionCount;
  }
  /**
   * @return int
   */
  public function getConversationAiCoachSuggestionCount()
  {
    return $this->conversationAiCoachSuggestionCount;
  }
  public function setConversationAiCoachSuggestionRatio($conversationAiCoachSuggestionRatio)
  {
    $this->conversationAiCoachSuggestionRatio = $conversationAiCoachSuggestionRatio;
  }
  public function getConversationAiCoachSuggestionRatio()
  {
    return $this->conversationAiCoachSuggestionRatio;
  }
  /**
   * The conversation count.
   *
   * @param int $conversationCount
   */
  public function setConversationCount($conversationCount)
  {
    $this->conversationCount = $conversationCount;
  }
  /**
   * @return int
   */
  public function getConversationCount()
  {
    return $this->conversationCount;
  }
  public function setConversationSuggestedSummaryRatio($conversationSuggestedSummaryRatio)
  {
    $this->conversationSuggestedSummaryRatio = $conversationSuggestedSummaryRatio;
  }
  public function getConversationSuggestedSummaryRatio()
  {
    return $this->conversationSuggestedSummaryRatio;
  }
  /**
   * The agent message count.
   *
   * @param int $conversationTotalAgentMessageCount
   */
  public function setConversationTotalAgentMessageCount($conversationTotalAgentMessageCount)
  {
    $this->conversationTotalAgentMessageCount = $conversationTotalAgentMessageCount;
  }
  /**
   * @return int
   */
  public function getConversationTotalAgentMessageCount()
  {
    return $this->conversationTotalAgentMessageCount;
  }
  /**
   * The customer message count.
   *
   * @param int $conversationTotalCustomerMessageCount
   */
  public function setConversationTotalCustomerMessageCount($conversationTotalCustomerMessageCount)
  {
    $this->conversationTotalCustomerMessageCount = $conversationTotalCustomerMessageCount;
  }
  /**
   * @return int
   */
  public function getConversationTotalCustomerMessageCount()
  {
    return $this->conversationTotalCustomerMessageCount;
  }
  public function setConversationalAgentsAverageAudioInAudioOutLatency($conversationalAgentsAverageAudioInAudioOutLatency)
  {
    $this->conversationalAgentsAverageAudioInAudioOutLatency = $conversationalAgentsAverageAudioInAudioOutLatency;
  }
  public function getConversationalAgentsAverageAudioInAudioOutLatency()
  {
    return $this->conversationalAgentsAverageAudioInAudioOutLatency;
  }
  public function setConversationalAgentsAverageEndToEndLatency($conversationalAgentsAverageEndToEndLatency)
  {
    $this->conversationalAgentsAverageEndToEndLatency = $conversationalAgentsAverageEndToEndLatency;
  }
  public function getConversationalAgentsAverageEndToEndLatency()
  {
    return $this->conversationalAgentsAverageEndToEndLatency;
  }
  public function setConversationalAgentsAverageLlmCallLatency($conversationalAgentsAverageLlmCallLatency)
  {
    $this->conversationalAgentsAverageLlmCallLatency = $conversationalAgentsAverageLlmCallLatency;
  }
  public function getConversationalAgentsAverageLlmCallLatency()
  {
    return $this->conversationalAgentsAverageLlmCallLatency;
  }
  public function setConversationalAgentsAverageTtsLatency($conversationalAgentsAverageTtsLatency)
  {
    $this->conversationalAgentsAverageTtsLatency = $conversationalAgentsAverageTtsLatency;
  }
  public function getConversationalAgentsAverageTtsLatency()
  {
    return $this->conversationalAgentsAverageTtsLatency;
  }
  public function setDialogflowAverageWebhookLatency($dialogflowAverageWebhookLatency)
  {
    $this->dialogflowAverageWebhookLatency = $dialogflowAverageWebhookLatency;
  }
  public function getDialogflowAverageWebhookLatency()
  {
    return $this->dialogflowAverageWebhookLatency;
  }
  public function setDialogflowConversationsEscalationCount($dialogflowConversationsEscalationCount)
  {
    $this->dialogflowConversationsEscalationCount = $dialogflowConversationsEscalationCount;
  }
  public function getDialogflowConversationsEscalationCount()
  {
    return $this->dialogflowConversationsEscalationCount;
  }
  public function setDialogflowConversationsEscalationRatio($dialogflowConversationsEscalationRatio)
  {
    $this->dialogflowConversationsEscalationRatio = $dialogflowConversationsEscalationRatio;
  }
  public function getDialogflowConversationsEscalationRatio()
  {
    return $this->dialogflowConversationsEscalationRatio;
  }
  public function setDialogflowInteractionsNoInputRatio($dialogflowInteractionsNoInputRatio)
  {
    $this->dialogflowInteractionsNoInputRatio = $dialogflowInteractionsNoInputRatio;
  }
  public function getDialogflowInteractionsNoInputRatio()
  {
    return $this->dialogflowInteractionsNoInputRatio;
  }
  public function setDialogflowInteractionsNoMatchRatio($dialogflowInteractionsNoMatchRatio)
  {
    $this->dialogflowInteractionsNoMatchRatio = $dialogflowInteractionsNoMatchRatio;
  }
  public function getDialogflowInteractionsNoMatchRatio()
  {
    return $this->dialogflowInteractionsNoMatchRatio;
  }
  public function setDialogflowWebhookFailureRatio($dialogflowWebhookFailureRatio)
  {
    $this->dialogflowWebhookFailureRatio = $dialogflowWebhookFailureRatio;
  }
  public function getDialogflowWebhookFailureRatio()
  {
    return $this->dialogflowWebhookFailureRatio;
  }
  public function setDialogflowWebhookTimeoutRatio($dialogflowWebhookTimeoutRatio)
  {
    $this->dialogflowWebhookTimeoutRatio = $dialogflowWebhookTimeoutRatio;
  }
  public function getDialogflowWebhookTimeoutRatio()
  {
    return $this->dialogflowWebhookTimeoutRatio;
  }
  public function setKnowledgeAssistNegativeFeedbackRatio($knowledgeAssistNegativeFeedbackRatio)
  {
    $this->knowledgeAssistNegativeFeedbackRatio = $knowledgeAssistNegativeFeedbackRatio;
  }
  public function getKnowledgeAssistNegativeFeedbackRatio()
  {
    return $this->knowledgeAssistNegativeFeedbackRatio;
  }
  public function setKnowledgeAssistPositiveFeedbackRatio($knowledgeAssistPositiveFeedbackRatio)
  {
    $this->knowledgeAssistPositiveFeedbackRatio = $knowledgeAssistPositiveFeedbackRatio;
  }
  public function getKnowledgeAssistPositiveFeedbackRatio()
  {
    return $this->knowledgeAssistPositiveFeedbackRatio;
  }
  /**
   * Count of knowledge assist results (Proactive Generative Knowledge Assist)
   * shown to the user.
   *
   * @param int $knowledgeAssistResultCount
   */
  public function setKnowledgeAssistResultCount($knowledgeAssistResultCount)
  {
    $this->knowledgeAssistResultCount = $knowledgeAssistResultCount;
  }
  /**
   * @return int
   */
  public function getKnowledgeAssistResultCount()
  {
    return $this->knowledgeAssistResultCount;
  }
  public function setKnowledgeAssistUriClickRatio($knowledgeAssistUriClickRatio)
  {
    $this->knowledgeAssistUriClickRatio = $knowledgeAssistUriClickRatio;
  }
  public function getKnowledgeAssistUriClickRatio()
  {
    return $this->knowledgeAssistUriClickRatio;
  }
  public function setKnowledgeSearchAgentQuerySourceRatio($knowledgeSearchAgentQuerySourceRatio)
  {
    $this->knowledgeSearchAgentQuerySourceRatio = $knowledgeSearchAgentQuerySourceRatio;
  }
  public function getKnowledgeSearchAgentQuerySourceRatio()
  {
    return $this->knowledgeSearchAgentQuerySourceRatio;
  }
  public function setKnowledgeSearchNegativeFeedbackRatio($knowledgeSearchNegativeFeedbackRatio)
  {
    $this->knowledgeSearchNegativeFeedbackRatio = $knowledgeSearchNegativeFeedbackRatio;
  }
  public function getKnowledgeSearchNegativeFeedbackRatio()
  {
    return $this->knowledgeSearchNegativeFeedbackRatio;
  }
  public function setKnowledgeSearchPositiveFeedbackRatio($knowledgeSearchPositiveFeedbackRatio)
  {
    $this->knowledgeSearchPositiveFeedbackRatio = $knowledgeSearchPositiveFeedbackRatio;
  }
  public function getKnowledgeSearchPositiveFeedbackRatio()
  {
    return $this->knowledgeSearchPositiveFeedbackRatio;
  }
  /**
   * Count of knowledge search results (Generative Knowledge Assist) shown to
   * the user.
   *
   * @param int $knowledgeSearchResultCount
   */
  public function setKnowledgeSearchResultCount($knowledgeSearchResultCount)
  {
    $this->knowledgeSearchResultCount = $knowledgeSearchResultCount;
  }
  /**
   * @return int
   */
  public function getKnowledgeSearchResultCount()
  {
    return $this->knowledgeSearchResultCount;
  }
  public function setKnowledgeSearchSuggestedQuerySourceRatio($knowledgeSearchSuggestedQuerySourceRatio)
  {
    $this->knowledgeSearchSuggestedQuerySourceRatio = $knowledgeSearchSuggestedQuerySourceRatio;
  }
  public function getKnowledgeSearchSuggestedQuerySourceRatio()
  {
    return $this->knowledgeSearchSuggestedQuerySourceRatio;
  }
  public function setKnowledgeSearchUriClickRatio($knowledgeSearchUriClickRatio)
  {
    $this->knowledgeSearchUriClickRatio = $knowledgeSearchUriClickRatio;
  }
  public function getKnowledgeSearchUriClickRatio()
  {
    return $this->knowledgeSearchUriClickRatio;
  }
  /**
   * Average QA normalized score for all the tags.
   *
   * @param GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasureQaTagScore[] $qaTagScores
   */
  public function setQaTagScores($qaTagScores)
  {
    $this->qaTagScores = $qaTagScores;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasureQaTagScore[]
   */
  public function getQaTagScores()
  {
    return $this->qaTagScores;
  }
  public function setSummarizationSuggestionEditRatio($summarizationSuggestionEditRatio)
  {
    $this->summarizationSuggestionEditRatio = $summarizationSuggestionEditRatio;
  }
  public function getSummarizationSuggestionEditRatio()
  {
    return $this->summarizationSuggestionEditRatio;
  }
  /**
   * Count of summarization suggestions results.
   *
   * @param int $summarizationSuggestionResultCount
   */
  public function setSummarizationSuggestionResultCount($summarizationSuggestionResultCount)
  {
    $this->summarizationSuggestionResultCount = $summarizationSuggestionResultCount;
  }
  /**
   * @return int
   */
  public function getSummarizationSuggestionResultCount()
  {
    return $this->summarizationSuggestionResultCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasure::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointConversationMeasure');
