<?php

    use Way\Tests\Assert;
    use Way\Tests\Should;

    class PracticeTest extends TestCase
    {
        public function testItWorks()
        {
            $name = 'Joe';

            Should::equal('Joe', $name);
            Assert::equals('Joe', $name);
        }
    }