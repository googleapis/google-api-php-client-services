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

namespace Google\Service\Apigateway;

class ApigatewayGateway extends \Google\Model
{
  /**
   * Indicates that the service has not resolved a mode. Every gateway returned
   * by `GetGateway` and `ListGateways` carries a resolved mode, so this value
   * should not be returned under normal circumstances.
   */
  public const EFFECTIVE_STREAMING_MODE_EFFECTIVE_STREAMING_MODE_UNSPECIFIED = 'EFFECTIVE_STREAMING_MODE_UNSPECIFIED';
  /**
   * Indicates that the gateway does not support streaming.
   */
  public const EFFECTIVE_STREAMING_MODE_EFFECTIVE_STREAMING_MODE_DISABLED = 'EFFECTIVE_STREAMING_MODE_DISABLED';
  /**
   * Indicates that the gateway supports streaming.
   */
  public const EFFECTIVE_STREAMING_MODE_EFFECTIVE_STREAMING_MODE_ENABLED = 'EFFECTIVE_STREAMING_MODE_ENABLED';
  /**
   * Gateway does not have a state yet.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Gateway is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * Gateway is running and ready for requests.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Gateway creation failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Gateway is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Gateway is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * Lets the service select the streaming mode.
   */
  public const STREAMING_MODE_STREAMING_MODE_UNSPECIFIED = 'STREAMING_MODE_UNSPECIFIED';
  /**
   * Enables streaming. The gateway supports Server-Sent Events (SSE), HTTP/2
   * streaming, HTTP chunked transfer, WebSockets, and gRPC bidirectional
   * streaming. The API config's backend `deadline` field governs how long a
   * request (unary or streaming) may run. Enabling streaming on a gateway does
   * not change how the `deadline` field behaves on an SSE or chunked-transfer
   * path. The deadline remains a wall-clock bound on the complete response, so
   * a stream is cut once the deadline elapses regardless of how much data it is
   * sending. The default is 15 seconds and the maximum is 3,600 seconds. On
   * gRPC streaming and WebSockets, `deadline` bounds the gap between messages
   * instead: default 300 seconds; set `deadline` to change it, up to 3,600
   * seconds. On WebSockets, a `deadline` of less than 300 seconds is ignored
   * and a 300-second minimum applies. The maximum total request duration is
   * always 3,600 seconds, not configurable.
   */
  public const STREAMING_MODE_STREAMING_MODE_ENABLED = 'STREAMING_MODE_ENABLED';
  /**
   * Required. Resource name of the API Config for this Gateway. Format:
   * projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
   *
   * @var string
   */
  public $apiConfig;
  /**
   * Output only. Created time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The default hostname that serves traffic for this Gateway.
   *
   * @var string
   */
  public $defaultHostname;
  /**
   * Optional. Display name.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The streaming mode this gateway is actually served with, which
   * the service resolves at creation from `streaming_mode`, the referenced API
   * Config, and the platform default at the time. Read this rather than
   * `streaming_mode` to determine whether a gateway supports streaming.
   *
   * @var string
   */
  public $effectiveStreamingMode;
  /**
   * Optional. Resource labels to represent user-provided metadata. Refer to
   * cloud documentation on labels for more details.
   * https://cloud.google.com/compute/docs/labeling-resources
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. Resource name of the Gateway. Format:
   * projects/{project}/locations/{location}/gateways/{gateway}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current state of the Gateway.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. Immutable. Requests streaming for a new gateway. An attempt to
   * change it on update is rejected. If unset, the service selects the mode.
   * This field records only what was requested and is never modified by the
   * service; read `effective_streaming_mode` for the mode the gateway is served
   * with.
   *
   * @var string
   */
  public $streamingMode;
  /**
   * Output only. Updated time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Resource name of the API Config for this Gateway. Format:
   * projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
   *
   * @param string $apiConfig
   */
  public function setApiConfig($apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }
  /**
   * @return string
   */
  public function getApiConfig()
  {
    return $this->apiConfig;
  }
  /**
   * Output only. Created time.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The default hostname that serves traffic for this Gateway.
   *
   * @param string $defaultHostname
   */
  public function setDefaultHostname($defaultHostname)
  {
    $this->defaultHostname = $defaultHostname;
  }
  /**
   * @return string
   */
  public function getDefaultHostname()
  {
    return $this->defaultHostname;
  }
  /**
   * Optional. Display name.
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
   * Output only. The streaming mode this gateway is actually served with, which
   * the service resolves at creation from `streaming_mode`, the referenced API
   * Config, and the platform default at the time. Read this rather than
   * `streaming_mode` to determine whether a gateway supports streaming.
   *
   * Accepted values: EFFECTIVE_STREAMING_MODE_UNSPECIFIED,
   * EFFECTIVE_STREAMING_MODE_DISABLED, EFFECTIVE_STREAMING_MODE_ENABLED
   *
   * @param self::EFFECTIVE_STREAMING_MODE_* $effectiveStreamingMode
   */
  public function setEffectiveStreamingMode($effectiveStreamingMode)
  {
    $this->effectiveStreamingMode = $effectiveStreamingMode;
  }
  /**
   * @return self::EFFECTIVE_STREAMING_MODE_*
   */
  public function getEffectiveStreamingMode()
  {
    return $this->effectiveStreamingMode;
  }
  /**
   * Optional. Resource labels to represent user-provided metadata. Refer to
   * cloud documentation on labels for more details.
   * https://cloud.google.com/compute/docs/labeling-resources
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. Resource name of the Gateway. Format:
   * projects/{project}/locations/{location}/gateways/{gateway}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The current state of the Gateway.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, FAILED, DELETING,
   * UPDATING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. Immutable. Requests streaming for a new gateway. An attempt to
   * change it on update is rejected. If unset, the service selects the mode.
   * This field records only what was requested and is never modified by the
   * service; read `effective_streaming_mode` for the mode the gateway is served
   * with.
   *
   * Accepted values: STREAMING_MODE_UNSPECIFIED, STREAMING_MODE_ENABLED
   *
   * @param self::STREAMING_MODE_* $streamingMode
   */
  public function setStreamingMode($streamingMode)
  {
    $this->streamingMode = $streamingMode;
  }
  /**
   * @return self::STREAMING_MODE_*
   */
  public function getStreamingMode()
  {
    return $this->streamingMode;
  }
  /**
   * Output only. Updated time.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApigatewayGateway::class, 'Google_Service_Apigateway_ApigatewayGateway');
