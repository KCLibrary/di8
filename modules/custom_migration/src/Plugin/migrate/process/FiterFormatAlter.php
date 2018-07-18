<?php

/**
 * @file
 * Contains \Drupal\custom_migration\Plugin\migrate\process\FiterFormatAlter.
 */

namespace Drupal\custom_migration\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 *
 * @MigrateProcessPlugin(
 *   id = "filter_format_alter"
 * )
 */

class FiterFormatAlter extends ProcessPluginBase {

    /**
     * {@inheritdoc}
     */
    public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
/*
        //print_r($value);
        $shitbird = array();
        $shitbird['value'] = "dirtybits";
        $shitbird['format'] = "plain_text";
        //print_r($shitbird);
        return $shitbird;  */
    }



}