<?php

class FormEditor_action_index_f62c9eacf2a2b529f751b9eaf69c9aaceed8207c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'FormEditor';
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
 * section ElementSidebarTree
 */
public function section_54adb990076e0b916e87e6b300c14f34cf717081(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<div class="t3-form-x-component-inner-wrapper">
		<div id="t3-form-navigation-component-tree-root-container" data-identifier="treeRootContainer">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['identifier'] = NULL;
$arguments1['size'] = 'small';
$arguments1['overlay'] = NULL;
$arguments1['state'] = 'default';
$arguments1['alternativeMarkupIdentifier'] = NULL;
$arguments1['identifier'] = 'content-elements-mailform';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			<span id="t3-form-navigation-component-tree-root" data-identifier="treeRootElement"></span>
		</div>
		<div class="tree" data-identifier="structure-element"></div>
		<div class="form-group col-sm-12">
			<div class="btn-group btn-group-sm" role="group">
				<a class="btn btn-default t3-form-element-new-page-button" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.new_page_button';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '" data-identifier="treeNewPageBottom">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['identifier'] = NULL;
$arguments5['size'] = 'small';
$arguments5['overlay'] = NULL;
$arguments5['state'] = 'default';
$arguments5['alternativeMarkupIdentifier'] = NULL;
$arguments5['identifier'] = 'actions-page-new';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.new_page_button';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</a>
			</div>
		</div>
	</div>

';

return $output0;
}
/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

	<h1><span id="t3-form-form-definition-label" data-identifier="formDefinitionLabel"></span></h1>

';
}
/**
 * section Stage
 */
public function section_ca6d0e3aaa7d6cc0e9d9fe14eed28587f7ee1133(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output9 = '';

$output9 .= '

	<div class="panel panel-default" data-identifier="stagePanel">
		<div class="panel-heading" data-identifier="panelHeading">
			<span data-identifier="stageHeaderToolbar">
				<div class="btn-group">
					<button class="btn btn-default" title="" data-identifier="buttonViewModePreview">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['identifier'] = NULL;
$arguments10['size'] = 'small';
$arguments10['overlay'] = NULL;
$arguments10['state'] = 'default';
$arguments10['alternativeMarkupIdentifier'] = NULL;
$arguments10['identifier'] = 'actions-document-view';
$arguments10['alternativeMarkupIdentifier'] = 'inline';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '</button>
					<button class="btn btn-default" title="" data-identifier="buttonViewModeAbstract">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['identifier'] = NULL;
$arguments12['size'] = 'small';
$arguments12['overlay'] = NULL;
$arguments12['state'] = 'default';
$arguments12['alternativeMarkupIdentifier'] = NULL;
$arguments12['identifier'] = 'actions-document-open';
$arguments12['alternativeMarkupIdentifier'] = 'inline';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output9 .= '</button>
				</div>
				<div class="pull-right">
					<span class="paginiation-label" data-identifier="paginationTitle"></span>
					<div class="btn-group">
						<button class="btn btn-default" title="" data-identifier="buttonPaginationPrevious">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-view-paging-previous';
$arguments14['alternativeMarkupIdentifier'] = 'inline';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output9 .= '</button>
						<button class="btn btn-default" title="" data-identifier="buttonPaginationNext">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['identifier'] = NULL;
$arguments16['size'] = 'small';
$arguments16['overlay'] = NULL;
$arguments16['state'] = 'default';
$arguments16['alternativeMarkupIdentifier'] = NULL;
$arguments16['identifier'] = 'actions-view-paging-next';
$arguments16['alternativeMarkupIdentifier'] = 'inline';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= '</button>
					</div>
				</div>
			</span>
		</div>
		<div class="form-section" data-identifier="stageSection">
			<div class="row">
				<div id="t3-form-stage" class="form-group col-sm-12" data-identifier="stageArea"></div>
			</div>
			<div class="row" data-identifier="stageNewElementRow">
				<div class="form-group col-sm-12">
					<div class="t3-form-new-element-container">
						<div class="btn-group btn-group-sm" role="group">
							<a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output9 .= '" data-identifier="stageNewElementBottom">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['identifier'] = NULL;
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$arguments20['identifier'] = 'actions-document-new';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output9 .= ' ';
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
$arguments22['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output9 .= '</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

';

return $output9;
}
/**
 * section Inspector
 */
public function section_8222c902ae0723e8bb352bb17ed76809e4688165(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

	<div id="t3-form-inspector-panels">
		<div class="t3-form-x-component-inner-wrapper">
			<div id="t3-form-inspector" data-identifier="inspector"></div>
		</div>
	</div>

';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output24 = '';

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'FormEditor';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '

	<div class="t3-form-x-component-inner-wrapper">
		<div id="t3-form-navigation-component-tree-root-container" data-identifier="treeRootContainer">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'content-elements-mailform';

$output29 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
			<span id="t3-form-navigation-component-tree-root" data-identifier="treeRootElement"></span>
		</div>
		<div class="tree" data-identifier="structure-element"></div>
		<div class="form-group col-sm-12">
			<div class="btn-group btn-group-sm" role="group">
				<a class="btn btn-default t3-form-element-new-page-button" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.new_page_button';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output29 .= '" data-identifier="treeNewPageBottom">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['identifier'] = NULL;
$arguments34['size'] = 'small';
$arguments34['overlay'] = NULL;
$arguments34['state'] = 'default';
$arguments34['alternativeMarkupIdentifier'] = NULL;
$arguments34['identifier'] = 'actions-page-new';

$output29 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output29 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.new_page_button';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output29 .= '</a>
			</div>
		</div>
	</div>

';
return $output29;
};
$arguments27 = array();
$arguments27['name'] = NULL;
$arguments27['name'] = 'ElementSidebarTree';

$output24 .= NULL;

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return '

	<h1><span id="t3-form-form-definition-label" data-identifier="formDefinitionLabel"></span></h1>

';
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['name'] = 'Header';

$output24 .= NULL;

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '

	<div class="panel panel-default" data-identifier="stagePanel">
		<div class="panel-heading" data-identifier="panelHeading">
			<span data-identifier="stageHeaderToolbar">
				<div class="btn-group">
					<button class="btn btn-default" title="" data-identifier="buttonViewModePreview">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['identifier'] = NULL;
$arguments43['size'] = 'small';
$arguments43['overlay'] = NULL;
$arguments43['state'] = 'default';
$arguments43['alternativeMarkupIdentifier'] = NULL;
$arguments43['identifier'] = 'actions-document-view';
$arguments43['alternativeMarkupIdentifier'] = 'inline';

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '</button>
					<button class="btn btn-default" title="" data-identifier="buttonViewModeAbstract">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['identifier'] = NULL;
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$arguments45['identifier'] = 'actions-document-open';
$arguments45['alternativeMarkupIdentifier'] = 'inline';

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '</button>
				</div>
				<div class="pull-right">
					<span class="paginiation-label" data-identifier="paginationTitle"></span>
					<div class="btn-group">
						<button class="btn btn-default" title="" data-identifier="buttonPaginationPrevious">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'actions-view-paging-previous';
$arguments47['alternativeMarkupIdentifier'] = 'inline';

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output42 .= '</button>
						<button class="btn btn-default" title="" data-identifier="buttonPaginationNext">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['identifier'] = NULL;
$arguments49['size'] = 'small';
$arguments49['overlay'] = NULL;
$arguments49['state'] = 'default';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['identifier'] = 'actions-view-paging-next';
$arguments49['alternativeMarkupIdentifier'] = 'inline';

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output42 .= '</button>
					</div>
				</div>
			</span>
		</div>
		<div class="form-section" data-identifier="stageSection">
			<div class="row">
				<div id="t3-form-stage" class="form-group col-sm-12" data-identifier="stageArea"></div>
			</div>
			<div class="row" data-identifier="stageNewElementRow">
				<div class="form-group col-sm-12">
					<div class="t3-form-new-element-container">
						<div class="btn-group btn-group-sm" role="group">
							<a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output42 .= '" data-identifier="stageNewElementBottom">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['identifier'] = NULL;
$arguments53['size'] = 'small';
$arguments53['overlay'] = NULL;
$arguments53['state'] = 'default';
$arguments53['alternativeMarkupIdentifier'] = NULL;
$arguments53['identifier'] = 'actions-document-new';

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output42 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.stage.toolbar.new_element';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output42 .= '</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'Stage';

$output24 .= NULL;

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '

	<div id="t3-form-inspector-panels">
		<div class="t3-form-x-component-inner-wrapper">
			<div id="t3-form-inspector" data-identifier="inspector"></div>
		</div>
	</div>

';
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'Inspector';

$output24 .= NULL;

$output24 .= '

';

return $output24;
}


}
#