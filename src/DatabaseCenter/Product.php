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

namespace Google\Service\DatabaseCenter;

class Product extends \Google\Model
{
  /**
   * UNSPECIFIED means engine type is not known or available.
   */
  public const ENGINE_ENGINE_UNSPECIFIED = 'ENGINE_UNSPECIFIED';
  /**
   * MySQL binary running as an engine in the database instance.
   */
  public const ENGINE_ENGINE_MYSQL = 'ENGINE_MYSQL';
  /**
   * Postgres binary running as engine in database instance.
   */
  public const ENGINE_ENGINE_POSTGRES = 'ENGINE_POSTGRES';
  /**
   * SQLServer binary running as engine in database instance.
   */
  public const ENGINE_ENGINE_SQL_SERVER = 'ENGINE_SQL_SERVER';
  /**
   * Native database binary running as engine in instance.
   */
  public const ENGINE_ENGINE_NATIVE = 'ENGINE_NATIVE';
  /**
   * Memorystore with Redis dialect.
   */
  public const ENGINE_ENGINE_MEMORYSTORE_FOR_REDIS = 'ENGINE_MEMORYSTORE_FOR_REDIS';
  /**
   * Memorystore with Redis cluster dialect.
   */
  public const ENGINE_ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER = 'ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER';
  /**
   * Deprecated: Use ENGINE_MEMORYSTORE_FOR_VALKEY instead.
   *
   * @deprecated
   */
  public const ENGINE_ENGINE_MEMORSTORE_FOR_VALKEY = 'ENGINE_MEMORSTORE_FOR_VALKEY';
  /**
   * Memorystore with Valkey dialect.
   */
  public const ENGINE_ENGINE_MEMORYSTORE_FOR_VALKEY = 'ENGINE_MEMORYSTORE_FOR_VALKEY';
  /**
   * Firestore with native mode.
   */
  public const ENGINE_ENGINE_FIRESTORE_WITH_NATIVE_MODE = 'ENGINE_FIRESTORE_WITH_NATIVE_MODE';
  /**
   * Firestore with datastore mode.
   */
  public const ENGINE_ENGINE_FIRESTORE_WITH_DATASTORE_MODE = 'ENGINE_FIRESTORE_WITH_DATASTORE_MODE';
  /**
   * Oracle Exadata engine.
   */
  public const ENGINE_ENGINE_EXADATA_ORACLE = 'ENGINE_EXADATA_ORACLE';
  /**
   * Oracle Autonomous DB Serverless engine.
   */
  public const ENGINE_ENGINE_ADB_SERVERLESS_ORACLE = 'ENGINE_ADB_SERVERLESS_ORACLE';
  /**
   * Firestore with MongoDB compatibility.
   */
  public const ENGINE_ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE = 'ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE';
  /**
   * Other refers to rest of other database engine. This is to be when engine is
   * known, but it is not present in this enum.
   */
  public const ENGINE_ENGINE_OTHER = 'ENGINE_OTHER';
  /**
   * PRODUCT_TYPE_UNSPECIFIED means product type is not known or that the user
   * didn't provide this field in the request.
   */
  public const TYPE_PRODUCT_TYPE_UNSPECIFIED = 'PRODUCT_TYPE_UNSPECIFIED';
  /**
   * Cloud SQL product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_CLOUD_SQL = 'PRODUCT_TYPE_CLOUD_SQL';
  /**
   * AlloyDB product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_ALLOYDB = 'PRODUCT_TYPE_ALLOYDB';
  /**
   * Spanner product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_SPANNER = 'PRODUCT_TYPE_SPANNER';
  /**
   * Bigtable product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_BIGTABLE = 'PRODUCT_TYPE_BIGTABLE';
  /**
   * Memorystore product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_MEMORYSTORE = 'PRODUCT_TYPE_MEMORYSTORE';
  /**
   * Firestore product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_FIRESTORE = 'PRODUCT_TYPE_FIRESTORE';
  /**
   * Compute Engine self managed databases
   */
  public const TYPE_PRODUCT_TYPE_COMPUTE_ENGINE = 'PRODUCT_TYPE_COMPUTE_ENGINE';
  /**
   * Oracle product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_ORACLE_ON_GCP = 'PRODUCT_TYPE_ORACLE_ON_GCP';
  /**
   * BigQuery product area in Google Cloud
   */
  public const TYPE_PRODUCT_TYPE_BIGQUERY = 'PRODUCT_TYPE_BIGQUERY';
  /**
   * Other refers to rest of other product type. This is to be when product type
   * is known, but it is not present in this enum.
   */
  public const TYPE_PRODUCT_TYPE_OTHER = 'PRODUCT_TYPE_OTHER';
  /**
   * Optional. The specific engine that the underlying database is running.
   *
   * @var string
   */
  public $engine;
  /**
   * Optional. Minor version of the underlying database engine. Example values:
   * For MySQL, it could be "8.0.35", "5.7.25" etc. For PostgreSQL, it could be
   * "14.4", "15.5" etc.
   *
   * @var string
   */
  public $minorVersion;
  /**
   * Optional. Type of specific database product. It could be CloudSQL, AlloyDB
   * etc..
   *
   * @var string
   */
  public $type;
  /**
   * Optional. Version of the underlying database engine. Example values: For
   * MySQL, it could be "8.0", "5.7" etc. For Postgres, it could be "14", "15"
   * etc.
   *
   * @var string
   */
  public $version;

  /**
   * Optional. The specific engine that the underlying database is running.
   *
   * Accepted values: ENGINE_UNSPECIFIED, ENGINE_MYSQL, ENGINE_POSTGRES,
   * ENGINE_SQL_SERVER, ENGINE_NATIVE, ENGINE_MEMORYSTORE_FOR_REDIS,
   * ENGINE_MEMORYSTORE_FOR_REDIS_CLUSTER, ENGINE_MEMORSTORE_FOR_VALKEY,
   * ENGINE_MEMORYSTORE_FOR_VALKEY, ENGINE_FIRESTORE_WITH_NATIVE_MODE,
   * ENGINE_FIRESTORE_WITH_DATASTORE_MODE, ENGINE_EXADATA_ORACLE,
   * ENGINE_ADB_SERVERLESS_ORACLE,
   * ENGINE_FIRESTORE_WITH_MONGODB_COMPATIBILITY_MODE, ENGINE_OTHER
   *
   * @param self::ENGINE_* $engine
   */
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }
  /**
   * @return self::ENGINE_*
   */
  public function getEngine()
  {
    return $this->engine;
  }
  /**
   * Optional. Minor version of the underlying database engine. Example values:
   * For MySQL, it could be "8.0.35", "5.7.25" etc. For PostgreSQL, it could be
   * "14.4", "15.5" etc.
   *
   * @param string $minorVersion
   */
  public function setMinorVersion($minorVersion)
  {
    $this->minorVersion = $minorVersion;
  }
  /**
   * @return string
   */
  public function getMinorVersion()
  {
    return $this->minorVersion;
  }
  /**
   * Optional. Type of specific database product. It could be CloudSQL, AlloyDB
   * etc..
   *
   * Accepted values: PRODUCT_TYPE_UNSPECIFIED, PRODUCT_TYPE_CLOUD_SQL,
   * PRODUCT_TYPE_ALLOYDB, PRODUCT_TYPE_SPANNER, PRODUCT_TYPE_BIGTABLE,
   * PRODUCT_TYPE_MEMORYSTORE, PRODUCT_TYPE_FIRESTORE,
   * PRODUCT_TYPE_COMPUTE_ENGINE, PRODUCT_TYPE_ORACLE_ON_GCP,
   * PRODUCT_TYPE_BIGQUERY, PRODUCT_TYPE_OTHER
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Optional. Version of the underlying database engine. Example values: For
   * MySQL, it could be "8.0", "5.7" etc. For Postgres, it could be "14", "15"
   * etc.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Product::class, 'Google_Service_DatabaseCenter_Product');
