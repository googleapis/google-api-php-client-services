<?php

// Autoloader function for classes starting with 'Google_Service_'
spl_autoload_register(function ($class) {
    if (0 === strpos($class, 'Google_Service_')) {
        // Autoload the new class, which will also create an alias for the
        // old class by changing underscores to namespaces:
        //     Google_Service_Speech_Resource_Operations
        //      => Google\Service\Speech\Resource\Operations
        $classExists = class_exists($newClass = str_replace('_', '\\', $class));

        if (!$classExists && !class_exists('Google_Client', false)) {
            $clientPath = __DIR__ . '/../apiclient/src/Google/Client.php';

            // For older (pre-2.7.2) versions of google/apiclient
            if (file_exists($clientPath)) {
                require_once($clientPath);

                if (
                    defined('Google_Client::LIBVER')
                    && version_compare(Google_Client::LIBVER, '2.7.2', '<=')
                ) {
                    $servicesClassMap = [
                        'Google\\Client' => 'Google_Client',
                        'Google\\Service' => 'Google_Service',
                        'Google\\Service\\Resource' => 'Google_Service_Resource',
                        'Google\\Model' => 'Google_Model',
                        'Google\\Collection' => 'Google_Collection',
                    ];

                    foreach ($servicesClassMap as $alias => $newClass) {
                        class_alias($newClass, $alias);
                    }
                }
            }
        }

        return $classExists;
    }
}, true, true);