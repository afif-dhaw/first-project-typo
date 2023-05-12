<?php

class Standard_action_ceFooterTeaser_c8dcab1b9abc35a4691f29f9c5ef511a16abae47 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="ceFooterTeaser">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['alt'] = NULL;
$arguments5['ismap'] = NULL;
$arguments5['longdesc'] = NULL;
$arguments5['usemap'] = NULL;
$arguments5['loading'] = NULL;
$arguments5['src'] = '';
$arguments5['treatIdAsReference'] = false;
$arguments5['image'] = NULL;
$arguments5['crop'] = NULL;
$arguments5['cropVariant'] = 'default';
$arguments5['fileExtension'] = NULL;
$arguments5['width'] = NULL;
$arguments5['height'] = NULL;
$arguments5['minWidth'] = NULL;
$arguments5['minHeight'] = NULL;
$arguments5['maxWidth'] = NULL;
$arguments5['maxHeight'] = NULL;
$arguments5['absolute'] = false;
$arguments5['class'] = 'imageTeaser';
$array7 = array (
);$arguments5['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array7);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('image', $array3);
$arguments1['as'] = 'img';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    
    <div class="logo-title-link">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['alt'] = NULL;
$arguments12['ismap'] = NULL;
$arguments12['longdesc'] = NULL;
$arguments12['usemap'] = NULL;
$arguments12['loading'] = NULL;
$arguments12['src'] = '';
$arguments12['treatIdAsReference'] = false;
$arguments12['image'] = NULL;
$arguments12['crop'] = NULL;
$arguments12['cropVariant'] = 'default';
$arguments12['fileExtension'] = NULL;
$arguments12['width'] = NULL;
$arguments12['height'] = NULL;
$arguments12['minWidth'] = NULL;
$arguments12['minHeight'] = NULL;
$arguments12['maxWidth'] = NULL;
$arguments12['maxHeight'] = NULL;
$arguments12['absolute'] = false;
$arguments12['class'] = 'logo';
$array14 = array (
);$arguments12['image'] = $renderingContext->getVariableProvider()->getByPath('media', $array14);

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
        ';
return $output11;
};
$arguments8 = array();
$arguments8['each'] = NULL;
$arguments8['as'] = NULL;
$arguments8['key'] = NULL;
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$array10 = array (
);$arguments8['each'] = $renderingContext->getVariableProvider()->getByPath('media', $array10);
$arguments8['as'] = 'media';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
        <h3 class="header-ce-teaser">';
$array15 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array15)]);

$output0 .= '</h3>
        <div class="link-teaser">
            <a href="#" class="link-teaser-text">';
$array16 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header_link', $array16)]);

$output0 .= '</a>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="evenInfo">
        <div class="evenInfo-date">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.startdate', $array19);
};
$arguments17 = array();
$arguments17['date'] = NULL;
$arguments17['format'] = '';
$arguments17['base'] = NULL;
$arguments17['format'] = '%d %B';
$renderChildrenClosure18 = ($arguments17['date'] !== null) ? function() use ($arguments17) { return $arguments17['date']; } : $renderChildrenClosure18;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= ' bis ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.enddate', $array22);
};
$arguments20 = array();
$arguments20['date'] = NULL;
$arguments20['format'] = '';
$arguments20['base'] = NULL;
$arguments20['format'] = '%d %B';
$renderChildrenClosure21 = ($arguments20['date'] !== null) ? function() use ($arguments20) { return $arguments20['date']; } : $renderChildrenClosure21;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output0 .= '
        </div>
        <h3 class="evenInfo-title">';
$array23 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subheader', $array23)]);

$output0 .= '</h3>
    </div>
</div>
';

return $output0;
}


}
#