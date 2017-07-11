lib.contentElement {
  templateRootPaths {
    100 = EXT:tkcontent/Resources/Private/Templates/
  }

  partialRootPaths {
    100 = EXT:tkcontent/Resources/Private/Partials/
  }

  layoutRootPaths {
    100 = EXT:tkcontent/Resources/Private/Layouts/
  }
}

page {
  includeJSFooter {
    ce-slider = EXT:tkcontent/Resources/Public/JavaScript/slider.js
    ce-googlemaps = EXT:tkcontent/Resources/Public/JavaScript/googlemaps.js
  }
}

<INCLUDE_TYPOSCRIPT: source="DIR:EXT:tkcontent/Configuration/TypoScript/Content" extensions="ts,typoscript">

# Rendering of content elements in detail view
lib.tx_tkcontent.contentElementRendering = RECORDS
lib.tx_tkcontent.contentElementRendering {
  tables = tt_content
  source.current = 1
  dontCheckPid = 1
}
