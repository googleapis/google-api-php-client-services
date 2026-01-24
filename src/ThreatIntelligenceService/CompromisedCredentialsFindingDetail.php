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

namespace Google\Service\ThreatIntelligenceService;

class CompromisedCredentialsFindingDetail extends \Google\Collection
{
  protected $collection_key = 'fileDumpHashes';
  /**
   * Optional. Reference to the author this detail was extracted from. This is
   * deprecated and will be removed.
   *
   * @deprecated
   * @var string
   */
  public $author;
  /**
   * Optional. Claimed site the credential is intended for.
   *
   * @var string
   */
  public $credentialService;
  /**
   * Optional. Reference to the dark web document. This is deprecated and will
   * be removed.
   *
   * @deprecated
   * @var string
   */
  public $darkWebDoc;
  /**
   * Optional. This will contain a link to the external reference for this
   * credential. If set, this is a link back to the DTM product to allow
   * customers to get additional context about this finding.
   *
   * @var string
   */
  public $externalReferenceUri;
  /**
   * Optional. If the source of the credential was from a file dump this will
   * contain the name of the file the credential was found in. This can be used
   * by customers for context on where the credential was found and to try to
   * find other references to the file in the wild.
   *
   * @var string
   */
  public $fileDump;
  /**
   * Optional. A list of hashes of the file dump. These will be prefixed with
   * the algorithm. Example: "sha256:"
   *
   * @var string[]
   */
  public $fileDumpHashes;
  /**
   * Optional. If file_dump is set this will contain the size of the dump file
   * in bytes. File dumps can be very large.
   *
   * @var string
   */
  public $fileDumpSizeBytes;
  /**
   * Optional. Reference to the forum this detail was extracted from. This is
   * deprecated and will be removed.
   *
   * @deprecated
   * @var string
   */
  public $forum;
  /**
   * Optional. This will indicate the malware family that leaked this
   * credential, if known.
   *
   * @var string
   */
  public $malwareFamily;
  /**
   * Optional. This indicates our best guess as to when the credential was
   * leaked to the particular venue that triggered this finding. This is not
   * necessarily the time the credential was actually leaked and it may not
   * always be be accurate.
   *
   * @var string
   */
  public $postedTime;
  /**
   * Optional. If the source of a credential is publicly addressable this will
   * contain a uri to the where the credential was found.
   *
   * @var string
   */
  public $sourceUri;
  /**
   * Required. This field will always be set and will be used to identify the
   * user named in the credential leak. In cases where customers are authorized
   * to see the actual user key this will be set to the actual user key. In
   * cases where the customer is not authorized to see the actual user key this
   * will be set to a hash of the user key. The hashed value is an intentionally
   * opaque value that is not intended to be used for any other purpose than to
   * uniquely identify the user in the context of this specific customer,
   * service domain, and user name. Example: "user@example.com" or "redacted:".
   *
   * @var string
   */
  public $userKey;
  /**
   * Optional. Claimed evidence of the password/secret. This will always be
   * hashed. In the event where the plaintext password is known it will be set
   * to "redacted:" where the same hash will be presented when the same password
   * is found for the same organization for the same service. Redaction is done
   * by hashing the password with a salt that is unique to the customer
   * organization and service. In the event where the plaintext password is not
   * known it will be set to ":" where the algorithm is the hash algorithm used
   * and the hash is the hash of the password using that algorithm. In the event
   * we don't know the exact algorithm used we will set it to "hashed:".
   *
   * @var string
   */
  public $userSecretEvidence;

  /**
   * Optional. Reference to the author this detail was extracted from. This is
   * deprecated and will be removed.
   *
   * @deprecated
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Optional. Claimed site the credential is intended for.
   *
   * @param string $credentialService
   */
  public function setCredentialService($credentialService)
  {
    $this->credentialService = $credentialService;
  }
  /**
   * @return string
   */
  public function getCredentialService()
  {
    return $this->credentialService;
  }
  /**
   * Optional. Reference to the dark web document. This is deprecated and will
   * be removed.
   *
   * @deprecated
   * @param string $darkWebDoc
   */
  public function setDarkWebDoc($darkWebDoc)
  {
    $this->darkWebDoc = $darkWebDoc;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getDarkWebDoc()
  {
    return $this->darkWebDoc;
  }
  /**
   * Optional. This will contain a link to the external reference for this
   * credential. If set, this is a link back to the DTM product to allow
   * customers to get additional context about this finding.
   *
   * @param string $externalReferenceUri
   */
  public function setExternalReferenceUri($externalReferenceUri)
  {
    $this->externalReferenceUri = $externalReferenceUri;
  }
  /**
   * @return string
   */
  public function getExternalReferenceUri()
  {
    return $this->externalReferenceUri;
  }
  /**
   * Optional. If the source of the credential was from a file dump this will
   * contain the name of the file the credential was found in. This can be used
   * by customers for context on where the credential was found and to try to
   * find other references to the file in the wild.
   *
   * @param string $fileDump
   */
  public function setFileDump($fileDump)
  {
    $this->fileDump = $fileDump;
  }
  /**
   * @return string
   */
  public function getFileDump()
  {
    return $this->fileDump;
  }
  /**
   * Optional. A list of hashes of the file dump. These will be prefixed with
   * the algorithm. Example: "sha256:"
   *
   * @param string[] $fileDumpHashes
   */
  public function setFileDumpHashes($fileDumpHashes)
  {
    $this->fileDumpHashes = $fileDumpHashes;
  }
  /**
   * @return string[]
   */
  public function getFileDumpHashes()
  {
    return $this->fileDumpHashes;
  }
  /**
   * Optional. If file_dump is set this will contain the size of the dump file
   * in bytes. File dumps can be very large.
   *
   * @param string $fileDumpSizeBytes
   */
  public function setFileDumpSizeBytes($fileDumpSizeBytes)
  {
    $this->fileDumpSizeBytes = $fileDumpSizeBytes;
  }
  /**
   * @return string
   */
  public function getFileDumpSizeBytes()
  {
    return $this->fileDumpSizeBytes;
  }
  /**
   * Optional. Reference to the forum this detail was extracted from. This is
   * deprecated and will be removed.
   *
   * @deprecated
   * @param string $forum
   */
  public function setForum($forum)
  {
    $this->forum = $forum;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getForum()
  {
    return $this->forum;
  }
  /**
   * Optional. This will indicate the malware family that leaked this
   * credential, if known.
   *
   * @param string $malwareFamily
   */
  public function setMalwareFamily($malwareFamily)
  {
    $this->malwareFamily = $malwareFamily;
  }
  /**
   * @return string
   */
  public function getMalwareFamily()
  {
    return $this->malwareFamily;
  }
  /**
   * Optional. This indicates our best guess as to when the credential was
   * leaked to the particular venue that triggered this finding. This is not
   * necessarily the time the credential was actually leaked and it may not
   * always be be accurate.
   *
   * @param string $postedTime
   */
  public function setPostedTime($postedTime)
  {
    $this->postedTime = $postedTime;
  }
  /**
   * @return string
   */
  public function getPostedTime()
  {
    return $this->postedTime;
  }
  /**
   * Optional. If the source of a credential is publicly addressable this will
   * contain a uri to the where the credential was found.
   *
   * @param string $sourceUri
   */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /**
   * @return string
   */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
  /**
   * Required. This field will always be set and will be used to identify the
   * user named in the credential leak. In cases where customers are authorized
   * to see the actual user key this will be set to the actual user key. In
   * cases where the customer is not authorized to see the actual user key this
   * will be set to a hash of the user key. The hashed value is an intentionally
   * opaque value that is not intended to be used for any other purpose than to
   * uniquely identify the user in the context of this specific customer,
   * service domain, and user name. Example: "user@example.com" or "redacted:".
   *
   * @param string $userKey
   */
  public function setUserKey($userKey)
  {
    $this->userKey = $userKey;
  }
  /**
   * @return string
   */
  public function getUserKey()
  {
    return $this->userKey;
  }
  /**
   * Optional. Claimed evidence of the password/secret. This will always be
   * hashed. In the event where the plaintext password is known it will be set
   * to "redacted:" where the same hash will be presented when the same password
   * is found for the same organization for the same service. Redaction is done
   * by hashing the password with a salt that is unique to the customer
   * organization and service. In the event where the plaintext password is not
   * known it will be set to ":" where the algorithm is the hash algorithm used
   * and the hash is the hash of the password using that algorithm. In the event
   * we don't know the exact algorithm used we will set it to "hashed:".
   *
   * @param string $userSecretEvidence
   */
  public function setUserSecretEvidence($userSecretEvidence)
  {
    $this->userSecretEvidence = $userSecretEvidence;
  }
  /**
   * @return string
   */
  public function getUserSecretEvidence()
  {
    return $this->userSecretEvidence;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompromisedCredentialsFindingDetail::class, 'Google_Service_ThreatIntelligenceService_CompromisedCredentialsFindingDetail');
