<?php
// Beaver Builder will attempt to regenerate css/cache files and make HTTP API calls on the filesystem with each origin request causing up to 12s load times.
// This forces the assets to load inline
add_filter( 'fl_builder_render_assets_inline', '__return_true' );
