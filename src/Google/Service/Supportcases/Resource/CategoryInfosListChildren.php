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
 * The "listChildren" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $listChildren = $supportcasesService->listChildren;
 *  </code>
 */
class Google_Service_Supportcases_Resource_CategoryInfosListChildren extends Google_Service_Resource
{
  /**
   * Lists children category info. (listChildren.listCategoryInfosListChildren)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_ListChildrenCategoryInfosResponse
   */
  public function listCategoryInfosListChildren($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Supportcases_ListChildrenCategoryInfosResponse");
  }
}
