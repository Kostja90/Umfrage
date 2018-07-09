<?php

class Standard_action_index_fb492c7c82b3d88dd349b5613e03dfdd119bccb9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'ImageManipulation';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array160)]);

$output159 .= '"
									name="';
$array161 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array161)]);

$output159 .= '"
									value="';
$array162 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array162)]);

$output159 .= '"
									data-formengine-validation-rules="';
$array163 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array163)]);

$output159 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array164 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array164)]);

$output159 .= '"
									data-preview-url="';
$array165 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array165)]);

$output159 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['section'] = NULL;
$arguments166['partial'] = NULL;
$arguments166['delegate'] = NULL;
$arguments166['renderable'] = NULL;
$arguments166['arguments'] = array (
);
$arguments166['optional'] = false;
$arguments166['default'] = NULL;
$arguments166['contentAs'] = NULL;
$arguments166['partial'] = 'ModalTitle';
$arguments166['section'] = 'Main';
$arguments166['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output159 .= '"
									data-image-uid="';
$array169 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array169)]);

$output159 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array172);
};
$arguments170 = array();
$arguments170['value'] = NULL;
$arguments170['forceObject'] = false;
$renderChildrenClosure171 = ($arguments170['value'] !== null) ? function() use ($arguments170) { return $arguments170['value']; } : $renderChildrenClosure171;
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output159 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['htmlEscape'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output159 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['htmlEscape'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output159 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output159 .= '"
									data-file-field="';
$array179 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array179)]);

$output159 .= '"
									data-field="';
$array180 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array180)]);

$output159 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['htmlEscape'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output159 .= '
							</button>
						</div>
					';
return $output159;
};
$arguments157 = array();
$arguments157['if'] = NULL;

$output156 .= '';

$output156 .= '
				';
return $output156;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array154);

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments127['__elseClosures'][] = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array130)]);

$output129 .= '"
									name="';
$array131 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array131)]);

$output129 .= '"
									value="';
$array132 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array132)]);

$output129 .= '"
									data-formengine-validation-rules="';
$array133 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array133)]);

$output129 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array134 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array134)]);

$output129 .= '"
									data-preview-url="';
$array135 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array135)]);

$output129 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['partial'] = 'ModalTitle';
$arguments136['section'] = 'Main';
$arguments136['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output129 .= '"
									data-image-uid="';
$array139 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array139)]);

$output129 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$array142 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array142);
};
$arguments140 = array();
$arguments140['value'] = NULL;
$arguments140['forceObject'] = false;
$renderChildrenClosure141 = ($arguments140['value'] !== null) ? function() use ($arguments140) { return $arguments140['value']; } : $renderChildrenClosure141;
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output129 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output129 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['htmlEscape'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output129 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['key'] = NULL;
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output129 .= '"
									data-file-field="';
$array149 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array149)]);

$output129 .= '"
									data-field="';
$array150 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array150)]);

$output129 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['htmlEscape'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output129 .= '
							</button>
						</div>
					';
return $output129;
};

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$array189 = array (
);$arguments187['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array189);
$array190 = array (
);$arguments187['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array190);

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output186 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output186 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array193 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array193)]);

$output186 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$array196 = array (
);$arguments194['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array196);
$array197 = array (
);$arguments194['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array197);

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output186 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array198 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array198)]);

$output186 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['alt'] = NULL;
$arguments199['ismap'] = NULL;
$arguments199['longdesc'] = NULL;
$arguments199['usemap'] = NULL;
$arguments199['src'] = NULL;
$arguments199['treatIdAsReference'] = NULL;
$arguments199['image'] = NULL;
$arguments199['crop'] = NULL;
$arguments199['cropVariant'] = 'default';
$arguments199['width'] = NULL;
$arguments199['height'] = NULL;
$arguments199['minWidth'] = NULL;
$arguments199['minHeight'] = NULL;
$arguments199['maxWidth'] = NULL;
$arguments199['maxHeight'] = NULL;
$arguments199['absolute'] = false;
$array201 = array (
);$arguments199['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array201);
$array202 = array (
);$arguments199['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array202);
$array203 = array (
);$arguments199['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array203);
$arguments199['maxHeight'] = 150;
$arguments199['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array204 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$array207 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array207);
};
$arguments205 = array();
$arguments205['value'] = NULL;
$arguments205['forceObject'] = false;
$renderChildrenClosure206 = ($arguments205['value'] !== null) ? function() use ($arguments205) { return $arguments205['value']; } : $renderChildrenClosure206;$array204['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);
$array208 = array (
);$array204['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array208);
$arguments199['additionalAttributes'] = $array204;

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output186 .= '
							</div>
						</div>
					';
return $output186;
};
$arguments183 = array();
$arguments183['each'] = NULL;
$arguments183['as'] = NULL;
$arguments183['key'] = NULL;
$arguments183['reverse'] = false;
$arguments183['iteration'] = NULL;
$array185 = array (
);$arguments183['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array185);
$arguments183['as'] = 'cropVariant';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output126 .= '
				</div>
			';
return $output126;
};
$arguments124 = array();

$output123 .= '';

$output123 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['key'] = NULL;
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['htmlEscape'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$arguments232['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext)]);

$output231 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array236);
};
$arguments234 = array();
$arguments234['value'] = NULL;
$arguments234['mode'] = 'upper';
$arguments234['mode'] = 'upper';

$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output231 .= '
							</em>
						</p>
					';
return $output231;
};
$arguments229 = array();

$output228 .= '';

$output228 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['htmlEscape'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output239 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output239 .= '
						</p>
					';
return $output239;
};
$arguments237 = array();
$arguments237['if'] = NULL;

$output228 .= '';

$output228 .= '
				';
return $output228;
};
$arguments212 = array();
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$arguments212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array226);

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments212['__thenClosure'] = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output214 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$array219 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array219);
};
$arguments217 = array();
$arguments217['value'] = NULL;
$arguments217['mode'] = 'upper';
$arguments217['mode'] = 'upper';

$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output214 .= '
							</em>
						</p>
					';
return $output214;
};
$arguments212['__elseClosures'][] = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output220 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output220 .= '
						</p>
					';
return $output220;
};

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
				</div>
			';
return $output211;
};
$arguments209 = array();
$arguments209['if'] = NULL;

$output123 .= '';

$output123 .= '
		';
return $output123;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array120);
$array119['1'] = ' && ';
$array121 = array (
);$array119['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array121);

$expression122 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array37)]);

$output36 .= '"
									name="';
$array38 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array38)]);

$output36 .= '"
									value="';
$array39 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array39)]);

$output36 .= '"
									data-formengine-validation-rules="';
$array40 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array40)]);

$output36 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array41 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array41)]);

$output36 .= '"
									data-preview-url="';
$array42 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array42)]);

$output36 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['partial'] = 'ModalTitle';
$arguments43['section'] = 'Main';
$arguments43['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '"
									data-image-uid="';
$array46 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array46)]);

$output36 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;
$arguments47['forceObject'] = false;
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output36 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output36 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output36 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output36 .= '"
									data-file-field="';
$array56 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array56)]);

$output36 .= '"
									data-field="';
$array57 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array57)]);

$output36 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output36 .= '
							</button>
						</div>
					';
return $output36;
};
$arguments34 = array();
$arguments34['if'] = NULL;

$output33 .= '';

$output33 .= '
				';
return $output33;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array7)]);

$output6 .= '"
									name="';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array8)]);

$output6 .= '"
									value="';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array9)]);

$output6 .= '"
									data-formengine-validation-rules="';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array10)]);

$output6 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array11 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array11)]);

$output6 .= '"
									data-preview-url="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array12)]);

$output6 .= '"
									data-severity="notice"
									data-modal-title="';
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
$arguments13['partial'] = 'ModalTitle';
$arguments13['section'] = 'Main';
$arguments13['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '"
									data-image-uid="';
$array16 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array16)]);

$output6 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['forceObject'] = false;
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output6 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output6 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output6 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output6 .= '"
									data-file-field="';
$array26 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array26)]);

$output6 .= '"
									data-field="';
$array27 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array27)]);

$output6 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output6 .= '
							</button>
						</div>
					';
return $output6;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$array66 = array (
);$arguments64['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array66);
$array67 = array (
);$arguments64['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array67);

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output63 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array70 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array70)]);

$output63 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$array73 = array (
);$arguments71['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array73);
$array74 = array (
);$arguments71['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array74);

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output63 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array75 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array75)]);

$output63 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['alt'] = NULL;
$arguments76['ismap'] = NULL;
$arguments76['longdesc'] = NULL;
$arguments76['usemap'] = NULL;
$arguments76['src'] = NULL;
$arguments76['treatIdAsReference'] = NULL;
$arguments76['image'] = NULL;
$arguments76['crop'] = NULL;
$arguments76['cropVariant'] = 'default';
$arguments76['width'] = NULL;
$arguments76['height'] = NULL;
$arguments76['minWidth'] = NULL;
$arguments76['minHeight'] = NULL;
$arguments76['maxWidth'] = NULL;
$arguments76['maxHeight'] = NULL;
$arguments76['absolute'] = false;
$array78 = array (
);$arguments76['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array78);
$array79 = array (
);$arguments76['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array79);
$array80 = array (
);$arguments76['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array80);
$arguments76['maxHeight'] = 150;
$arguments76['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array81 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;
$arguments82['forceObject'] = false;
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;$array81['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
$array85 = array (
);$array81['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array85);
$arguments76['additionalAttributes'] = $array81;

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output63 .= '
							</div>
						</div>
					';
return $output63;
};
$arguments60 = array();
$arguments60['each'] = NULL;
$arguments60['as'] = NULL;
$arguments60['key'] = NULL;
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$array62 = array (
);$arguments60['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array62);
$arguments60['as'] = 'cropVariant';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output3 .= '
				</div>
			';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['htmlEscape'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output106 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;
$arguments109['mode'] = 'upper';
$arguments109['mode'] = 'upper';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output106 .= '
							</em>
						</p>
					';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output114 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output114 .= '
						</p>
					';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output103 .= '';

$output103 .= '
				';
return $output103;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['mode'] = 'upper';
$arguments92['mode'] = 'upper';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output89 .= '
							</em>
						</p>
					';
return $output89;
};
$arguments87['__elseClosures'][] = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['key'] = NULL;
$arguments96['id'] = NULL;
$arguments96['default'] = NULL;
$arguments96['htmlEscape'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output95 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output95 .= '
						</p>
					';
return $output95;
};

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
				</div>
			';
return $output86;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output244 = '';

$output244 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
	xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['name'] = NULL;
$arguments245['name'] = 'ImageManipulation';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output244 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array409 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array409)]);

$output408 .= '"
									name="';
$array410 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array410)]);

$output408 .= '"
									value="';
$array411 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array411)]);

$output408 .= '"
									data-formengine-validation-rules="';
$array412 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array412)]);

$output408 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array413 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array413)]);

$output408 .= '"
									data-preview-url="';
$array414 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array414)]);

$output408 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['section'] = NULL;
$arguments415['partial'] = NULL;
$arguments415['delegate'] = NULL;
$arguments415['renderable'] = NULL;
$arguments415['arguments'] = array (
);
$arguments415['optional'] = false;
$arguments415['default'] = NULL;
$arguments415['contentAs'] = NULL;
$arguments415['partial'] = 'ModalTitle';
$arguments415['section'] = 'Main';
$arguments415['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output408 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output408 .= '"
									data-image-uid="';
$array418 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array418)]);

$output408 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$array421 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array421);
};
$arguments419 = array();
$arguments419['value'] = NULL;
$arguments419['forceObject'] = false;
$renderChildrenClosure420 = ($arguments419['value'] !== null) ? function() use ($arguments419) { return $arguments419['value']; } : $renderChildrenClosure420;
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext)]);

$output408 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['htmlEscape'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output408 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['key'] = NULL;
$arguments424['id'] = NULL;
$arguments424['default'] = NULL;
$arguments424['htmlEscape'] = NULL;
$arguments424['arguments'] = NULL;
$arguments424['extensionName'] = NULL;
$arguments424['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext)]);

$output408 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['key'] = NULL;
$arguments426['id'] = NULL;
$arguments426['default'] = NULL;
$arguments426['htmlEscape'] = NULL;
$arguments426['arguments'] = NULL;
$arguments426['extensionName'] = NULL;
$arguments426['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output408 .= '"
									data-file-field="';
$array428 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array428)]);

$output408 .= '"
									data-field="';
$array429 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array429)]);

$output408 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['key'] = NULL;
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['htmlEscape'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$arguments430['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output408 .= '
							</button>
						</div>
					';
return $output408;
};
$arguments406 = array();
$arguments406['if'] = NULL;

$output405 .= '';

$output405 .= '
				';
return $output405;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array403);

$expression404 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments376['__elseClosures'][] = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array379 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array379)]);

$output378 .= '"
									name="';
$array380 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array380)]);

$output378 .= '"
									value="';
$array381 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array381)]);

$output378 .= '"
									data-formengine-validation-rules="';
$array382 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array382)]);

$output378 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array383 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array383)]);

$output378 .= '"
									data-preview-url="';
$array384 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array384)]);

$output378 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['section'] = NULL;
$arguments385['partial'] = NULL;
$arguments385['delegate'] = NULL;
$arguments385['renderable'] = NULL;
$arguments385['arguments'] = array (
);
$arguments385['optional'] = false;
$arguments385['default'] = NULL;
$arguments385['contentAs'] = NULL;
$arguments385['partial'] = 'ModalTitle';
$arguments385['section'] = 'Main';
$arguments385['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output378 .= '"
									data-image-uid="';
$array388 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array388)]);

$output378 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$array391 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array391);
};
$arguments389 = array();
$arguments389['value'] = NULL;
$arguments389['forceObject'] = false;
$renderChildrenClosure390 = ($arguments389['value'] !== null) ? function() use ($arguments389) { return $arguments389['value']; } : $renderChildrenClosure390;
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output378 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['key'] = NULL;
$arguments392['id'] = NULL;
$arguments392['default'] = NULL;
$arguments392['htmlEscape'] = NULL;
$arguments392['arguments'] = NULL;
$arguments392['extensionName'] = NULL;
$arguments392['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext)]);

$output378 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['htmlEscape'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output378 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['key'] = NULL;
$arguments396['id'] = NULL;
$arguments396['default'] = NULL;
$arguments396['htmlEscape'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output378 .= '"
									data-file-field="';
$array398 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array398)]);

$output378 .= '"
									data-field="';
$array399 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array399)]);

$output378 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['key'] = NULL;
$arguments400['id'] = NULL;
$arguments400['default'] = NULL;
$arguments400['htmlEscape'] = NULL;
$arguments400['arguments'] = NULL;
$arguments400['extensionName'] = NULL;
$arguments400['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext)]);

$output378 .= '
							</button>
						</div>
					';
return $output378;
};

$output375 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['key'] = NULL;
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['htmlEscape'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$array438 = array (
);$arguments436['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array438);
$array439 = array (
);$arguments436['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array439);

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output435 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['htmlEscape'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output435 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array442 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array442)]);

$output435 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['key'] = NULL;
$arguments443['id'] = NULL;
$arguments443['default'] = NULL;
$arguments443['htmlEscape'] = NULL;
$arguments443['arguments'] = NULL;
$arguments443['extensionName'] = NULL;
$array445 = array (
);$arguments443['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array445);
$array446 = array (
);$arguments443['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array446);

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext)]);

$output435 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array447 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array447)]);

$output435 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['additionalAttributes'] = NULL;
$arguments448['data'] = NULL;
$arguments448['class'] = NULL;
$arguments448['dir'] = NULL;
$arguments448['id'] = NULL;
$arguments448['lang'] = NULL;
$arguments448['style'] = NULL;
$arguments448['title'] = NULL;
$arguments448['accesskey'] = NULL;
$arguments448['tabindex'] = NULL;
$arguments448['onclick'] = NULL;
$arguments448['alt'] = NULL;
$arguments448['ismap'] = NULL;
$arguments448['longdesc'] = NULL;
$arguments448['usemap'] = NULL;
$arguments448['src'] = NULL;
$arguments448['treatIdAsReference'] = NULL;
$arguments448['image'] = NULL;
$arguments448['crop'] = NULL;
$arguments448['cropVariant'] = 'default';
$arguments448['width'] = NULL;
$arguments448['height'] = NULL;
$arguments448['minWidth'] = NULL;
$arguments448['minHeight'] = NULL;
$arguments448['maxWidth'] = NULL;
$arguments448['maxHeight'] = NULL;
$arguments448['absolute'] = false;
$array450 = array (
);$arguments448['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array450);
$array451 = array (
);$arguments448['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array451);
$array452 = array (
);$arguments448['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array452);
$arguments448['maxHeight'] = 150;
$arguments448['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array453 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$array456 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array456);
};
$arguments454 = array();
$arguments454['value'] = NULL;
$arguments454['forceObject'] = false;
$renderChildrenClosure455 = ($arguments454['value'] !== null) ? function() use ($arguments454) { return $arguments454['value']; } : $renderChildrenClosure455;$array453['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);
$array457 = array (
);$array453['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array457);
$arguments448['additionalAttributes'] = $array453;

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output435 .= '
							</div>
						</div>
					';
return $output435;
};
$arguments432 = array();
$arguments432['each'] = NULL;
$arguments432['as'] = NULL;
$arguments432['key'] = NULL;
$arguments432['reverse'] = false;
$arguments432['iteration'] = NULL;
$array434 = array (
);$arguments432['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array434);
$arguments432['as'] = 'cropVariant';

$output375 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output375 .= '
				</div>
			';
return $output375;
};
$arguments373 = array();

$output372 .= '';

$output372 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['key'] = NULL;
$arguments481['id'] = NULL;
$arguments481['default'] = NULL;
$arguments481['htmlEscape'] = NULL;
$arguments481['arguments'] = NULL;
$arguments481['extensionName'] = NULL;
$arguments481['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext)]);

$output480 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$array485 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array485);
};
$arguments483 = array();
$arguments483['value'] = NULL;
$arguments483['mode'] = 'upper';
$arguments483['mode'] = 'upper';

$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output480 .= '
							</em>
						</p>
					';
return $output480;
};
$arguments478 = array();

$output477 .= '';

$output477 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['htmlEscape'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output488 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['key'] = NULL;
$arguments491['id'] = NULL;
$arguments491['default'] = NULL;
$arguments491['htmlEscape'] = NULL;
$arguments491['arguments'] = NULL;
$arguments491['extensionName'] = NULL;
$arguments491['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output488 .= '
						</p>
					';
return $output488;
};
$arguments486 = array();
$arguments486['if'] = NULL;

$output477 .= '';

$output477 .= '
				';
return $output477;
};
$arguments461 = array();
$arguments461['then'] = NULL;
$arguments461['else'] = NULL;
$arguments461['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array475);

$expression476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments461['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments461['__thenClosure'] = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['key'] = NULL;
$arguments464['id'] = NULL;
$arguments464['default'] = NULL;
$arguments464['htmlEscape'] = NULL;
$arguments464['arguments'] = NULL;
$arguments464['extensionName'] = NULL;
$arguments464['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext)]);

$output463 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$array468 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array468);
};
$arguments466 = array();
$arguments466['value'] = NULL;
$arguments466['mode'] = 'upper';
$arguments466['mode'] = 'upper';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext)]);

$output463 .= '
							</em>
						</p>
					';
return $output463;
};
$arguments461['__elseClosures'][] = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['key'] = NULL;
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['htmlEscape'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext)]);

$output469 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['key'] = NULL;
$arguments472['id'] = NULL;
$arguments472['default'] = NULL;
$arguments472['htmlEscape'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['extensionName'] = NULL;
$arguments472['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext)]);

$output469 .= '
						</p>
					';
return $output469;
};

$output460 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output460 .= '
				</div>
			';
return $output460;
};
$arguments458 = array();
$arguments458['if'] = NULL;

$output372 .= '';

$output372 .= '
		';
return $output372;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array369);
$array368['1'] = ' && ';
$array370 = array (
);$array368['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array370);

$expression371 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array286 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array286)]);

$output285 .= '"
									name="';
$array287 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array287)]);

$output285 .= '"
									value="';
$array288 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array288)]);

$output285 .= '"
									data-formengine-validation-rules="';
$array289 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array289)]);

$output285 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array290 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array290)]);

$output285 .= '"
									data-preview-url="';
$array291 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array291)]);

$output285 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['section'] = NULL;
$arguments292['partial'] = NULL;
$arguments292['delegate'] = NULL;
$arguments292['renderable'] = NULL;
$arguments292['arguments'] = array (
);
$arguments292['optional'] = false;
$arguments292['default'] = NULL;
$arguments292['contentAs'] = NULL;
$arguments292['partial'] = 'ModalTitle';
$arguments292['section'] = 'Main';
$arguments292['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output285 .= '"
									data-image-uid="';
$array295 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array295)]);

$output285 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$array298 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array298);
};
$arguments296 = array();
$arguments296['value'] = NULL;
$arguments296['forceObject'] = false;
$renderChildrenClosure297 = ($arguments296['value'] !== null) ? function() use ($arguments296) { return $arguments296['value']; } : $renderChildrenClosure297;
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output285 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['key'] = NULL;
$arguments299['id'] = NULL;
$arguments299['default'] = NULL;
$arguments299['htmlEscape'] = NULL;
$arguments299['arguments'] = NULL;
$arguments299['extensionName'] = NULL;
$arguments299['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output285 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['htmlEscape'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output285 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['key'] = NULL;
$arguments303['id'] = NULL;
$arguments303['default'] = NULL;
$arguments303['htmlEscape'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output285 .= '"
									data-file-field="';
$array305 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array305)]);

$output285 .= '"
									data-field="';
$array306 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array306)]);

$output285 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['htmlEscape'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output285 .= '
							</button>
						</div>
					';
return $output285;
};
$arguments283 = array();
$arguments283['if'] = NULL;

$output282 .= '';

$output282 .= '
				';
return $output282;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array280);

$expression281 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array279)
					),
					$renderingContext
				);
$arguments253['__elseClosures'][] = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array256 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array256)]);

$output255 .= '"
									name="';
$array257 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array257)]);

$output255 .= '"
									value="';
$array258 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array258)]);

$output255 .= '"
									data-formengine-validation-rules="';
$array259 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array259)]);

$output255 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array260 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array260)]);

$output255 .= '"
									data-preview-url="';
$array261 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array261)]);

$output255 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['section'] = NULL;
$arguments262['partial'] = NULL;
$arguments262['delegate'] = NULL;
$arguments262['renderable'] = NULL;
$arguments262['arguments'] = array (
);
$arguments262['optional'] = false;
$arguments262['default'] = NULL;
$arguments262['contentAs'] = NULL;
$arguments262['partial'] = 'ModalTitle';
$arguments262['section'] = 'Main';
$arguments262['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output255 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output255 .= '"
									data-image-uid="';
$array265 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array265)]);

$output255 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$array268 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array268);
};
$arguments266 = array();
$arguments266['value'] = NULL;
$arguments266['forceObject'] = false;
$renderChildrenClosure267 = ($arguments266['value'] !== null) ? function() use ($arguments266) { return $arguments266['value']; } : $renderChildrenClosure267;
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output255 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['key'] = NULL;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['htmlEscape'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output255 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['key'] = NULL;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['htmlEscape'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$arguments271['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output255 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['htmlEscape'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output255 .= '"
									data-file-field="';
$array275 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array275)]);

$output255 .= '"
									data-field="';
$array276 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array276)]);

$output255 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['key'] = NULL;
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['htmlEscape'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext)]);

$output255 .= '
							</button>
						</div>
					';
return $output255;
};

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$array315 = array (
);$arguments313['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array315);
$array316 = array (
);$arguments313['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array316);

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);

$output312 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['key'] = NULL;
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['htmlEscape'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$arguments317['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext)]);

$output312 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array319 = array (
);
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array319)]);

$output312 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['htmlEscape'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$array322 = array (
);$arguments320['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array322);
$array323 = array (
);$arguments320['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array323);

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output312 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array324 = array (
);
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array324)]);

$output312 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['alt'] = NULL;
$arguments325['ismap'] = NULL;
$arguments325['longdesc'] = NULL;
$arguments325['usemap'] = NULL;
$arguments325['src'] = NULL;
$arguments325['treatIdAsReference'] = NULL;
$arguments325['image'] = NULL;
$arguments325['crop'] = NULL;
$arguments325['cropVariant'] = 'default';
$arguments325['width'] = NULL;
$arguments325['height'] = NULL;
$arguments325['minWidth'] = NULL;
$arguments325['minHeight'] = NULL;
$arguments325['maxWidth'] = NULL;
$arguments325['maxHeight'] = NULL;
$arguments325['absolute'] = false;
$array327 = array (
);$arguments325['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array327);
$array328 = array (
);$arguments325['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array328);
$array329 = array (
);$arguments325['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array329);
$arguments325['maxHeight'] = 150;
$arguments325['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array330 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$array333 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array333);
};
$arguments331 = array();
$arguments331['value'] = NULL;
$arguments331['forceObject'] = false;
$renderChildrenClosure332 = ($arguments331['value'] !== null) ? function() use ($arguments331) { return $arguments331['value']; } : $renderChildrenClosure332;$array330['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);
$array334 = array (
);$array330['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array334);
$arguments325['additionalAttributes'] = $array330;

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output312 .= '
							</div>
						</div>
					';
return $output312;
};
$arguments309 = array();
$arguments309['each'] = NULL;
$arguments309['as'] = NULL;
$arguments309['key'] = NULL;
$arguments309['reverse'] = false;
$arguments309['iteration'] = NULL;
$array311 = array (
);$arguments309['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array311);
$arguments309['as'] = 'cropVariant';

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output252 .= '
				</div>
			';
return $output252;
};
$arguments250['__elseClosures'][] = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['htmlEscape'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output355 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$array360 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array360);
};
$arguments358 = array();
$arguments358['value'] = NULL;
$arguments358['mode'] = 'upper';
$arguments358['mode'] = 'upper';

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext)]);

$output355 .= '
							</em>
						</p>
					';
return $output355;
};
$arguments353 = array();

$output352 .= '';

$output352 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['htmlEscape'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['key'] = NULL;
$arguments366['id'] = NULL;
$arguments366['default'] = NULL;
$arguments366['htmlEscape'] = NULL;
$arguments366['arguments'] = NULL;
$arguments366['extensionName'] = NULL;
$arguments366['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext)]);

$output363 .= '
						</p>
					';
return $output363;
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output352 .= '';

$output352 .= '
				';
return $output352;
};
$arguments336 = array();
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$arguments336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array350);

$expression351 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression351(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments336['__thenClosure'] = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['htmlEscape'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['id'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext)]);

$output338 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$array343 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array343);
};
$arguments341 = array();
$arguments341['value'] = NULL;
$arguments341['mode'] = 'upper';
$arguments341['mode'] = 'upper';

$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output338 .= '
							</em>
						</p>
					';
return $output338;
};
$arguments336['__elseClosures'][] = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
						<h4 class="alert-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['key'] = NULL;
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['htmlEscape'] = NULL;
$arguments345['arguments'] = NULL;
$arguments345['extensionName'] = NULL;
$arguments345['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext)]);

$output344 .= '
						</h4>
						<p class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['htmlEscape'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output344 .= '
						</p>
					';
return $output344;
};

$output335 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output335 .= '
				</div>
			';
return $output335;
};

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
	';
return $output249;
};
$arguments247 = array();
$arguments247['name'] = NULL;
$arguments247['name'] = 'Main';

$output244 .= NULL;

$output244 .= '
</html>
';

return $output244;
}


}
#