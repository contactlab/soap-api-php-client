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

class MobileApplicationCertificate
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $code
     * @access public
     */
    public $code = null;

    /**
     * @var int $ownerCustomerId
     * @access public
     */
    public $ownerCustomerId = null;

    /**
     * @var boolean $active
     * @access public
     */
    public $active = null;

    /**
     * @var int $versionBy
     * @access public
     */
    public $versionBy = null;

    /**
     * @var dateTime $insertedAt
     * @access public
     */
    public $insertedAt = null;

    /**
     * @var dateTime $lastModifiedAt
     * @access public
     */
    public $lastModifiedAt = null;

    /**
     * @var boolean $authorized
     * @access public
     */
    public $authorized = null;

    /**
     * @var dateTime $authorizedOn
     * @access public
     */
    public $authorizedOn = null;

    /**
     * @var int $authorizedBy
     * @access public
     */
    public $authorizedBy = null;

    /**
     * @var PushEndpointType $pushEndpointType
     * @access public
     */
    public $pushEndpointType = null;

    /**
     * @var string $mobileApplicationCode
     * @access public
     */
    public $mobileApplicationCode = null;

    /**
     * @var MobileApplicationCertificateAssignment[] $assignments
     * @access public
     */
    public $assignments = null;
}
