<?php
require_once('ConnectManager.php');

// class ContactManager extends Manager
// {
//     public function getContact($pseudo)
//     {
//         $db = $this->dbConnect();
//         $req = $db->prepare('SELECT id, cont_name, cont_subject, cont_message FROM contacts WHERE cont_name = ?');
//         $req->execute(array($pseudo));
//         $contact = $req->fetch();

//         return $contact;
//     }

//     public function messageContact($cont_name, $subject, $message)
//     {
//         $db = $this->dbConnect();
//         $req = $db->prepare('INSERT INTO users(cont_name, cont_subject, cont_subject) VALUES(?, ?, ?');
//         $messageContact = $req->execute(array($cont_name, $subject, $message));

//         return $messageContact;
//     }
// }