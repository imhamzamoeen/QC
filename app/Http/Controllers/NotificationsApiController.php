<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;

class NotificationsApiController extends Controller
{
    public static function getAllNotifications()
    {
        $user = User::find(auth()->user()->id);
        return $user->notifications;
    }
    public function markAllAsRead()
    {
        try {
            $user = User::find(auth()->user()->id);
            $user->notifications->markAsRead();
            return JsonResponseService::getJsonSuccess('All notifications marked as read !');
        } catch (Exception $exception) {
            return JsonResponseService::getJsonException($exception);
        }
    }
    public static function getUnreadCount()
    {
        $user = User::find(auth()->user()->id);
        return $user->unreadNotifications->count();
    }
}
