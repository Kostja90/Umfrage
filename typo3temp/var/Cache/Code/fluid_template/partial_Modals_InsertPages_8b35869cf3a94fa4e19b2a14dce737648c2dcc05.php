<?php

class partial_Modals_InsertPages_8b35869cf3a94fa4e19b2a14dce737648c2dcc05 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div id="t3-form-insert-pages-panel">
	<div class="t3-form-x-component-inner-wrapper">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
				<div class="row">
					<div class="col-sm-12">
						<h3 class="t3-form-group-';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('insertRenderablePanelConfiguration.key', $array11)]);

$output10 .= '">
							<span>';
$array12 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('insertRenderablePanelConfiguration.label', $array12)]);

$output10 .= '</span>
						</h3>
					</div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
						<div class="col-sm-4 btn-group">
							<a class="t3-form-group-';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('insertRenderablePanelConfiguration.key', $array17)]);

$output16 .= ' t3-form-type-';
$array18 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.cssKey', $array18)]);

$output16 .= ' btn btn-default btn-block" title="';
$array19 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.key', $array19)]);

$output16 .= '" data-element-type="';
$array20 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.key', $array20)]);

$output16 .= '">
								<span class="pull-left">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['identifier'] = NULL;
$arguments21['size'] = 'small';
$arguments21['overlay'] = NULL;
$arguments21['state'] = 'default';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$array23 = array (
);$arguments21['identifier'] = $renderingContext->getVariableProvider()->getByPath('element.iconIdentifier', $array23);
$arguments21['alternativeMarkupIdentifier'] = 'inline';

$output16 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
									<span>';
$array24 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.label', $array24)]);

$output16 .= '</span>
								</span>
								<span class="clearfix"></span>
							</a>
							<hr>
						</div>
					';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('insertRenderablePanelConfiguration.elements', $array15);
$arguments13['as'] = 'element';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
				</div>
			';
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('insertRenderablePanelConfiguration.key', $array8);
$array7['1'] = ' == \'page\'';

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('insertRenderablesPanelConfiguration', $array3);
$arguments1['as'] = 'insertRenderablePanelConfiguration';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</div>
</div>

';

return $output0;
}


}
#