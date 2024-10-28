<?php
    require_once 'Contact.php';
    require_once 'Person.php';

    // Create a Person instance
    $person1 = new Person("John Doe", 30);
    $person2 = new Person("Pepe e", 44);

    // Add contacts
    $c1=new Contact("Email", "john.doe@example.com");
    $c2=new Contact("Phone", "+123456789");
    $person1->addContact($c1);
    $person1->addContact($c2);

    
    $person2->addContact($c1);
   

    // Display person and contacts
    echo $person;
?>