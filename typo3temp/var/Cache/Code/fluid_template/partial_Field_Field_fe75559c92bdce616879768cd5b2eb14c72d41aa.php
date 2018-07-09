<?php


class partial_Field_Field_fe75559c92bdce616879768cd5b2eb14c72d41aa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	<div class="form-group';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.errors.0', $array10)]);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['then'] = ' has-error';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
			<label class="control-label" for="';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array18)]);

$output17 .= '">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['element'] = NULL;
$arguments19['property'] = NULL;
$arguments19['renderingOptionProperty'] = NULL;
$array21 = array (
);$arguments19['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array21);
$arguments19['property'] = 'label';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['partial'] = 'Field/Required';
return TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('element.required', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '</label>
		';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('doNotShowLabel', $array15);
$array14['1'] = ' != 1';

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
		<div class="';
$array29 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.properties.containerClassAttribute', $array29)]);

$output6 .= '">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('elementContent', $array33);

$output32 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
					<span class="error help-block" role="alert">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementErrorViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['element'] = NULL;
$arguments44['error'] = '';
$arguments44['code'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['defaultValue'] = '';
$array46 = array (
);$arguments44['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array46);
$array47 = array (
);$arguments44['error'] = $renderingContext->getVariableProvider()->getByPath('error', $array47);

$output43 .= TYPO3\CMS\Form\ViewHelpers\TranslateElementErrorViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
							<br />
						';
return $output43;
};
$arguments40 = array();
$arguments40['each'] = NULL;
$arguments40['as'] = NULL;
$arguments40['key'] = NULL;
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$array42 = array (
);$arguments40['each'] = $renderingContext->getVariableProvider()->getByPath('validationResults.errors', $array42);
$arguments40['as'] = 'error';

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
					</span>
				';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output32 .= '
			';
return $output32;
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output6 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output6 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
				<span class="help-block">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['element'] = NULL;
$arguments54['property'] = NULL;
$arguments54['renderingOptionProperty'] = NULL;
$array56 = array (
);$arguments54['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array56);
$arguments54['property'] = 'elementDescription';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '</span>
			';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementDescription', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output6 .= '
		</div>
	</div>
';
return $output6;
};
$arguments1 = array();
$arguments1['for'] = '';
$arguments1['as'] = 'validationResults';
$output3 = '';
$array4 = array (
);
$output3 .= $renderingContext->getVariableProvider()->getByPath('element.rootForm.identifier', $array4);

$output3 .= '.';
$array5 = array (
);
$output3 .= $renderingContext->getVariableProvider()->getByPath('element.identifier', $array5);
$arguments1['for'] = $output3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#