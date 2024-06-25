<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LogWebsiteVisits
{
    public function handle(Request $request, Closure $next)
    {
        // Faqat asosiy sahifaga tashriflarni loglash
        if ($request->is('/')) {
            $sessionKey = 'last_visit_home';
            $lastVisit = $request->session()->get($sessionKey);

            $ipAddress = $request->ip();
            $userAgent = $request->header('User-Agent');

            // Debug: Log the last visit time
            Log::info('Last visit time:', [$sessionKey => $lastVisit]);

            // Agar so'nggi tashrif 15 daqiqadan oldin bo'lgan bo'lsa yoki hali mavjud bo'lmasa
            if (!$lastVisit || now()->diffInMinutes($lastVisit) >= 15) {
                // IP manzil va user agent asosida tekshirish
                $recentVisit = DB::table('website_visits')
                    ->where('ip_address', $ipAddress)
                    ->where('user_agent', $userAgent)
                    ->where('visited_at', '>', now()->subMinutes(15))
                    ->exists();

                if (!$recentVisit) {
                    DB::table('website_visits')->insert([
                        'url' => $request->url(),
                        'ip_address' => $ipAddress,
                        'user_agent' => $userAgent,
                        'visited_at' => now()
                    ]);

                    $request->session()->put($sessionKey, now());

                    // Debug: Log session data after updating
                    Log::info('Session data after updating last visit:', $request->session()->all());
                } else {
                    // Debug: Log when visit is not logged
                    Log::info('Visit not logged as it is within 15 minutes of the last visit for the same IP and User-Agent.');
                }
            } else {
                // Debug: Log when visit is not logged
                Log::info('Visit not logged as it is within 15 minutes of the last visit.');
            }
        }

        return $next($request);
    }
}
