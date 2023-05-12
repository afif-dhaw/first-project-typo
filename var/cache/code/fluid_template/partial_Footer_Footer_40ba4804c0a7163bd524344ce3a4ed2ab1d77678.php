<?php

class partial_Footer_Footer_40ba4804c0a7163bd524344ce3a4ed2ab1d77678 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<footer>
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <div class="newsletter">
                    <img class="logo-subline" src="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.bdiuLogoSubline', $array1)]);

$output0 .= '" />

                    <div class="newsletter-container">
                        <h6 class="newsletter-heading">Newsletter Anmeldung</h6>

                        <div class="newsletter-email-card">
                            <input type="email" class="newsletter-email">
                            <div class="separator"></div>
                            <input type="submit" class="newsletter-submit" value="ANMELDEN">
                        </div>

                        <div class="checkbox-container">
                            <input type="checkbox">
                            <label class="checkbox-label">Datenschutz akzeptieren</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4">
                <img class="dia-image" src="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.imageDIA', $array2)]);

$output0 .= '">

                <img class="dia-logo" src="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.diaLogo', $array3)]);

$output0 .= '">

                <h4 class="dia-heading">Fachlehrgang für Forderungsmanagement</h4>

                <div class="dia-cta-card">
                    <input class="dia-cta-submit" type="submit" value="ZUR AKADEMIE">
                    <img class="dia-cta-icon" src="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.ExternalLinkIcon', $array4)]);

$output0 .= '">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-4">
                <p class="BundesverbandText">
                    Bundesverband Deutscher Inkasso-Unternehmen e.V. <br>
                    Friedrichstraße 50-55 <br>
                    10117 Berlin <br>
                    <br><br>
                    Telefon: +49 30 206 07 36-0 <br>
                    Telefax: +49 30 206 07 36-33 <br>
                </p>
                <div class="socialMediaIcons"></div>
                <p class="socialMediaText">Social Media</p>
                <img class="twitter icon" src="';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.twitter', $array5)]);

$output0 .= '" />
                <img class="xing icon" src="';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.xing', $array6)]);

$output0 .= '" />
                <img class="linkedin icon" src="';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.linkedin', $array7)]);

$output0 .= '" />
            </div>
            <div class="col col-8">
                <div class="membershipDirection">
                    <p class="memberShipText">Unsere Mitgliedschaften:</p>
                    <div class="membershipImage">
                        <img class="sizeImageMemberShip" src="';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logoFenca', $array8)]);

$output0 .= '" />
                        <img class="sizeImageMemberShip" src="';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logoSelbsregulierung', $array9)]);

$output0 .= '" />
                        <img class="sizeImageMemberShip" src="';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.Netzwerk_Europ', $array10)]);

$output0 .= '" />
                    </div>
                    <div class="memberShipImageBgaWetwerb">
                        <img class="sizeImageMemberShip" src="';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logoBga', $array11)]);

$output0 .= '" />
                        <img class="sizeImageMemberShip" src="';
$array12 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logoWettbewerb', $array12)]);

$output0 .= '" />
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="base-footer">
        <div class="container">
            <p>© BDIU 2020</p>
            <p>Impressum | Datenschutz | Nutzungshinweis</p>
        </div>
    </div>
</footer>';

return $output0;
}


}
#