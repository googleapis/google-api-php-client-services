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
 * Service definition for Supportcases (v2).
 *
 * <p>
 * Support Cases API</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Supportcases extends Google_Service
{
  /** View and manage your Google Support Cases. */
  const CASES =
      "https://www.googleapis.com/auth/cases";
  /** View your Google Support Cases. */
  const CASES_READONLY =
      "https://www.googleapis.com/auth/cases.readonly";

  public $agentSettings;
  public $cases;
  public $categoryInfos;
  public $categoryInfos_listChildren;
  public $categoryInfos_listTopLevel;
  public $communications;
  public $communications_createEmail;
  public $communications_createNote;
  public $customerInteractions;
  public $devices;
  public $resolutions;
  private $base_methods;
  /**
   * Constructs the internal representation of the Supportcases service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://supportcases.googleapis.com/';
    $this->servicePath = 'v2/';
    $this->version = 'v2';
    $this->serviceName = 'supportcases';

    $this->agentSettings = new Google_Service_Supportcases_Resource_AgentSettings(
        $this,
        $this->serviceName,
        'agentSettings',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'agentSettings',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->cases = new Google_Service_Supportcases_Resource_Cases(
        $this,
        $this->serviceName,
        'cases',
        array(
          'methods' => array(
            'assign' => array(
              'path' => '{+name}:assign',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'dedupe' => array(
              'path' => '{+name}:dedupe',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'finish' => array(
              'path' => '{+name}:finish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'needsInfo' => array(
              'path' => '{+name}:needsInfo',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'offeredSolution' => array(
              'path' => '{+name}:offeredSolution',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'release' => array(
              'path' => '{+name}:release',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'route' => array(
              'path' => '{+name}:route',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'take' => array(
              'path' => '{+name}:take',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'transfer' => array(
              'path' => '{+name}:transfer',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'unassign' => array(
              'path' => '{+name}:unassign',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateContactName' => array(
              'path' => '{+name}:updateContactName',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateCustomerAttributes' => array(
              'path' => '{+name}:updateCustomerAttributes',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->categoryInfos = new Google_Service_Supportcases_Resource_CategoryInfos(
        $this,
        $this->serviceName,
        'categoryInfos',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'categoryInfos:search',
              'httpMethod' => 'GET',
              'parameters' => array(
                'baselineOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'filterByParentCategoryId' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'filterConsultCategories' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maximumResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'productIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->categoryInfos_listChildren = new Google_Service_Supportcases_Resource_CategoryInfosListChildren(
        $this,
        $this->serviceName,
        'listChildren',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{+name}:listChildren',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->categoryInfos_listTopLevel = new Google_Service_Supportcases_Resource_CategoryInfosListTopLevel(
        $this,
        $this->serviceName,
        'listTopLevel',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'categoryInfos:listTopLevel',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->communications = new Google_Service_Supportcases_Resource_Communications(
        $this,
        $this->serviceName,
        'communications',
        array(
          'methods' => array(
            'cancelSend' => array(
              'path' => '{+name}:cancelSend',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'discardDraft' => array(
              'path' => '{+name}:discardDraft',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'communications',
              'httpMethod' => 'GET',
              'parameters' => array(
                'caseIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'send' => array(
              'path' => '{+name}:send',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateEmail' => array(
              'path' => '{+name}:updateEmail',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateNote' => array(
              'path' => '{+name}:updateNote',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->communications_createEmail = new Google_Service_Supportcases_Resource_CommunicationsCreateEmail(
        $this,
        $this->serviceName,
        'createEmail',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'communications:createEmail',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->communications_createNote = new Google_Service_Supportcases_Resource_CommunicationsCreateNote(
        $this,
        $this->serviceName,
        'createNote',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'communications:createNote',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->customerInteractions = new Google_Service_Supportcases_Resource_CustomerInteractions(
        $this,
        $this->serviceName,
        'customerInteractions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'customerInteractions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adwordsCid' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'emailAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'summarize' => array(
              'path' => 'customerInteractions:summarize',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adwordsCid' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'emailAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->devices = new Google_Service_Supportcases_Resource_Devices(
        $this,
        $this->serviceName,
        'devices',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'devices',
              'httpMethod' => 'GET',
              'parameters' => array(
                'email' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->resolutions = new Google_Service_Supportcases_Resource_Resolutions(
        $this,
        $this->serviceName,
        'resolutions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'resolutions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'caseId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'resultsToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'getGetByAgentId' => array(
              'path' => 'agentSettings:getByAgentId',
              'httpMethod' => 'GET',
              'parameters' => array(
                'agentId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
  /**
   * Custom get for agent setting for agent id specified in the request. The agent
   * id can be obfuscated GAIA id. (getGetByAgentId)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string agentId
   * @return Google_Service_Supportcases_AgentSetting
   */
  public function getGetByAgentId($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('getGetByAgentId', array($params), "Google_Service_Supportcases_AgentSetting");
  }
}
