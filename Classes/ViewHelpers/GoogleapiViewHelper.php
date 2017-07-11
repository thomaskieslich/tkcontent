<?php

namespace ThomasK\Tkcontent\ViewHelpers;


/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3\CMS\Fluid\Core\ViewHelper\Facets\CompilableInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * ViewHelper to include a css/js file
 */
class GoogleapiViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper implements CompilableInterface
{
    use CompileWithRenderStatic;

    /**
     */
    public function initializeArguments()
    {
        $this->registerArgument('path', 'string', 'Path to the CSS/JS file which should be included', true);
        $this->registerArgument('async', 'bool', 'Define if file should load async', false, true);
    }

    /**
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $path = $arguments['path'];
        $async = $arguments['async'];

        /** @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer */
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);

        if (TYPO3_MODE === 'FE') {
//            ($file, $type = 'text/javascript', $compress = true, $forceOnTop = false, $allWrap = '', $excludeFromConcatenation = false, $splitChar = '|', $async = false, $integrity = '')
            $pageRenderer->addJsFooterFile($path, null, false, false, null, null, null, $async);
        }
    }
}
