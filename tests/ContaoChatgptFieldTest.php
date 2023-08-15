<?php

namespace Admin\ContaoExtensionChatgptField\Tests;

use Admin\ContaoExtensionChatgptField\ContaoExtensionChatgptField;
use PHPUnit\Framework\TestCase;

class ContaoChatgptFieldTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoExtensionChatgptField ();

        $this->assertInstanceOf('Admin\ContaoExtensionChatgptField\ContaoExtensionChatgptField', $bundle);
    }
}