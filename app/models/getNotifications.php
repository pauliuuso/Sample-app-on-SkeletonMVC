<?php

class GetNotifications
{
    public function parseNotifications()
    {
        return $notifs = CON::load()->parseNotifications("SELECT id, notification, date FROM notifications ORDER BY date ASC");
    }
}

