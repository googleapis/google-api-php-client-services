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

namespace Google\Service\DeepReview;

class CitationReport extends \Google\Collection
{
  /**
   * Default unspecified verdict.
   */
  public const FINAL_VERDICT_VERDICT_UNSPECIFIED = 'VERDICT_UNSPECIFIED';
  /**
   * Reference metadata matches scholarly database record.
   */
  public const FINAL_VERDICT_OK = 'OK';
  /**
   * Minor discrepancy (e.g., publication year off by 1 or venue variation).
   */
  public const FINAL_VERDICT_MINOR_MISMATCH = 'MINOR_MISMATCH';
  /**
   * Major discrepancy in authors, year, or venue.
   */
  public const FINAL_VERDICT_MAJOR_MISMATCH = 'MAJOR_MISMATCH';
  /**
   * Reference verified via Google Search grounding.
   */
  public const FINAL_VERDICT_VERIFIED_BY_SEARCH = 'VERIFIED_BY_SEARCH';
  /**
   * Reference not found in scholarly databases and unverified by search.
   */
  public const FINAL_VERDICT_NOT_FOUND = 'NOT_FOUND';
  /**
   * Reference flagged as likely hallucinated by Google Search grounding.
   */
  public const FINAL_VERDICT_HALLUCINATED = 'HALLUCINATED';
  /**
   * Non-paper entry (e.g., software package or URL) skipped during lookup.
   */
  public const FINAL_VERDICT_SKIPPED = 'SKIPPED';
  /**
   * Default unspecified verdict.
   */
  public const LOOKUP_VERDICT_VERDICT_UNSPECIFIED = 'VERDICT_UNSPECIFIED';
  /**
   * Reference metadata matches scholarly database record.
   */
  public const LOOKUP_VERDICT_OK = 'OK';
  /**
   * Minor discrepancy (e.g., publication year off by 1 or venue variation).
   */
  public const LOOKUP_VERDICT_MINOR_MISMATCH = 'MINOR_MISMATCH';
  /**
   * Major discrepancy in authors, year, or venue.
   */
  public const LOOKUP_VERDICT_MAJOR_MISMATCH = 'MAJOR_MISMATCH';
  /**
   * Reference verified via Google Search grounding.
   */
  public const LOOKUP_VERDICT_VERIFIED_BY_SEARCH = 'VERIFIED_BY_SEARCH';
  /**
   * Reference not found in scholarly databases and unverified by search.
   */
  public const LOOKUP_VERDICT_NOT_FOUND = 'NOT_FOUND';
  /**
   * Reference flagged as likely hallucinated by Google Search grounding.
   */
  public const LOOKUP_VERDICT_HALLUCINATED = 'HALLUCINATED';
  /**
   * Non-paper entry (e.g., software package or URL) skipped during lookup.
   */
  public const LOOKUP_VERDICT_SKIPPED = 'SKIPPED';
  /**
   * Default unspecified search verdict (search grounding not run).
   */
  public const SEARCH_VERDICT_SEARCH_VERDICT_UNSPECIFIED = 'SEARCH_VERDICT_UNSPECIFIED';
  /**
   * Google Search grounding confirmed the work exists.
   */
  public const SEARCH_VERDICT_NOT_HALLUCINATED = 'NOT_HALLUCINATED';
  /**
   * Google Search grounding determined the reference is likely hallucinated.
   */
  public const SEARCH_VERDICT_HALLUCINATED_BY_SEARCH = 'HALLUCINATED_BY_SEARCH';
  /**
   * Google Search grounding encountered an execution or parsing error.
   */
  public const SEARCH_VERDICT_SEARCH_ERROR = 'SEARCH_ERROR';
  protected $collection_key = 'groundingUrls';
  /**
   * Output only. Generated BibTeX citation key (e.g., "smith2023deep").
   *
   * @var string
   */
  public $citationKey;
  /**
   * Output only. BibTeX entry type (e.g., "article", "inproceedings", "misc").
   *
   * @var string
   */
  public $entryType;
  protected $extractedMetadataType = CitationMetadata::class;
  protected $extractedMetadataDataType = '';
  protected $fieldComparisonsType = FieldComparison::class;
  protected $fieldComparisonsDataType = 'array';
  /**
   * Output only. Final combined verdict after database lookup and search
   * grounding.
   *
   * @var string
   */
  public $finalVerdict;
  /**
   * Output only. Whether the first author's family name matched between
   * extracted and retrieved metadata.
   *
   * @var bool
   */
  public $firstAuthorFamilyNameMatch;
  protected $groundingUrlsType = GroundingUrl::class;
  protected $groundingUrlsDataType = 'array';
  /**
   * Output only. Verdict from scholarly database lookup (OpenAlex / Crossref)
   * before search grounding.
   *
   * @var string
   */
  public $lookupVerdict;
  /**
   * Output only. Verbatim reference string extracted from the paper's
   * bibliography.
   *
   * @var string
   */
  public $rawReference;
  /**
   * Output only. 1-indexed bibliography reference number in the paper.
   *
   * @var int
   */
  public $refNum;
  /**
   * Output only. Formatted BibTeX entry for the verified `retrieved_metadata`
   * when present. Empty when `retrieved_metadata` is absent.
   *
   * @var string
   */
  public $retrievedBibtex;
  protected $retrievedMetadataType = CitationMetadata::class;
  protected $retrievedMetadataDataType = '';
  /**
   * Output only. Strategy that produced the scholarly database match (e.g.,
   * "doi", "title", "title_author", "autocomplete"). Empty when no title-
   * matching candidate was found.
   *
   * @var string
   */
  public $searchMethod;
  /**
   * Output only. Explanation from the Google Search grounding verification step
   * (when run).
   *
   * @var string
   */
  public $searchRationale;
  /**
   * Output only. Verdict from Google Search grounding verification (when run).
   *
   * @var string
   */
  public $searchVerdict;

  /**
   * Output only. Generated BibTeX citation key (e.g., "smith2023deep").
   *
   * @param string $citationKey
   */
  public function setCitationKey($citationKey)
  {
    $this->citationKey = $citationKey;
  }
  /**
   * @return string
   */
  public function getCitationKey()
  {
    return $this->citationKey;
  }
  /**
   * Output only. BibTeX entry type (e.g., "article", "inproceedings", "misc").
   *
   * @param string $entryType
   */
  public function setEntryType($entryType)
  {
    $this->entryType = $entryType;
  }
  /**
   * @return string
   */
  public function getEntryType()
  {
    return $this->entryType;
  }
  /**
   * Output only. Metadata parsed from the paper's bibliography entry.
   *
   * @param CitationMetadata $extractedMetadata
   */
  public function setExtractedMetadata(CitationMetadata $extractedMetadata)
  {
    $this->extractedMetadata = $extractedMetadata;
  }
  /**
   * @return CitationMetadata
   */
  public function getExtractedMetadata()
  {
    return $this->extractedMetadata;
  }
  /**
   * Output only. Per-field comparisons (populated only when
   * `retrieved_metadata` is present).
   *
   * @param FieldComparison[] $fieldComparisons
   */
  public function setFieldComparisons($fieldComparisons)
  {
    $this->fieldComparisons = $fieldComparisons;
  }
  /**
   * @return FieldComparison[]
   */
  public function getFieldComparisons()
  {
    return $this->fieldComparisons;
  }
  /**
   * Output only. Final combined verdict after database lookup and search
   * grounding.
   *
   * Accepted values: VERDICT_UNSPECIFIED, OK, MINOR_MISMATCH, MAJOR_MISMATCH,
   * VERIFIED_BY_SEARCH, NOT_FOUND, HALLUCINATED, SKIPPED
   *
   * @param self::FINAL_VERDICT_* $finalVerdict
   */
  public function setFinalVerdict($finalVerdict)
  {
    $this->finalVerdict = $finalVerdict;
  }
  /**
   * @return self::FINAL_VERDICT_*
   */
  public function getFinalVerdict()
  {
    return $this->finalVerdict;
  }
  /**
   * Output only. Whether the first author's family name matched between
   * extracted and retrieved metadata.
   *
   * @param bool $firstAuthorFamilyNameMatch
   */
  public function setFirstAuthorFamilyNameMatch($firstAuthorFamilyNameMatch)
  {
    $this->firstAuthorFamilyNameMatch = $firstAuthorFamilyNameMatch;
  }
  /**
   * @return bool
   */
  public function getFirstAuthorFamilyNameMatch()
  {
    return $this->firstAuthorFamilyNameMatch;
  }
  /**
   * Output only. Web sources surfaced during Google Search grounding.
   *
   * @param GroundingUrl[] $groundingUrls
   */
  public function setGroundingUrls($groundingUrls)
  {
    $this->groundingUrls = $groundingUrls;
  }
  /**
   * @return GroundingUrl[]
   */
  public function getGroundingUrls()
  {
    return $this->groundingUrls;
  }
  /**
   * Output only. Verdict from scholarly database lookup (OpenAlex / Crossref)
   * before search grounding.
   *
   * Accepted values: VERDICT_UNSPECIFIED, OK, MINOR_MISMATCH, MAJOR_MISMATCH,
   * VERIFIED_BY_SEARCH, NOT_FOUND, HALLUCINATED, SKIPPED
   *
   * @param self::LOOKUP_VERDICT_* $lookupVerdict
   */
  public function setLookupVerdict($lookupVerdict)
  {
    $this->lookupVerdict = $lookupVerdict;
  }
  /**
   * @return self::LOOKUP_VERDICT_*
   */
  public function getLookupVerdict()
  {
    return $this->lookupVerdict;
  }
  /**
   * Output only. Verbatim reference string extracted from the paper's
   * bibliography.
   *
   * @param string $rawReference
   */
  public function setRawReference($rawReference)
  {
    $this->rawReference = $rawReference;
  }
  /**
   * @return string
   */
  public function getRawReference()
  {
    return $this->rawReference;
  }
  /**
   * Output only. 1-indexed bibliography reference number in the paper.
   *
   * @param int $refNum
   */
  public function setRefNum($refNum)
  {
    $this->refNum = $refNum;
  }
  /**
   * @return int
   */
  public function getRefNum()
  {
    return $this->refNum;
  }
  /**
   * Output only. Formatted BibTeX entry for the verified `retrieved_metadata`
   * when present. Empty when `retrieved_metadata` is absent.
   *
   * @param string $retrievedBibtex
   */
  public function setRetrievedBibtex($retrievedBibtex)
  {
    $this->retrievedBibtex = $retrievedBibtex;
  }
  /**
   * @return string
   */
  public function getRetrievedBibtex()
  {
    return $this->retrievedBibtex;
  }
  /**
   * Output only. Metadata retrieved from OpenAlex / Crossref. Populated only
   * when the retrieved work's title matches the extracted title. Omitted when
   * no candidate matches the title so unrelated papers are never displayed as
   * candidates.
   *
   * @param CitationMetadata $retrievedMetadata
   */
  public function setRetrievedMetadata(CitationMetadata $retrievedMetadata)
  {
    $this->retrievedMetadata = $retrievedMetadata;
  }
  /**
   * @return CitationMetadata
   */
  public function getRetrievedMetadata()
  {
    return $this->retrievedMetadata;
  }
  /**
   * Output only. Strategy that produced the scholarly database match (e.g.,
   * "doi", "title", "title_author", "autocomplete"). Empty when no title-
   * matching candidate was found.
   *
   * @param string $searchMethod
   */
  public function setSearchMethod($searchMethod)
  {
    $this->searchMethod = $searchMethod;
  }
  /**
   * @return string
   */
  public function getSearchMethod()
  {
    return $this->searchMethod;
  }
  /**
   * Output only. Explanation from the Google Search grounding verification step
   * (when run).
   *
   * @param string $searchRationale
   */
  public function setSearchRationale($searchRationale)
  {
    $this->searchRationale = $searchRationale;
  }
  /**
   * @return string
   */
  public function getSearchRationale()
  {
    return $this->searchRationale;
  }
  /**
   * Output only. Verdict from Google Search grounding verification (when run).
   *
   * Accepted values: SEARCH_VERDICT_UNSPECIFIED, NOT_HALLUCINATED,
   * HALLUCINATED_BY_SEARCH, SEARCH_ERROR
   *
   * @param self::SEARCH_VERDICT_* $searchVerdict
   */
  public function setSearchVerdict($searchVerdict)
  {
    $this->searchVerdict = $searchVerdict;
  }
  /**
   * @return self::SEARCH_VERDICT_*
   */
  public function getSearchVerdict()
  {
    return $this->searchVerdict;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CitationReport::class, 'Google_Service_DeepReview_CitationReport');
