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

namespace Google\Service\Drive\Resource;

use Google\Service\Drive\Approval;
use Google\Service\Drive\ApprovalList;
use Google\Service\Drive\ApproveApprovalRequest;
use Google\Service\Drive\CancelApprovalRequest;
use Google\Service\Drive\CommentApprovalRequest;
use Google\Service\Drive\DeclineApprovalRequest;
use Google\Service\Drive\ReassignApprovalRequest;
use Google\Service\Drive\StartApprovalRequest;

/**
 * The "approvals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google\Service\Drive(...);
 *   $approvals = $driveService->approvals;
 *  </code>
 */
class Approvals extends \Google\Service\Resource
{
  /**
   * Approves an approval. For more information, see [Manage approvals](https://de
   * velopers.google.com/workspace/drive/api/guides/approvals). This is used to
   * update the ReviewerResponse of the requesting user with a Response of
   * `APPROVED`. If this is the last required reviewer response, this also
   * completes the approval and sets the approval Status to `APPROVED`.
   * (approvals.approve)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval to approve.
   * @param ApproveApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function approve($fileId, $approvalId, ApproveApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('approve', [$params], Approval::class);
  }
  /**
   * Cancels an approval. For more information, see [Manage approvals](https://dev
   * elopers.google.com/workspace/drive/api/guides/approvals). Updates the
   * approval Status to `CANCELLED`. This can be called by any user with the
   * `writer` permission on the file while the approval Status is `IN_PROGRESS`.
   * (approvals.cancel)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval to cancel.
   * @param CancelApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function cancel($fileId, $approvalId, CancelApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], Approval::class);
  }
  /**
   * Comments on an approval. For more information, see [Manage approvals](https:/
   * /developers.google.com/workspace/drive/api/guides/approvals). This sends a
   * notification to both the initiator and the reviewers. Additionally, a message
   * is also added to the approval activity log. (approvals.comment)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval to comment on.
   * @param CommentApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function comment($fileId, $approvalId, CommentApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('comment', [$params], Approval::class);
  }
  /**
   * Declines an approval. For more information, see [Manage approvals](https://de
   * velopers.google.com/workspace/drive/api/guides/approvals). This is used to
   * update the ReviewerResponse of the requesting user with a Response of
   * `DECLINED`. This also completes the approval and sets the approval Status to
   * `DECLINED`. (approvals.decline)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval to decline.
   * @param DeclineApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function decline($fileId, $approvalId, DeclineApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('decline', [$params], Approval::class);
  }
  /**
   * Gets an approval by ID. For more information, see [Manage approvals](https://
   * developers.google.com/workspace/drive/api/guides/approvals). (approvals.get)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval.
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function get($fileId, $approvalId, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Approval::class);
  }
  /**
   * Lists the approvals on a file. For more information, see [Manage approvals](h
   * ttps://developers.google.com/workspace/drive/api/guides/approvals). By
   * default, this method returns a minimal response that may not include the
   * items array. To retrieve approval details, you must explicitly specify the
   * fields you want using the `fields` query parameter. To return the exact
   * fields you need, see [Return specific
   * fields](https://developers.google.com/workspace/drive/api/guides/fields-
   * parameter). (approvals.listApprovals)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of approvals to return. When not
   * set, at most 100 approvals are returned.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of `nextPageToken` from a
   * previous response.
   * @return ApprovalList
   * @throws \Google\Service\Exception
   */
  public function listApprovals($fileId, $optParams = [])
  {
    $params = ['fileId' => $fileId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ApprovalList::class);
  }
  /**
   * Reassigns the reviewers on an approval. For more information, see [Manage app
   * rovals](https://developers.google.com/workspace/drive/api/guides/approvals).
   * Adds or replaces reviewers in the ReviewerResponse of the approval. This can
   * be called by any user with the `writer` permission on the file while the
   * approval Status is `IN_PROGRESS` and the Response for the reviewer being
   * reassigned is `NO_RESPONSE`. A user with the `reader` permission can only
   * reassign an approval that's assigned to themselves. Removing a reviewer isn't
   * allowed. (approvals.reassign)
   *
   * @param string $fileId Required. The ID of the file that the approval is on.
   * @param string $approvalId Required. The ID of the approval to reassign.
   * @param ReassignApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function reassign($fileId, $approvalId, ReassignApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'approvalId' => $approvalId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('reassign', [$params], Approval::class);
  }
  /**
   * Starts an approval on a file. For more information, see [Manage approvals](ht
   * tps://developers.google.com/workspace/drive/api/guides/approvals).
   * (approvals.start)
   *
   * @param string $fileId Required. The ID of the file that the approval is
   * created on.
   * @param StartApprovalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Approval
   * @throws \Google\Service\Exception
   */
  public function start($fileId, StartApprovalRequest $postBody, $optParams = [])
  {
    $params = ['fileId' => $fileId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('start', [$params], Approval::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Approvals::class, 'Google_Service_Drive_Resource_Approvals');
