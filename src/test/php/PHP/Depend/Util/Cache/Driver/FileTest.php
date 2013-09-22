<?php
/**
 * This file is part of PHP_Depend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2013, Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php BSD License
 */

namespace PHP\Depend\Util\Cache\Driver;

use PHP\Depend\Util\Cache\AbstractDriverTest;

require_once dirname(__FILE__) . '/../AbstractDriverTest.php';

/**
 * Test case for the {@link \PHP\Depend\Util\Cache\Driver\File} class.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php BSD License
 *
 * @covers \PHP\Depend\Util\Cache\Driver\File
 */
class FileTest extends AbstractDriverTest
{
    /**
     * Temporary cache directory.
     *
     * @var string
     */
    protected $cacheDir = null;

    /**
     * Initializes a temporary working directory.
     * 
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();

        $this->cacheDir = self::createRunResourceURI('cache');
    }

    /**
     * Creates a test fixture.
     *
     * @return \PHP\Depend\Util\Cache\Driver
     */
    protected function createDriver()
    {
        return new File($this->cacheDir);
    }

    /**
     * testFileDriverStoresFileWithCacheKeyIfPresent
     *
     * @return void
     * @since 1.0.0
     */
    public function testFileDriverStoresFileWithCacheKeyIfPresent()
    {
        $cache = new File($this->cacheDir, 'foo');
        $cache->type('bar')->store('baz', __METHOD__);

        $key = md5('baz' . 'foo');
        $dir = substr($key, 0, 2);

        $this->assertEquals(1, count(glob("{$this->cacheDir}/{$dir}/{$key}*.bar")));
    }

    /**
     * testFileDriverRestoresFileWithCacheKeyIfPresent
     *
     * @return void
     * @since 1.0.0
     */
    public function testFileDriverRestoresFileWithCacheKeyIfPresent()
    {
        $cache = new File($this->cacheDir, 'foo');
        $cache->type('bar')->store('baz', __METHOD__);

        $this->assertEquals(__METHOD__, $cache->type('bar')->restore('baz'));
    }
}
