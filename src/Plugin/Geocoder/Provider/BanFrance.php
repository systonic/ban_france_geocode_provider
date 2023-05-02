<?php

namespace Drupal\ban_france_geocode_provider\Plugin\Geocoder\Provider;

use Drupal\geocoder\ConfigurableProviderUsingHandlerWithAdapterBase;

/**
 * Provides a BAN France geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "banfrance",
 *   name = "BANFrance",
 *   handler = "\Geocoder\Provider\BANFrance\BANFrance",
 *   arguments = {
 *     "rootUrl" = "",
 *     "userAgent" = "",
 *     "referer" = ""
 *   }
 * )
 */
class BANFrance extends ConfigurableProviderUsingHandlerWithAdapterBase {}
