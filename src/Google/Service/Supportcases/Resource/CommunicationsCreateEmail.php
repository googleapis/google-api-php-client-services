<?php
/*
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

/**
 * The "createEmail" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $createEmail = $supportcasesService->createEmail;
 *  </code>
 */
class Google_Service_Supportcases_Resource_CommunicationsCreateEmail extends Google_Service_Resource
{
  /**
   * Creates a draft email and adds it to a case. (createEmail.create)
   *
   * @param Google_Service_Supportcases_CreateEmailRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_CreateEmailResponse
   */
  public function create(Google_Service_Supportcases_CreateEmailRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Supportcases_CreateEmailResponse");
  }
}
