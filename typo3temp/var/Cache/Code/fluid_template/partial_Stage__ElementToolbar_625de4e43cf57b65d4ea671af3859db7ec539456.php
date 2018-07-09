<?php

class partial_Stage__ElementToolbar_625de4e43cf57b65d4ea671af3859db7ec539456 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="btn-toolbar-container" data-identifier="elementToolbar">
	<div class="btn-toolbar" data-identifier="elementToolbarButtons">
		<div class="btn-group btn-group-sm" role="group">
			<a class="btn btn-default" href="#" title="';
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
$arguments1['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" data-identifier="stageElementToolbarNewElement">';
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
$arguments3['identifier'] = 'actions-document-new';
$arguments3['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</a>
		</div>
		<div class="btn-group btn-group-sm" role="group">
			<div class="btn-group t3-form-dropdown-buttons" data-identifier="stageElementToolbarNewElementSplitButton">
				<button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['identifier'] = NULL;
$arguments7['size'] = 'small';
$arguments7['overlay'] = NULL;
$arguments7['state'] = 'default';
$arguments7['alternativeMarkupIdentifier'] = NULL;
$arguments7['identifier'] = 'actions-document-new';
$arguments7['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					<li data-no-sorting>
						<a href="#" data-identifier="stageElementToolbarNewElementSplitButtonInside">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['identifier'] = NULL;
$arguments9['size'] = 'small';
$arguments9['overlay'] = NULL;
$arguments9['state'] = 'default';
$arguments9['alternativeMarkupIdentifier'] = NULL;
$arguments9['identifier'] = 't3-form-icon-insert-in';
$arguments9['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element.inside';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '
						</a>
					</li>
					<li data-no-sorting>
						<a href="#" data-identifier="stageElementToolbarNewElementSplitButtonAfter">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 't3-form-icon-insert-after';
$arguments13['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element.after';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="btn-group btn-group-sm" role="group">
			<a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.remove';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '" data-identifier="stageElementToolbarRemoveElement">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['identifier'] = NULL;
$arguments19['size'] = 'small';
$arguments19['overlay'] = NULL;
$arguments19['state'] = 'default';
$arguments19['alternativeMarkupIdentifier'] = NULL;
$arguments19['identifier'] = 'actions-edit-delete';
$arguments19['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '</a>
		</div>
	</div>
</div>

';

return $output0;
}


}
#