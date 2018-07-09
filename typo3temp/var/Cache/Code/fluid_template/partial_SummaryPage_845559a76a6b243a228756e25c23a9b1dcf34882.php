<?php


class partial_SummaryPage_845559a76a6b243a228756e25c23a9b1dcf34882 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	<fieldset class="form-group">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
			<legend>';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['element'] = NULL;
$arguments11['property'] = NULL;
$arguments11['renderingOptionProperty'] = NULL;
$array13 = array (
);$arguments11['element'] = $renderingContext->getVariableProvider()->getByPath('page', $array13);
$arguments11['property'] = 'label';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</legend>
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
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('page.label', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		<div class="table-responsive">
			<table class="table">
				';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
					<tr>
						<td class="summary-table-first-col">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['element'] = NULL;
$arguments18['property'] = NULL;
$arguments18['renderingOptionProperty'] = NULL;
$array20 = array (
);$arguments18['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array20);
$arguments18['property'] = 'label';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '</td>
						<td>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['alt'] = NULL;
$arguments174['ismap'] = NULL;
$arguments174['longdesc'] = NULL;
$arguments174['usemap'] = NULL;
$arguments174['src'] = NULL;
$arguments174['treatIdAsReference'] = NULL;
$arguments174['image'] = NULL;
$arguments174['crop'] = NULL;
$arguments174['cropVariant'] = 'default';
$arguments174['width'] = NULL;
$arguments174['height'] = NULL;
$arguments174['minWidth'] = NULL;
$arguments174['minHeight'] = NULL;
$arguments174['maxWidth'] = NULL;
$arguments174['maxHeight'] = NULL;
$arguments174['absolute'] = false;
$array176 = array (
);$arguments174['image'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array176);
$array177 = array (
);$arguments174['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxWidth', $array177);
$array178 = array (
);$arguments174['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxHeight', $array178);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['element'] = NULL;
$arguments179['property'] = NULL;
$arguments179['renderingOptionProperty'] = NULL;
$array181 = array (
);$arguments179['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array181);
$arguments179['property'] = 'altText';
$arguments174['alt'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
										';
return $output173;
};
$arguments171 = array();

$output170 .= '';

$output170 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
															<li>';
$array208 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array208)]);

$output207 .= '</li>
														';
return $output207;
};
$arguments204 = array();
$arguments204['each'] = NULL;
$arguments204['as'] = NULL;
$arguments204['key'] = NULL;
$arguments204['reverse'] = false;
$arguments204['iteration'] = NULL;
$array206 = array (
);$arguments204['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array206);
$arguments204['as'] = 'value';

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
													</ul>
												';
return $output203;
};
$arguments201 = array();

$output200 .= '';

$output200 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$array214 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array214)]);
};
$arguments212 = array();
$arguments212['value'] = NULL;
$renderChildrenClosure213 = ($arguments212['value'] !== null) ? function() use ($arguments212) { return $arguments212['value']; } : $renderChildrenClosure213;
$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
												';
return $output211;
};
$arguments209 = array();
$arguments209['if'] = NULL;

$output200 .= '';

$output200 .= '
											';
return $output200;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$arguments185['__thenClosure'] = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
															<li>';
$array192 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array192)]);

$output191 .= '</li>
														';
return $output191;
};
$arguments188 = array();
$arguments188['each'] = NULL;
$arguments188['as'] = NULL;
$arguments188['key'] = NULL;
$arguments188['reverse'] = false;
$arguments188['iteration'] = NULL;
$array190 = array (
);$arguments188['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array190);
$arguments188['as'] = 'value';

$output187 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
													</ul>
												';
return $output187;
};
$arguments185['__elseClosures'][] = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$array196 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array196)]);
};
$arguments194 = array();
$arguments194['value'] = NULL;
$renderChildrenClosure195 = ($arguments194['value'] !== null) ? function() use ($arguments194) { return $arguments194['value']; } : $renderChildrenClosure195;
$output193 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
												';
return $output193;
};

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
										';
return $output184;
};
$arguments182 = array();
$arguments182['if'] = NULL;

$output170 .= '';

$output170 .= '
									';
return $output170;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.type', $array167);
$array165['0'] = $array166;
$array165['1'] = ' == ';
// Rendering Array
$array168 = array();
$array168['0'] = 'ImageUpload';
$array165['2'] = $array168;

$expression169 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['alt'] = NULL;
$arguments126['ismap'] = NULL;
$arguments126['longdesc'] = NULL;
$arguments126['usemap'] = NULL;
$arguments126['src'] = NULL;
$arguments126['treatIdAsReference'] = NULL;
$arguments126['image'] = NULL;
$arguments126['crop'] = NULL;
$arguments126['cropVariant'] = 'default';
$arguments126['width'] = NULL;
$arguments126['height'] = NULL;
$arguments126['minWidth'] = NULL;
$arguments126['minHeight'] = NULL;
$arguments126['maxWidth'] = NULL;
$arguments126['maxHeight'] = NULL;
$arguments126['absolute'] = false;
$array128 = array (
);$arguments126['image'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array128);
$array129 = array (
);$arguments126['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxWidth', $array129);
$array130 = array (
);$arguments126['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxHeight', $array130);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['element'] = NULL;
$arguments131['property'] = NULL;
$arguments131['renderingOptionProperty'] = NULL;
$array133 = array (
);$arguments131['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array133);
$arguments131['property'] = 'altText';
$arguments126['alt'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
										';
return $output125;
};
$arguments123['__elseClosures'][] = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
															<li>';
$array158 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array158)]);

$output157 .= '</li>
														';
return $output157;
};
$arguments154 = array();
$arguments154['each'] = NULL;
$arguments154['as'] = NULL;
$arguments154['key'] = NULL;
$arguments154['reverse'] = false;
$arguments154['iteration'] = NULL;
$array156 = array (
);$arguments154['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array156);
$arguments154['as'] = 'value';

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
													</ul>
												';
return $output153;
};
$arguments151 = array();

$output150 .= '';

$output150 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$array164 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array164)]);
};
$arguments162 = array();
$arguments162['value'] = NULL;
$renderChildrenClosure163 = ($arguments162['value'] !== null) ? function() use ($arguments162) { return $arguments162['value']; } : $renderChildrenClosure163;
$output161 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
												';
return $output161;
};
$arguments159 = array();
$arguments159['if'] = NULL;

$output150 .= '';

$output150 .= '
											';
return $output150;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
															<li>';
$array142 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array142)]);

$output141 .= '</li>
														';
return $output141;
};
$arguments138 = array();
$arguments138['each'] = NULL;
$arguments138['as'] = NULL;
$arguments138['key'] = NULL;
$arguments138['reverse'] = false;
$arguments138['iteration'] = NULL;
$array140 = array (
);$arguments138['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array140);
$arguments138['as'] = 'value';

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
													</ul>
												';
return $output137;
};
$arguments135['__elseClosures'][] = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$array146 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array146)]);
};
$arguments144 = array();
$arguments144['value'] = NULL;
$renderChildrenClosure145 = ($arguments144['value'] !== null) ? function() use ($arguments144) { return $arguments144['value']; } : $renderChildrenClosure145;
$output143 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
												';
return $output143;
};

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
										';
return $output134;
};

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
								';
return $output122;
};
$arguments120 = array();

$output119 .= '';

$output119 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return '
									-
								';
};
$arguments215 = array();
$arguments215['if'] = NULL;

$output119 .= '';

$output119 .= '
							';
return $output119;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array117);

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['alt'] = NULL;
$arguments75['ismap'] = NULL;
$arguments75['longdesc'] = NULL;
$arguments75['usemap'] = NULL;
$arguments75['src'] = NULL;
$arguments75['treatIdAsReference'] = NULL;
$arguments75['image'] = NULL;
$arguments75['crop'] = NULL;
$arguments75['cropVariant'] = 'default';
$arguments75['width'] = NULL;
$arguments75['height'] = NULL;
$arguments75['minWidth'] = NULL;
$arguments75['minHeight'] = NULL;
$arguments75['maxWidth'] = NULL;
$arguments75['maxHeight'] = NULL;
$arguments75['absolute'] = false;
$array77 = array (
);$arguments75['image'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array77);
$array78 = array (
);$arguments75['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxWidth', $array78);
$array79 = array (
);$arguments75['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxHeight', $array79);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['element'] = NULL;
$arguments80['property'] = NULL;
$arguments80['renderingOptionProperty'] = NULL;
$array82 = array (
);$arguments80['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array82);
$arguments80['property'] = 'altText';
$arguments75['alt'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
										';
return $output74;
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
															<li>';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array109)]);

$output108 .= '</li>
														';
return $output108;
};
$arguments105 = array();
$arguments105['each'] = NULL;
$arguments105['as'] = NULL;
$arguments105['key'] = NULL;
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$array107 = array (
);$arguments105['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array107);
$arguments105['as'] = 'value';

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
													</ul>
												';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array115)]);
};
$arguments113 = array();
$arguments113['value'] = NULL;
$renderChildrenClosure114 = ($arguments113['value'] !== null) ? function() use ($arguments113) { return $arguments113['value']; } : $renderChildrenClosure114;
$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
												';
return $output112;
};
$arguments110 = array();
$arguments110['if'] = NULL;

$output101 .= '';

$output101 .= '
											';
return $output101;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
															<li>';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array93)]);

$output92 .= '</li>
														';
return $output92;
};
$arguments89 = array();
$arguments89['each'] = NULL;
$arguments89['as'] = NULL;
$arguments89['key'] = NULL;
$arguments89['reverse'] = false;
$arguments89['iteration'] = NULL;
$array91 = array (
);$arguments89['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array91);
$arguments89['as'] = 'value';

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
													</ul>
												';
return $output88;
};
$arguments86['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array97)]);
};
$arguments95 = array();
$arguments95['value'] = NULL;
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
												';
return $output94;
};

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
										';
return $output85;
};
$arguments83 = array();
$arguments83['if'] = NULL;

$output71 .= '';

$output71 .= '
									';
return $output71;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.type', $array68);
$array66['0'] = $array67;
$array66['1'] = ' == ';
// Rendering Array
$array69 = array();
$array69['0'] = 'ImageUpload';
$array66['2'] = $array69;

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['alt'] = NULL;
$arguments27['ismap'] = NULL;
$arguments27['longdesc'] = NULL;
$arguments27['usemap'] = NULL;
$arguments27['src'] = NULL;
$arguments27['treatIdAsReference'] = NULL;
$arguments27['image'] = NULL;
$arguments27['crop'] = NULL;
$arguments27['cropVariant'] = 'default';
$arguments27['width'] = NULL;
$arguments27['height'] = NULL;
$arguments27['minWidth'] = NULL;
$arguments27['minHeight'] = NULL;
$arguments27['maxWidth'] = NULL;
$arguments27['maxHeight'] = NULL;
$arguments27['absolute'] = false;
$array29 = array (
);$arguments27['image'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array29);
$array30 = array (
);$arguments27['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxWidth', $array30);
$array31 = array (
);$arguments27['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('formValue.element.properties.imageMaxHeight', $array31);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['element'] = NULL;
$arguments32['property'] = NULL;
$arguments32['renderingOptionProperty'] = NULL;
$array34 = array (
);$arguments32['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array34);
$arguments32['property'] = 'altText';
$arguments27['alt'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
										';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
															<li>';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array59)]);

$output58 .= '</li>
														';
return $output58;
};
$arguments55 = array();
$arguments55['each'] = NULL;
$arguments55['as'] = NULL;
$arguments55['key'] = NULL;
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$array57 = array (
);$arguments55['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array57);
$arguments55['as'] = 'value';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
													</ul>
												';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array65 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array65)]);
};
$arguments63 = array();
$arguments63['value'] = NULL;
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
												';
return $output62;
};
$arguments60 = array();
$arguments60['if'] = NULL;

$output51 .= '';

$output51 .= '
											';
return $output51;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
													<ul>
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
															<li>';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array43)]);

$output42 .= '</li>
														';
return $output42;
};
$arguments39 = array();
$arguments39['each'] = NULL;
$arguments39['as'] = NULL;
$arguments39['key'] = NULL;
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$array41 = array (
);$arguments39['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array41);
$arguments39['as'] = 'value';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
													</ul>
												';
return $output38;
};
$arguments36['__elseClosures'][] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array47)]);
};
$arguments45 = array();
$arguments45['value'] = NULL;
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
												';
return $output44;
};

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
										';
return $output35;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
								';
return $output23;
};
$arguments21['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
									-
								';
};

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output17 .= '
						</td>
					</tr>
				';
return $output17;
};
$arguments14 = array();
$arguments14['renderable'] = NULL;
$arguments14['as'] = 'formValue';
$array16 = array (
);$arguments14['renderable'] = $renderingContext->getVariableProvider()->getByPath('page.rootForm', $array16);
$arguments14['as'] = 'formValue';

$output4 .= TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '
			</table>
		</div>
	</fieldset>
';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('page', $array3);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#