<!--
    sudo apt install php-mongo-all-dev
    http://localhost:8888/?password[$ne]=1
-->

<?php 
    $conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    # add data
    /*$bulk = new MongoDB\Driver\BulkWrite();
    $id1 = $bulk->insert([
        'account'        => 'user1',
        'password'       => 'user1_pw',
    ]);

    $id2 = $bulk->insert([
        'account'        => 'user2',
        'password'       => 'user2_pw',
    ]);

    try {
        $result = $conn->executeBulkWrite('my_db.my_collection', $bulk);
        var_dump($result->getInsertedCount());
    } catch (MongoDB\Driver\Exception\BulkWriteException $e) {
        var_dump($e->getWriteResult()->getWriteErrors());
    }*/

    # find data
    $filter = [
                  'account' => 'user1',
                  'password' => $_get['password']
              ];

    # or
    #$filter = array(
    #              'account' => 'user1',
    #              'password' => $_get['password']
    #          );
    $options = [];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $conn->executeQuery('my_db.my_collection', $query);
    foreach ($cursor as $document)
        print_r($document);
?> 
