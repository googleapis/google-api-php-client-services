#!/bin/bash

# Copyright 2022 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

set -ex

SERVICE=$1
VERSIONS=$2
ROOT_DIR=$(realpath $(dirname "${BASH_SOURCE[0]}")/../../../)

if [[ -z "${SERVICE}" ]]
then
  echo "Usage: ${0} <service> <versions>"
  exit 1
fi

if [[ -z "${VERSIONS}" ]]
then
  echo "Usage: ${0} <service> <versions>"
  exit 1
fi

# install the local generators
python3 -m pip install -e ${ROOT_DIR}/google-api-php-client-services/generator --user -q

pushd ${ROOT_DIR}/discovery-artifact-manager

OIFS=$IFS
IFS=','
for VERSION in ${VERSIONS}
do
  DISCOVERY=discoveries/${SERVICE}.${VERSION}.json
  OUTPUT_DIR=${ROOT_DIR}/google-api-php-client-services/src
  echo "Discovery: ${DISCOVERY}"
  echo "Version: ${VERSION}"
  echo "Output: ${OUTPUT_DIR}"
  # run the local generator
  python3 -m googleapis.codegen \
      --output_dir=${OUTPUT_DIR} \
      --input=${DISCOVERY} \
      --language=php \
      --language_variant=default \
      --package_path=api/services
done
IFS=${OIFS}
