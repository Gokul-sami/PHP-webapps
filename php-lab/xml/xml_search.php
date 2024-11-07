<?php
    $xml_data=simplexml_load_file("xml_search.xml");
    $search_id=$_POST['id'];
    foreach($xml_data->children() as $user)
    {
        if($user->id==$search_id)
        {
            echo "User ".$search_id." is ".$user->name."<br/>";
            echo $user->description;
        }
    }
?>