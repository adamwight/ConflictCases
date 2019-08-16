<?php

namespace MediaWiki\Extension\ConflictCases;

use Content;
use Title;

class Hooks {

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/EditPage::threeWayMerge:after
	 * @param Title $title Title of the page being edited
	 * @param Content $baseContent Content of the page before this edit
	 * @param Content $editContent Content after this edit
	 * @param Content $currentContent Content with conflicting edits
	 * @param Content &$result Content after built-in 3-way merge. Can be
	 *        modified by the hook: if it is false-ish, then the edit is an
	 *        unresolved conflict.  If content is provided, it will be saved as
	 *        the new page content.
	 */
	public static function onMergeAfter( Title $title, Content $baseContent,
		Content $editContent, Content $currentContent, Content &$result
	) {
		// Stub
	}

}
