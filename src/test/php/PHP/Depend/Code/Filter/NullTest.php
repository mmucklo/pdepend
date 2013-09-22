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
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @since     1.0.0
 */

/**
 * Test case for the {@link PHP_Depend_Code_Filter_Null} class.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @since     1.0.0
 *
 * @covers PHP_Depend_Code_Filter_Null
 * @group pdepend
 * @group pdepend::code
 * @group pdepend::code::filter
 * @group unittest
 */
class PHP_Depend_Code_Filter_NullTest extends PHP_Depend_AbstractTest
{
    /**
     * testAcceptsReturnsTrueForClass
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForClass()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Class(__CLASS__)));
    }

    /**
     * testAcceptsReturnsTrueForFile
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForFile()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_File(__FILE__)));
    }

    /**
     * testAcceptsReturnsTrueForFunction
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForFunction()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Function(__CLASS__)));
    }

    /**
     * testAcceptsReturnsTrueForInterface
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForInterface()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Interface(__CLASS__)));
    }

    /**
     * testAcceptsReturnsTrueForMethod
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForMethod()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Method(__CLASS__)));
    }

    /**
     * testAcceptsReturnsTrueForPackage
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForPackage()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Package(__CLASS__)));
    }

    /**
     * testAcceptsReturnsTrueForTrait
     *
     * @return void
     */
    public function testAcceptsReturnsTrueForTrait()
    {
        $filter = new PHP_Depend_Code_Filter_Null();
        $this->assertTrue($filter->accept(new PHP_Depend_Code_Trait(__CLASS__)));
    }
}
