<?php

namespace Craft;

class CPSearchQueryPlugin extends BasePlugin {
	public function getName() {
		return Craft::t("Control Panel Search Query");
	}

	public function getVersion() {
		return "0.9";
	}

	public function getDeveloper() {
		return "Chase Giunta";
	}

	public function getDeveloperUrl() {
		return "http://github.com/ChaseGiunta/CPSearchQuery";
	}

	public function hasCpSection() {
		return false;
	}

	function init() {
		if (craft()->request->isCpRequest() && craft()->userSession->isLoggedIn()) {
			craft()->templates->includeJsResource("cpsearchquery/js/cpsearchquery.js");
		}
	}
}