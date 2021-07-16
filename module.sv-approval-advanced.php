<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sv-approval-advanced/1.1.0',
	array(
		// Identification
		//
		'label' => 'Advanced approval',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'combodo-approval-extended/1.3.0||itop-global-requests-mgmt/1.1.2',
			'itop-request-mgmt-itil/2.6.0||itop-request-mgmt/2.6.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.sv-approval-advanced.php',
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);
