<?php

namespace MediaWiki\Extensions\ConflictCases\Tests;

use MediaWikiTestCase;

class TestHooks extends MediaWikiTestCase {

	public function testSolvableConflict() {
		$this->assertEquals( 1, 1 );
	}

	public function testUnsolvableConflict() {
		$this->assertEquals( 2, 1 );
	}

}
