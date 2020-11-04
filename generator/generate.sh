#!/bin/bash
# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

set -eo pipefail

if [[ $# -lt 2 ]]
then
    echo "Usage: $0 <path/to/discovery.json> <output-directory>"
    exit 1
fi

GENERATOR_DIR=$(dirname $0 | xargs realpath)
DISCOVERY=$1
OUTPUT_DIR=$(realpath $2)

# if discovery is a URL, download it to a temp file
if [[ ${DISCOVERY} = http* ]]
then
    TEMP_DISCOVERY=$(mktemp -t discovery-XXXXXXXXXX.json)
    echo "Downloading remote discovery ${DISCOVERY} to ${TEMP_DISCOVERY}"
    curl -sL "${DISCOVERY}" -o ${TEMP_DISCOVERY}
    DISCOVERY=${TEMP_DISCOVERY}
fi

# install the local generators
python2 -m pip install -e ${GENERATOR_DIR} --user -q

mkdir -p ${OUTPUT_DIR}

# run the local generator
python2 -m googleapis.codegen \
    --output_dir=${OUTPUT_DIR} \
    --input=${DISCOVERY} \
    --language=php \
    --language_variant=1.30.1 \
    --package_path=api/services

echo "Wrote client to ${OUTPUT_DIR}"
