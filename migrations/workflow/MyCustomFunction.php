<?php


function updateOrganization($entity){
    global $adb; // Calling the vtiger database connection object
    /**
    * $entity : The entire data/object of the module which invokes this workflow custom functions
    * $WsID : this is the Modules id, example,
    * if Contact module, the record Id (primary key) is returned with a prefix of web service ID.
    * In this case and example Contact ID 1250 will be returned as "12x1250"
    * WebService ID of Contact module : 12
    * Contact Record Id : 1250
    * Below this the contact Id is separated from webservice ID, so it can be used with sql queries
    */
    $wsId = $entity→getId();
    $parts = explode('x', $wsId);//
    $ContactID = $parts[1];
    // Getting the module’s data
    $entityData = get_object_vars($entity);
    $MemberOf = $entityData[‘account_id’]; 
    $result = $adb→query("SELECT * FROM vtiger_account WHERE accountid=".$ MemberOf." ");// vtiger_account is the table for Organization module
    $row = $adb→fetch_array($result); // This returns the Organization data, which include ID and address details
    $OrganizationID = $row[‘accountid’];
    // Write code here to update Contact addresses. Check database for contact related tables

}
