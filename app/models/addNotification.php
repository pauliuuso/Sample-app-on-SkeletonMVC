<?php

class AddNotification
{
    public function addNote($note, $id)
    {
        $date = date("Y-m-d H:i:s");
        $id = intval($id);
        $note = addslashes($note);
        if($id === 0 && $note !== "")
        {
            CON::load()->executeStatement("INSERT INTO notifications (notification, date) VALUES ('$note', '$date')");
        }
        else
        {
            if($note === "")
            {
                CON::load()->executeStatement("DELETE FROM notifications WHERE id = '$id'");
            }
            else
            {
                CON::load()->executeStatement("UPDATE notifications SET notification = '$note' WHERE id = '$id'");
            }
        }
        header("Location: /dashboard/");
    }
}

