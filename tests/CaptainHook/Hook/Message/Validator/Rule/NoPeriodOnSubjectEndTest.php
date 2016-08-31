<?php
/**
 * This file is part of CaptainHook.
 *
 * (c) Sebastian Feldmann <sf@sebastian.feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CaptainHook\Hook\Message\Validator\Rule;

use CaptainHook\Git\CommitMessage;

class NoPeriodOnSubjectEndTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests NoPeriodOnSubjectEnd::pass
     */
    public function testPassSuccess()
    {
        $msg  = new CommitMessage('Foo bar');
        $rule = new NoPeriodOnSubjectEnd();
        $this->assertTrue($rule->pass($msg));
    }

    /**
     * Tests NoPeriodOnSubjectEnd::pass
     */
    public function testPassFail()
    {
        $msg  = new CommitMessage('Foo bar.');
        $rule = new NoPeriodOnSubjectEnd();
        $this->assertFalse($rule->pass($msg));
    }
}