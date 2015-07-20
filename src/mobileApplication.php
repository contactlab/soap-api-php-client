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

class mobileApplication
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
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var dateTime $dateIn
     * @access public
     */
    public $dateIn = null;

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
     * @var dateTime $lastModified
     * @access public
     */
    public $lastModified = null;

    /**
     * @var mobileApplicationEnvironmentEnum $environmentType
     * @access public
     */
    public $environmentType = null;

    /**
     * @var MobileApplicationCertificate[] $MobileApplicationCertificate
     * @access public
     */
    public $MobileApplicationCertificate = null;
}
