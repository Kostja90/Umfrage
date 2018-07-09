<?php


class partial_Honeypot_05218c398349a28bb07557c61498225499dbed55 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['name'] = NULL;
$arguments24['value'] = NULL;
$arguments24['property'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$array26 = array (
);$arguments24['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array26);
$array27 = array (
);$arguments24['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array27);
// Rendering Array
$array28 = array();
$array28['autocomplete'] = 'off';
$arguments24['additionalAttributes'] = $array28;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
	';
return $output23;
};
$arguments21 = array();

$output20 .= '';

$output20 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['autofocus'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['placeholder'] = NULL;
$arguments32['pattern'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['required'] = false;
$arguments32['type'] = 'text';
$array34 = array (
);$arguments32['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array34);
$array35 = array (
);$arguments32['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array35);
$array36 = array (
);$arguments32['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array36);
// Rendering Array
$array37 = array();
$array37['autocomplete'] = 'off';
$array37['aria-hidden'] = 'true';
$arguments32['additionalAttributes'] = $array37;
$arguments32['tabindex'] = -1;
$array38 = array (
);$arguments32['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute', $array38);

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
	';
return $output31;
};
$arguments29 = array();
$arguments29['if'] = NULL;

$output20 .= '';

$output20 .= '
';
return $output20;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.renderAsHiddenField', $array18);

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['name'] = NULL;
$arguments4['value'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$array6 = array (
);$arguments4['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array6);
$array7 = array (
);$arguments4['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array7);
// Rendering Array
$array8 = array();
$array8['autocomplete'] = 'off';
$arguments4['additionalAttributes'] = $array8;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['maxlength'] = NULL;
$arguments10['readonly'] = NULL;
$arguments10['size'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['pattern'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['required'] = false;
$arguments10['type'] = 'text';
$array12 = array (
);$arguments10['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array12);
$array13 = array (
);$arguments10['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array13);
$array14 = array (
);$arguments10['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array14);
// Rendering Array
$array15 = array();
$array15['autocomplete'] = 'off';
$array15['aria-hidden'] = 'true';
$arguments10['additionalAttributes'] = $array15;
$arguments10['tabindex'] = -1;
$array16 = array (
);$arguments10['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute', $array16);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
	';
return $output9;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#