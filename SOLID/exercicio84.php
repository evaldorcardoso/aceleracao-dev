<?php
    //Ruim
    // function emailClients(Array $clients):void {
    //     foreach ($clients as $client) {
    //         $clientRecord = $db->find($client);
    //         if($clientRecord->isActive()){
    //             email($client);
    //         }
    //     }
    // }

    //Bom
    class Client{}

    class DB{
        public function find(Client $client){
            //procura no banco de dados
            return $client;
        }
    }

    function email($client){}

    function emailClients($db, Array $clients):void {
        foreach ($clients as $client) {
            $clientActive = findActiveClient($db,$client);
            $clientActive instanceof Client ? email($clientActive) : null;
        }
    }

    function findActiveClient($db,$client):?Client {
        $clientRecord = $db->find($client);
        if($clientRecord->isActive()){
            return new Client($clientRecord);
        }
        return null;
    }

