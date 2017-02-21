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

class Google_Service_Supportcases_Event extends Google_Model
{
  protected $chatMessageType = 'Google_Service_Supportcases_ChatMessage';
  protected $chatMessageDataType = '';
  public $createTime;

  public function setChatMessage(Google_Service_Supportcases_ChatMessage $chatMessage)
  {
    $this->chatMessage = $chatMessage;
  }
  public function getChatMessage()
  {
    return $this->chatMessage;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
}
