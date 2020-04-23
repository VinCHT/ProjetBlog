<?php
require_once('ConnectManager.php');

class ContactManager extends Manager
{
       public function postContact($contactName)
    {
        $db = $this->dbConnect();
        $contacts = $db->prepare('INSERT INTO contacts(cont_name, cont_date) VALUES (1,NOW())');
        $affectedLines = $contacts->execute(array($contactName));
        return $affectedLines;
    }

}