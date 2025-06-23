<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check if locale is in session
        if ($locale = $request->session()->get('locale')) {
            app()->setLocale($locale);
        }
        // 2. Optional: Fallback to browser language
        elseif ($request->hasHeader('Accept-Language')) {
            $locale = $this->getPreferredLocale($request->header('Accept-Language'));
            app()->setLocale($locale);
        }

        return $next($request);
    }

    /**
     * Get preferred locale from Accept-Language header
     */
    protected function getPreferredLocale(string $acceptLanguage): string
    {
        $locales = explode(',', $acceptLanguage);
        $preferred = explode(';', $locales[0])[0];
        $lang = explode('-', $preferred)[0];
        
        return in_array($lang, ['en', 'tr']) ? $lang : config('app.fallback_locale');
    }
}