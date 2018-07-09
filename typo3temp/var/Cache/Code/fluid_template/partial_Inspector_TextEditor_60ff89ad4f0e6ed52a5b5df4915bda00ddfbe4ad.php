<?php

class partial_Inspector_TextEditor_60ff89ad4f0e6ed52a5b5df4915bda00ddfbe4ad extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="form-editor">
	<div class="t3-form-control-group form-group">
		<label><span data-template-property="label" /></label>
		<div class="input-group" data-identifier="inspectorEditorControlsGroup">
			<div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
				<input type="text" value="" data-template-property="propertyPath" class="form-control">
			</div>
			<span class="input-group-btn" role="group" data-identifier="inspectorEditorFormElementSelectorControlsWrapper">
				<span class="btn-group t3-form-dropdown-buttons" data-identifier="inspectorEditorFormElementSelectorSplitButtonContainer">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.inspector.editor.formelement_selector.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['identifier'] = NULL;
$arguments3['size'] = 'small';
$arguments3['overlay'] = NULL;
$arguments3['state'] = 'default';
$arguments3['alternativeMarkupIdentifier'] = NULL;
$arguments3['identifier'] = 't3-form-icon-form-element-selector';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right" data-identifier="inspectorEditorFormElementSelectorSplitButtonListContainer"></ul>
				</span>
			</span>
		</div>
		<span data-template-property="fieldExplanationText" />
		<span data-template-property="validationErrors" />
	</div>
</div>

';

return $output0;
}


}
#