<?php

class layout_FormEditor_html_0ee0bc1b0f40abe853759b88c915b77a8cc168b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$arguments1['addInlineSettings'] = NULL;
$array3 = array (
);$arguments1['includeCssFiles'] = $renderingContext->getVariableProvider()->getByPath('stylesheets', $array3);
$array4 = array (
);$arguments1['addInlineSettings'] = $renderingContext->getVariableProvider()->getByPath('addInlineSettings', $array4);
// Rendering Array
$array5 = array();
$array5['0'] = 'EXT:backend/Resources/Public/JavaScript/jsfunc.tbe_editor.js';
$arguments1['includeJsFiles'] = $array5;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
<div data-identifier="moduleLoadingIndicator" class="form-editor-loading-spinner">
	';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['identifier'] = NULL;
$arguments6['size'] = 'small';
$arguments6['overlay'] = NULL;
$arguments6['state'] = 'default';
$arguments6['alternativeMarkupIdentifier'] = NULL;
$arguments6['identifier'] = 'spinner-circle-dark';
$arguments6['size'] = 'default';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	<div class="form-editor-loading-spinner-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.loading';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '</div>
</div>
<div data-identifier="moduleWrapper" class="hidden">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('formEditorTemplates', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output0 .= '
	<section id="t3-form-navigation-component" class="t3-form-x-component" data-identifier="structureSection">
		<div id="t3-form-structure-panel">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['section'] = 'ElementSidebarTree';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
		</div>
	</section>
	<section id="t3-form-stage-container" data-identifier="stageContainer">
		<div id="t3-form-stage-inner-container" data-identifier="stageContainerInner">
			<header id="t3-form-stage-header">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['section'] = NULL;
$arguments15['partial'] = NULL;
$arguments15['delegate'] = NULL;
$arguments15['renderable'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$arguments15['default'] = NULL;
$arguments15['contentAs'] = NULL;
$arguments15['section'] = 'Header';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
			</header>
			<div id="t3-form-stage-content">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['section'] = 'Stage';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
			</div>
		</div>
	</section>
	<section id="t3-form-inspector-panels-container" class="t3-form-x-component" data-identifier="inspectorSection">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['section'] = 'Inspector';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
	</section>
</div>
<script type="text/javascript">
	require([\'';
$array21 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array21)]);

$output0 .= '\', \'';
$array22 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.mediator', $array22)]);

$output0 .= '\', \'';
$array23 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array23)]);

$output0 .= '\'], function (formEditorApp, mediator, viewModel) {
		window.TYPO3.FORMEDITOR_APP = formEditorApp.getInstance(
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('formEditorAppInitialData', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= ',
			mediator,
			viewModel
		).run();
	});
</script>

';

return $output0;
}


}
#