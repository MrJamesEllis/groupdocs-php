<?php

//Local path to the text file with user data
$userInfo = file(__DIR__ . '/../../user_info.txt');
//Get user data from text file
$clientId = trim($userInfo[0]);
$privateKey = trim($userInfo[1]);
//Get raw data from the GroupDocs server
$json = file_get_contents("php://input");
//Decode json with raw data to array
$callBack_data = json_decode($json, true);
//Get job id from array
$envelopeId = $callBack_data["SourceId"];
$jobStatus = $callBack_data["EventType"];
if ($jobStatus == "JobCompleted") {
    //Create signer object
    $signer = new GroupDocsRequestSigner(trim($privateKey));
    //Create apiClient object
    $apiClient = new APIClient($signer);
    //Create Signature Api object
    $signatureApi = new SignatureApi($apiClient);
    //Create Storage Api object
    $storageApi = new StorageApi($apiClient);
    //Get signed document from the envelop
    $getDocInfo = $signatureApi->GetSignatureEnvelopeDocuments($clientId, $envelopeId);
    if ($getDocInfo->status == "Ok") {
        $name = $getDocInfo->result->documents[0]->name;
        //Local path to the downloads folder
        $downloadFolder = dirname(__FILE__) . '/../../downloads';
        //Check is folder exist
        if (!file_exists($downloadFolder)) {
            //If folder don't exist create it
            mkdir($downloadFolder);
        }
        //Obtaining file stream of downloading file and definition of folder where to download file
        $outFileStream = FileStream::fromHttp($downloadFolder, $name);
        //Download signed document
        $document = $signatureApi->GetSignedEnvelopeDocuments($clientId, $envelopeId, $outFileStream);
    }
}