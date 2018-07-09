<?php

class partial_Stage_Fieldset_ab5cb84f4cf74602a911ca00b914f04514b4f077 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	</div>
</div>

';
}


}
#