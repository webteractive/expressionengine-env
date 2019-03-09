<?php

class Mix
{
  /**
   * The data to return
   *
   * @var string
   */
  public $return_data = '';

  /**
   * Plugin constructor
   */
  public function __construct() {
    $path = ee()->TMPL->fetch_param('path');
    $baseUrl = ee('Config')->get('base_url');
    $mixManifestPath = ee('Config')->get('mix_manifest');

    if (empty($path)) throw new Exception('Mix: The "path" property is required.', 1);
    if (! file_exists($mixManifestPath)) throw new Exception('Mix: Manifest file is required.', 2);
    if (! isset(json_decode(file_get_contents($mixManifestPath), true)[$path])) throw new Exception("Mix: \"$path\" doesn't exists.", 3);
    
    $asset = json_decode(file_get_contents($mixManifestPath), true)[$path];

    $this->return_data = join('', [$baseUrl, $asset]);
  }
}

// EOF