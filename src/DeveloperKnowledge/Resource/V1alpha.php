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

namespace Google\Service\DeveloperKnowledge\Resource;

use Google\Service\DeveloperKnowledge\AnswerQueryRequest;
use Google\Service\DeveloperKnowledge\AnswerQueryResponse;

/**
 * The "v1alpha" collection of methods.
 * Typical usage is:
 *  <code>
 *   $developerknowledgeService = new Google\Service\DeveloperKnowledge(...);
 *   $v1alpha = $developerknowledgeService->v1alpha;
 *  </code>
 */
class V1alpha extends \Google\Service\Resource
{
  /**
   * Answers a query using grounded generation. (v1alpha.answerQuery)
   *
   * @param AnswerQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AnswerQueryResponse
   * @throws \Google\Service\Exception
   */
  public function answerQuery(AnswerQueryRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('answerQuery', [$params], AnswerQueryResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(V1alpha::class, 'Google_Service_DeveloperKnowledge_Resource_V1alpha');
