<?php

class partial_Inspector_GridColumnViewPortConfigurationEditor_a1d2eaa1d22ec1fbce023caaf9368c87c876434a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '
<div class="form-editor">
	<div class="t3-form-control-group form-group" data-identifier="editorWrapper">
		<label><span data-template-property="label" /></label><br>
		<div class="t3-form-controls btn-group" data-identifier="inspectorEditorControlsWrapper">
			<button type="button" class="btn btn-default" data-identifier="viewportButton"></button>
		</div>
	</div>
	<div class="t3-form-control-group form-group" data-template-property="numbersOfColumnsToUse">
		<label><span data-template-property="numbersOfColumnsToUse-label" /></label>
		<div class="t3-form-controls" data-identifier="numbersOfColumnsToUse-inspectorEditorControlsWrapper">
			<input type="number" value="" data-template-property="numbersOfColumnsToUse-propertyPath" class="form-control">
		</div>
		<span data-template-property="numbersOfColumnsToUse-fieldExplanationText" />
	</div>
</div>

';
}


}
#