<?php
require 'vendor/autoload.php';
require '_aws/config.php';

/*
 * Elastic Search Dummy Test Code
 */
$elasticClient = \Elasticsearch\ClientBuilder::create()->build();

$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id'
];

$response = $elasticClient->get($params);


/**
 * Amazon Cloud Search Dummy Test Code
 */
try {
    $cloudClient = \Aws\CloudSearch\CloudSearchClient::factory(array(
        "version" => \Aws\CloudSearch\Config::VERSION,
        "region" => \Aws\CloudSearch\Config::REGION,
        'credentials' => array(
            'key' => \Aws\CloudSearch\Config::KEY,
            'secret' => \Aws\CloudSearch\Config::SECRET,
        )));

    $indexFields = $cloudClient->describeIndexFields(array(
        'DomainName' => \Aws\CloudSearch\Config::DOMAIN_NAME,
    ));


} catch (Exception $e) {
    echo $e->getMessage();
}
?>

Elastic Search Dump
<pre>
<?php print_r($response); ?>
</pre>

Amazon Cloud Search Dump
<pre>
<?php var_dump($indexFields); ?>
</pre>