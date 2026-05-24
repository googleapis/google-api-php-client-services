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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1ChangeRequest extends \Google\Model
{
  /**
   * State unspecified.
   */
  public const CHANGE_TYPE_CHANGE_TYPE_UNSPECIFIED = 'CHANGE_TYPE_UNSPECIFIED';
  /**
   * Request to create an Entry.
   */
  public const CHANGE_TYPE_CREATE_ENTRY = 'CREATE_ENTRY';
  /**
   * Request to update an Entry.
   */
  public const CHANGE_TYPE_UPDATE_ENTRY = 'UPDATE_ENTRY';
  /**
   * Request to delete an Entry.
   */
  public const CHANGE_TYPE_DELETE_ENTRY = 'DELETE_ENTRY';
  /**
   * Request to create an EntryLink.
   */
  public const CHANGE_TYPE_CREATE_ENTRY_LINK = 'CREATE_ENTRY_LINK';
  /**
   * Request to delete an EntryLink.
   */
  public const CHANGE_TYPE_DELETE_ENTRY_LINK = 'DELETE_ENTRY_LINK';
  /**
   * Request to create a Glossary.
   */
  public const CHANGE_TYPE_CREATE_GLOSSARY = 'CREATE_GLOSSARY';
  /**
   * Request to update a Glossary.
   */
  public const CHANGE_TYPE_UPDATE_GLOSSARY = 'UPDATE_GLOSSARY';
  /**
   * Request to delete a Glossary.
   */
  public const CHANGE_TYPE_DELETE_GLOSSARY = 'DELETE_GLOSSARY';
  /**
   * Request to create a GlossaryCategory.
   */
  public const CHANGE_TYPE_CREATE_GLOSSARY_CATEGORY = 'CREATE_GLOSSARY_CATEGORY';
  /**
   * Request to update a GlossaryCategory.
   */
  public const CHANGE_TYPE_UPDATE_GLOSSARY_CATEGORY = 'UPDATE_GLOSSARY_CATEGORY';
  /**
   * Request to delete a GlossaryCategory.
   */
  public const CHANGE_TYPE_DELETE_GLOSSARY_CATEGORY = 'DELETE_GLOSSARY_CATEGORY';
  /**
   * Request to create a GlossaryTerm.
   */
  public const CHANGE_TYPE_CREATE_GLOSSARY_TERM = 'CREATE_GLOSSARY_TERM';
  /**
   * Request to update a GlossaryTerm.
   */
  public const CHANGE_TYPE_UPDATE_GLOSSARY_TERM = 'UPDATE_GLOSSARY_TERM';
  /**
   * Request to delete a GlossaryTerm.
   */
  public const CHANGE_TYPE_DELETE_GLOSSARY_TERM = 'DELETE_GLOSSARY_TERM';
  /**
   * Request to request Data Product access.
   */
  public const CHANGE_TYPE_REQUEST_DATA_PRODUCT_ACCESS = 'REQUEST_DATA_PRODUCT_ACCESS';
  /**
   * State unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The change is proposed and new.
   */
  public const STATE_NEW = 'NEW';
  /**
   * The change has been approved.
   */
  public const STATE_APPROVED = 'APPROVED';
  /**
   * The change has been rejected.
   */
  public const STATE_REJECTED = 'REJECTED';
  /**
   * The change request has expired.
   */
  public const STATE_EXPIRED = 'EXPIRED';
  /**
   * The approved change has been revoked.
   */
  public const STATE_REVOKED = 'REVOKED';
  /**
   * Output only. The email address of the user who approved/rejected the
   * ChangeRequest.
   *
   * @var string
   */
  public $approver;
  /**
   * Output only. The email address of the user who created the ChangeRequest.
   *
   * @var string
   */
  public $author;
  /**
   * Output only. The type of change represented by the change_payload. This
   * field is derived from the populated field in the change_payload oneof.
   *
   * @var string
   */
  public $changeType;
  protected $createEntryType = GoogleCloudDataplexV1CreateEntryRequest::class;
  protected $createEntryDataType = '';
  protected $createEntryLinkType = GoogleCloudDataplexV1CreateEntryLinkRequest::class;
  protected $createEntryLinkDataType = '';
  protected $createGlossaryType = GoogleCloudDataplexV1CreateGlossaryRequest::class;
  protected $createGlossaryDataType = '';
  protected $createGlossaryCategoryType = GoogleCloudDataplexV1CreateGlossaryCategoryRequest::class;
  protected $createGlossaryCategoryDataType = '';
  protected $createGlossaryTermType = GoogleCloudDataplexV1CreateGlossaryTermRequest::class;
  protected $createGlossaryTermDataType = '';
  /**
   * Output only. The time when the ChangeRequest was created.
   *
   * @var string
   */
  public $createTime;
  protected $dataProductAccessRequestType = GoogleCloudDataplexV1DataProductAccessRequest::class;
  protected $dataProductAccessRequestDataType = '';
  protected $deleteEntryType = GoogleCloudDataplexV1DeleteEntryRequest::class;
  protected $deleteEntryDataType = '';
  protected $deleteEntryLinkType = GoogleCloudDataplexV1DeleteEntryLinkRequest::class;
  protected $deleteEntryLinkDataType = '';
  protected $deleteGlossaryType = GoogleCloudDataplexV1DeleteGlossaryRequest::class;
  protected $deleteGlossaryDataType = '';
  protected $deleteGlossaryCategoryType = GoogleCloudDataplexV1DeleteGlossaryCategoryRequest::class;
  protected $deleteGlossaryCategoryDataType = '';
  protected $deleteGlossaryTermType = GoogleCloudDataplexV1DeleteGlossaryTermRequest::class;
  protected $deleteGlossaryTermDataType = '';
  /**
   * Optional. This checksum is computed by the service. It can be sent on
   * update and delete requests to ensure the client has an up-to-date value
   * before proceeding.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. Justification of the ChangeRequest. This should explain why the
   * change is needed or why it should be approved.
   *
   * @var string
   */
  public $justification;
  /**
   * Optional. User-defined labels for the ChangeRequest.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The relative resource name of the ChangeRequest, of the form: p
   * rojects/{project_number}/locations/{location_id}/changeRequests/{change_req
   * uest_id}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The reason provided for rejecting the ChangeRequest.
   *
   * @var string
   */
  public $rejectionComment;
  /**
   * Output only. The full resource name of the target resource to be modified.
   * Example: //dataplex.googleapis.com/projects/my-project/locations/us-
   * central1/entryGroups/my-group/entries/my-entry
   *
   * @var string
   */
  public $resource;
  /**
   * Output only. The current state of the ChangeRequest.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. System generated globally unique ID for the ChangeRequest.
   *
   * @var string
   */
  public $uid;
  protected $updateEntryType = GoogleCloudDataplexV1UpdateEntryRequest::class;
  protected $updateEntryDataType = '';
  protected $updateGlossaryType = GoogleCloudDataplexV1UpdateGlossaryRequest::class;
  protected $updateGlossaryDataType = '';
  protected $updateGlossaryCategoryType = GoogleCloudDataplexV1UpdateGlossaryCategoryRequest::class;
  protected $updateGlossaryCategoryDataType = '';
  protected $updateGlossaryTermType = GoogleCloudDataplexV1UpdateGlossaryTermRequest::class;
  protected $updateGlossaryTermDataType = '';
  /**
   * Output only. The time when the ChangeRequest was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The email address of the user who approved/rejected the
   * ChangeRequest.
   *
   * @param string $approver
   */
  public function setApprover($approver)
  {
    $this->approver = $approver;
  }
  /**
   * @return string
   */
  public function getApprover()
  {
    return $this->approver;
  }
  /**
   * Output only. The email address of the user who created the ChangeRequest.
   *
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Output only. The type of change represented by the change_payload. This
   * field is derived from the populated field in the change_payload oneof.
   *
   * Accepted values: CHANGE_TYPE_UNSPECIFIED, CREATE_ENTRY, UPDATE_ENTRY,
   * DELETE_ENTRY, CREATE_ENTRY_LINK, DELETE_ENTRY_LINK, CREATE_GLOSSARY,
   * UPDATE_GLOSSARY, DELETE_GLOSSARY, CREATE_GLOSSARY_CATEGORY,
   * UPDATE_GLOSSARY_CATEGORY, DELETE_GLOSSARY_CATEGORY, CREATE_GLOSSARY_TERM,
   * UPDATE_GLOSSARY_TERM, DELETE_GLOSSARY_TERM, REQUEST_DATA_PRODUCT_ACCESS
   *
   * @param self::CHANGE_TYPE_* $changeType
   */
  public function setChangeType($changeType)
  {
    $this->changeType = $changeType;
  }
  /**
   * @return self::CHANGE_TYPE_*
   */
  public function getChangeType()
  {
    return $this->changeType;
  }
  /**
   * Payload for creating an Entry.
   *
   * @param GoogleCloudDataplexV1CreateEntryRequest $createEntry
   */
  public function setCreateEntry(GoogleCloudDataplexV1CreateEntryRequest $createEntry)
  {
    $this->createEntry = $createEntry;
  }
  /**
   * @return GoogleCloudDataplexV1CreateEntryRequest
   */
  public function getCreateEntry()
  {
    return $this->createEntry;
  }
  /**
   * Payload for creating an EntryLink.
   *
   * @param GoogleCloudDataplexV1CreateEntryLinkRequest $createEntryLink
   */
  public function setCreateEntryLink(GoogleCloudDataplexV1CreateEntryLinkRequest $createEntryLink)
  {
    $this->createEntryLink = $createEntryLink;
  }
  /**
   * @return GoogleCloudDataplexV1CreateEntryLinkRequest
   */
  public function getCreateEntryLink()
  {
    return $this->createEntryLink;
  }
  /**
   * Payload for creating a Glossary.
   *
   * @param GoogleCloudDataplexV1CreateGlossaryRequest $createGlossary
   */
  public function setCreateGlossary(GoogleCloudDataplexV1CreateGlossaryRequest $createGlossary)
  {
    $this->createGlossary = $createGlossary;
  }
  /**
   * @return GoogleCloudDataplexV1CreateGlossaryRequest
   */
  public function getCreateGlossary()
  {
    return $this->createGlossary;
  }
  /**
   * Payload for creating a GlossaryCategory.
   *
   * @param GoogleCloudDataplexV1CreateGlossaryCategoryRequest $createGlossaryCategory
   */
  public function setCreateGlossaryCategory(GoogleCloudDataplexV1CreateGlossaryCategoryRequest $createGlossaryCategory)
  {
    $this->createGlossaryCategory = $createGlossaryCategory;
  }
  /**
   * @return GoogleCloudDataplexV1CreateGlossaryCategoryRequest
   */
  public function getCreateGlossaryCategory()
  {
    return $this->createGlossaryCategory;
  }
  /**
   * Payload for creating a GlossaryTerm.
   *
   * @param GoogleCloudDataplexV1CreateGlossaryTermRequest $createGlossaryTerm
   */
  public function setCreateGlossaryTerm(GoogleCloudDataplexV1CreateGlossaryTermRequest $createGlossaryTerm)
  {
    $this->createGlossaryTerm = $createGlossaryTerm;
  }
  /**
   * @return GoogleCloudDataplexV1CreateGlossaryTermRequest
   */
  public function getCreateGlossaryTerm()
  {
    return $this->createGlossaryTerm;
  }
  /**
   * Output only. The time when the ChangeRequest was created.
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
   * Payload for Data Product access request.
   *
   * @param GoogleCloudDataplexV1DataProductAccessRequest $dataProductAccessRequest
   */
  public function setDataProductAccessRequest(GoogleCloudDataplexV1DataProductAccessRequest $dataProductAccessRequest)
  {
    $this->dataProductAccessRequest = $dataProductAccessRequest;
  }
  /**
   * @return GoogleCloudDataplexV1DataProductAccessRequest
   */
  public function getDataProductAccessRequest()
  {
    return $this->dataProductAccessRequest;
  }
  /**
   * Payload for deleting an Entry.
   *
   * @param GoogleCloudDataplexV1DeleteEntryRequest $deleteEntry
   */
  public function setDeleteEntry(GoogleCloudDataplexV1DeleteEntryRequest $deleteEntry)
  {
    $this->deleteEntry = $deleteEntry;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteEntryRequest
   */
  public function getDeleteEntry()
  {
    return $this->deleteEntry;
  }
  /**
   * Payload for deleting an EntryLink.
   *
   * @param GoogleCloudDataplexV1DeleteEntryLinkRequest $deleteEntryLink
   */
  public function setDeleteEntryLink(GoogleCloudDataplexV1DeleteEntryLinkRequest $deleteEntryLink)
  {
    $this->deleteEntryLink = $deleteEntryLink;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteEntryLinkRequest
   */
  public function getDeleteEntryLink()
  {
    return $this->deleteEntryLink;
  }
  /**
   * Payload for deleting a Glossary.
   *
   * @param GoogleCloudDataplexV1DeleteGlossaryRequest $deleteGlossary
   */
  public function setDeleteGlossary(GoogleCloudDataplexV1DeleteGlossaryRequest $deleteGlossary)
  {
    $this->deleteGlossary = $deleteGlossary;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteGlossaryRequest
   */
  public function getDeleteGlossary()
  {
    return $this->deleteGlossary;
  }
  /**
   * Payload for deleting a GlossaryCategory.
   *
   * @param GoogleCloudDataplexV1DeleteGlossaryCategoryRequest $deleteGlossaryCategory
   */
  public function setDeleteGlossaryCategory(GoogleCloudDataplexV1DeleteGlossaryCategoryRequest $deleteGlossaryCategory)
  {
    $this->deleteGlossaryCategory = $deleteGlossaryCategory;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteGlossaryCategoryRequest
   */
  public function getDeleteGlossaryCategory()
  {
    return $this->deleteGlossaryCategory;
  }
  /**
   * Payload for deleting a GlossaryTerm.
   *
   * @param GoogleCloudDataplexV1DeleteGlossaryTermRequest $deleteGlossaryTerm
   */
  public function setDeleteGlossaryTerm(GoogleCloudDataplexV1DeleteGlossaryTermRequest $deleteGlossaryTerm)
  {
    $this->deleteGlossaryTerm = $deleteGlossaryTerm;
  }
  /**
   * @return GoogleCloudDataplexV1DeleteGlossaryTermRequest
   */
  public function getDeleteGlossaryTerm()
  {
    return $this->deleteGlossaryTerm;
  }
  /**
   * Optional. This checksum is computed by the service. It can be sent on
   * update and delete requests to ensure the client has an up-to-date value
   * before proceeding.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. Justification of the ChangeRequest. This should explain why the
   * change is needed or why it should be approved.
   *
   * @param string $justification
   */
  public function setJustification($justification)
  {
    $this->justification = $justification;
  }
  /**
   * @return string
   */
  public function getJustification()
  {
    return $this->justification;
  }
  /**
   * Optional. User-defined labels for the ChangeRequest.
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
   * Identifier. The relative resource name of the ChangeRequest, of the form: p
   * rojects/{project_number}/locations/{location_id}/changeRequests/{change_req
   * uest_id}
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
   * Output only. The reason provided for rejecting the ChangeRequest.
   *
   * @param string $rejectionComment
   */
  public function setRejectionComment($rejectionComment)
  {
    $this->rejectionComment = $rejectionComment;
  }
  /**
   * @return string
   */
  public function getRejectionComment()
  {
    return $this->rejectionComment;
  }
  /**
   * Output only. The full resource name of the target resource to be modified.
   * Example: //dataplex.googleapis.com/projects/my-project/locations/us-
   * central1/entryGroups/my-group/entries/my-entry
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Output only. The current state of the ChangeRequest.
   *
   * Accepted values: STATE_UNSPECIFIED, NEW, APPROVED, REJECTED, EXPIRED,
   * REVOKED
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
   * Output only. System generated globally unique ID for the ChangeRequest.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Payload for updating an Entry.
   *
   * @param GoogleCloudDataplexV1UpdateEntryRequest $updateEntry
   */
  public function setUpdateEntry(GoogleCloudDataplexV1UpdateEntryRequest $updateEntry)
  {
    $this->updateEntry = $updateEntry;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateEntryRequest
   */
  public function getUpdateEntry()
  {
    return $this->updateEntry;
  }
  /**
   * Payload for updating a Glossary.
   *
   * @param GoogleCloudDataplexV1UpdateGlossaryRequest $updateGlossary
   */
  public function setUpdateGlossary(GoogleCloudDataplexV1UpdateGlossaryRequest $updateGlossary)
  {
    $this->updateGlossary = $updateGlossary;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateGlossaryRequest
   */
  public function getUpdateGlossary()
  {
    return $this->updateGlossary;
  }
  /**
   * Payload for updating a GlossaryCategory.
   *
   * @param GoogleCloudDataplexV1UpdateGlossaryCategoryRequest $updateGlossaryCategory
   */
  public function setUpdateGlossaryCategory(GoogleCloudDataplexV1UpdateGlossaryCategoryRequest $updateGlossaryCategory)
  {
    $this->updateGlossaryCategory = $updateGlossaryCategory;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateGlossaryCategoryRequest
   */
  public function getUpdateGlossaryCategory()
  {
    return $this->updateGlossaryCategory;
  }
  /**
   * Payload for updating a GlossaryTerm.
   *
   * @param GoogleCloudDataplexV1UpdateGlossaryTermRequest $updateGlossaryTerm
   */
  public function setUpdateGlossaryTerm(GoogleCloudDataplexV1UpdateGlossaryTermRequest $updateGlossaryTerm)
  {
    $this->updateGlossaryTerm = $updateGlossaryTerm;
  }
  /**
   * @return GoogleCloudDataplexV1UpdateGlossaryTermRequest
   */
  public function getUpdateGlossaryTerm()
  {
    return $this->updateGlossaryTerm;
  }
  /**
   * Output only. The time when the ChangeRequest was last updated.
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
class_alias(GoogleCloudDataplexV1ChangeRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ChangeRequest');
