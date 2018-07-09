<?php


class Standard_action_Url_cd94fec776de1e73d992a90cfe3d3c180c5124a2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="element-browser-panel element-browser-main">
	<div class="element-browser-main-content">
		<div class="element-browser-body">
			<form action="" id="lurlform" class="form-horizontal">
				<div class="form-group form-group-sm" id="typo3-linkURL">
					<label class="col-xs-4 control-label">URL</label>
					<div class="col-xs-8">
						<div class="input-group">
							<input type="text" name="lurl" size="30" class="form-control" value="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array1)]);

$output0 .= '" />
							<div class="input-group-btn">
								<input class="btn btn-sm btn-default" type="submit"
											value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['key'] = NULL;
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['htmlEscape'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$arguments2['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:setLink';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '" />
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
';

return $output0;
}


}
#