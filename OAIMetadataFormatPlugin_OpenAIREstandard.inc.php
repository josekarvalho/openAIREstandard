<?php

/**
 * @file OAIMetadataFormatPlugin_OpenAIREstandard.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIMetadataFormatPlugin_OpenAIRE
 * @ingroup oai_format_openaire
 * @see OAI
 *
 * @brief OAI JATS XML format plugin for OpenAIRE.
 */
import('lib.pkp.classes.plugins.OAIMetadataFormatPlugin');
import('plugins.generic.openAIREstandard.OAIMetadataFormat_OpenAIREstandard');

class OAIMetadataFormatPlugin_OpenAIREstandard extends OAIMetadataFormatPlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'OAIMetadataFormatPlugin_OpenAIREstandard';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.oaiMetadata.openAIREstandard.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.oaiMetadata.openAIREstandard.description');
	}

	function getFormatClass() {
		return 'OAIMetadataFormat_OpenAIREstandard';
	}

	static function getMetadataPrefix() {
            //return 'oai_openaire_jats';
		return 'oai_openaire';
	}

	static function getSchema() {
		return 'https://www.openaire.eu/schema/repo-lit/4.0/openaire.xsd';
	}

	static function getNamespace() {
		return 'https://openaire-guidelines-for-literature-repository-managers.readthedocs.io/en/v4.0.0/application_profile.html';
	}
}
