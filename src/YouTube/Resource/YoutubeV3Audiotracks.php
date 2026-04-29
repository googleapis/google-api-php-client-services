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

namespace Google\Service\YouTube\Resource;

use Google\Service\YouTube\ListAudioTracksResponse;

/**
 * The "audiotracks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google\Service\YouTube(...);
 *   $audiotracks = $youtubeService->youtube_v3_audiotracks;
 *  </code>
 */
class YoutubeV3Audiotracks extends \Google\Service\Resource
{
  /**
   * Retrieves a list of AudioTracks for a video.
   * (audiotracks.listYoutubeV3Audiotracks)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language Required. Filter by specific BCP-47 language
   * codes.
   * @opt_param string part Optional. The `part` parameter specifies a comma-
   * separated list of one or more `AudioTrack` resource parts that the API
   * response will include. The `part` names that you can include in the parameter
   * value are `id` and `snippet`.
   * @opt_param string videoId Required. The external YouTube video ID.
   * @return ListAudioTracksResponse
   * @throws \Google\Service\Exception
   */
  public function listYoutubeV3Audiotracks($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAudioTracksResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeV3Audiotracks::class, 'Google_Service_YouTube_Resource_YoutubeV3Audiotracks');
