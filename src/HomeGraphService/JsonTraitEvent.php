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

namespace Google\Service\HomeGraphService;

class JsonTraitEvent extends \Google\Model
{
  /**
   * Optional. Holds the event payload fields, which conform to the event's
   * registered JSON Schema.
   *
   * @var array[]
   */
  public $data;
  /**
   * Required. Identifies the event as `.`, where `` is the PascalCase key in
   * the schema's `x-capability-info.events`, for example
   * `capability.matter.standard.DoorLock.LockOperation` or
   * `capability.generic.acme.Warranty.ClaimUpdated`.
   *
   * @var string
   */
  public $id;

  /**
   * Optional. Holds the event payload fields, which conform to the event's
   * registered JSON Schema.
   *
   * @param array[] $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return array[]
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * Required. Identifies the event as `.`, where `` is the PascalCase key in
   * the schema's `x-capability-info.events`, for example
   * `capability.matter.standard.DoorLock.LockOperation` or
   * `capability.generic.acme.Warranty.ClaimUpdated`.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JsonTraitEvent::class, 'Google_Service_HomeGraphService_JsonTraitEvent');
