<?php

/**
 * Copyright 2012-2015 ContactLab, Italy
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class xmlDeliverySubStatusType
{
    const DELIVERY_STARTED = 'DELIVERY_STARTED';
    const DELIVERY_FINISHED = 'DELIVERY_FINISHED';
    const RECIPIENTS_ADDED = 'RECIPIENTS_ADDED';
    const RECIPIENTS_UPLOAD_STARTED = 'RECIPIENTS_UPLOAD_STARTED';
    const RECIPIENTS_UPLOAD_FINISHED = 'RECIPIENTS_UPLOAD_FINISHED';
    const SEMAPHORE_FOUND = 'SEMAPHORE_FOUND';
    const SEMAPHORE_DELETED = 'SEMAPHORE_DELETED';
    const XML_CONFIGURATION_FILE_FOUND = 'XML_CONFIGURATION_FILE_FOUND';
    const XMLD_CONFIGURATION_ERROR = 'XMLD_CONFIGURATION_ERROR';
    const API_COMMUNICATION_ERROR = 'API_COMMUNICATION_ERROR';
    const XML_ERROR = 'XML_ERROR';
    const SERVER_COMMUNICATION_ERROR = 'SERVER_COMMUNICATION_ERROR';
    const GENERIC_ERROR = 'GENERIC_ERROR';
    const DELIVERY_ID = 'DELIVERY_ID';
    const DELIVERY_ID_TEST = 'DELIVERY_ID_TEST';
    const DELIVERY_CONTENT = 'DELIVERY_CONTENT';
    const DOWNLOAD_XML_COMPLETED = 'DOWNLOAD_XML_COMPLETED';
    const DOWNLOAD_CSV_ZIP_COMPLETED = 'DOWNLOAD_CSV_ZIP_COMPLETED';
    const USER_REQUESTING = 'USER_REQUESTING';
    const QUALIFIER_ID = 'QUALIFIER_ID';
    const QUALIFIER_TEST_ID = 'QUALIFIER_TEST_ID';
    const INTERNAL_ERROR = 'INTERNAL_ERROR';
}
