<?php

    $clientId = F3::get('POST["client_id"]');
    $privateKey = F3::get('POST["private_key"]');
    
    function ThumbnailList($clientId, $privateKey)
    {
        if (empty($clientId) || empty($privateKey)) {
            throw new Exception('Please enter all required parameters');
        } else {
            F3::set('userId', $clientId);
            F3::set('privateKey', $privateKey);
            $signer = new GroupDocsRequestSigner($privateKey);
            $apiClient = new APIClient($signer); // PHP SDK V1.1
            $api = new StorageApi($apiClient);
            $files = $api->ListEntities($clientId, "", null, null, null, null, null, null, true); //geting all Entities from curent user
            $thumbnail = '';
            $name = '';
            for ($i=0; $i < count($files->result->files); $i++) {
                if ($files->result->files[$i]->thumbnail !== "") {
                    $fp = fopen(__DIR__ . '/../temp/thumbnail' . $i . '.jpg', 'w');
                    fwrite($fp, base64_decode($files->result->files[$i]->thumbnail));
                    fclose($fp);
                    $name = $files->result->files[$i]->name;
                    $thumbnail .= '<img src= "/temp/thumbnail' . $i . '.jpg", width="40px", height="40px">'
                                  . $name = $files->result->files[$i]->name . '</img> <br>';
                }            
            }
            return F3::set('thumbnailList', $thumbnail);
        }
    }
    
    try {
        ThumbnailList($clientId, $privateKey);
    } catch(Exception $e) {
        $error = 'ERROR: ' .  $e->getMessage() . "\n";
        f3::set('error', $error);
    }
    
    echo Template::serve('sample7.htm');