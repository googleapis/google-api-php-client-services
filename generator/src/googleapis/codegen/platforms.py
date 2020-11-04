#!/usr/bin/python2.7
# Copyright 2012 Google Inc. All Rights Reserved.
#
#  Licensed under the Apache License, Version 2.0 (the "License");
#  you may not use this file except in compliance with the License.
#  You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
#  Unless required by applicable law or agreed to in writing, software
#  distributed under the License is distributed on an "AS IS" BASIS,
#  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#  See the License for the specific language governing permissions and
#  limitations under the License.

"""List of platforms we can target libraries for.

This module defines the canonical names of the platforms that we support for
each language. Those names are used to validate that
"""

__author__ = 'aiuto@google.com (Tony Aiuto)'

ALL = 'all'

# Runtime platforms (per language) that we know about. This list is used to
# validate parameters.
PLATFORMS = {
    ALL: ['*', 'manual'],
    'gwt': ['gwt'],
    # TODO(user): Remove android2 and android3 for 1.12 launch.
    'java': ['android', 'android2', 'android3', 'appengine', 'servlet',
             'generic'],
    'javaproto': ['android', 'appengine', 'servlet', 'generic'],
    }

# Definitions:
# *: required in all environments
# manual: not included by any tools. You must do a manual download to use it.

# Type of files applicable to that platform
FILE_TYPES = {
    ALL: ['binary', 'bundle', 'documentation', 'source', 'license',
          'android-properties', 'proguard-config', 'other']
    }
