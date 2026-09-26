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

namespace Google\Service\Sheets;

class PostAuthor extends \Google\Model
{
  /**
   * Whether the user is anonymous.
   *
   * @var bool
   */
  public $anonymous;
  /**
   * The display name of the user. May be absent if the author is anonymous.
   *
   * @var string
   */
  public $displayName;
  /**
   * Whether the user is the authenticated user making the request.
   *
   * @var bool
   */
  public $me;
  /**
   * The resource name of the post author user, which can also be used to
   * identify the user in the [Google People
   * API](https://developers.google.com/people/api/rest/v1/people). Format:
   * `users/{user}`. Will not be populated if the anonymous field is `true` or
   * if the post is from an imported spreadsheet.
   *
   * @var string
   */
  public $user;

  /**
   * Whether the user is anonymous.
   *
   * @param bool $anonymous
   */
  public function setAnonymous($anonymous)
  {
    $this->anonymous = $anonymous;
  }
  /**
   * @return bool
   */
  public function getAnonymous()
  {
    return $this->anonymous;
  }
  /**
   * The display name of the user. May be absent if the author is anonymous.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Whether the user is the authenticated user making the request.
   *
   * @param bool $me
   */
  public function setMe($me)
  {
    $this->me = $me;
  }
  /**
   * @return bool
   */
  public function getMe()
  {
    return $this->me;
  }
  /**
   * The resource name of the post author user, which can also be used to
   * identify the user in the [Google People
   * API](https://developers.google.com/people/api/rest/v1/people). Format:
   * `users/{user}`. Will not be populated if the anonymous field is `true` or
   * if the post is from an imported spreadsheet.
   *
   * @param string $user
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostAuthor::class, 'Google_Service_Sheets_PostAuthor');
