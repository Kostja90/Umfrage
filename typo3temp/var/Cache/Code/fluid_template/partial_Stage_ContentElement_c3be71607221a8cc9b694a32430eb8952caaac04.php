<?php

class partial_Stage_ContentElement_c3be71607221a8cc9b694a32430eb8952caaac04 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="meta-label">
	<span data-template-property="_type"></span>: <span data-template-property="_identifier"></span>
</div>
<div class="t3-form-form-element-body">
	<div class="t3-form-icon-container">
		<span data-identifier="elementIcon"></span>
	</div>
	<div class="t3-form-element-info">
		<div class="element-label-container">
			<div class="element-label">
				<span data-template-property="label"></span>
				<span data-template-property="_required"></span>
			</div>
		</div>
		<div class="element-content">
			<div data-template-property="properties.contentElementUid" />
		</div>
	</div>
	<div class="t3-form-validator-info" data-identifier="validators">
		<span data-identifier="validatorIcon"></span>
		<div class="t3-form-validator-list">
			<div data-identifier="validatorsContainer">
				<div class="validator-label" data-template-property="_label"></div>
			</div>
		</div>
	</div>
</div>

';
}


}
#