<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\PortfolioCategory;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = $this->getStaticUrls();
        $urls = array_merge($urls, $this->getBlogUrls());
        $urls = array_merge($urls, $this->getPortfolioUrls());

        $content = view('sitemap.index', compact('urls'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }

    private function getStaticUrls(): array
    {
        return [
            // Главная
            ['url' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily'],

            // Города - Алматы
            ['url' => url('/almaty'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => url('/almaty/coffee-break'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/almaty/furshet'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/almaty/banket'), 'priority' => '0.8', 'changefreq' => 'weekly'],

            // Города - Астана
            ['url' => url('/astana'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => url('/astana/coffee-break'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/astana/furshet'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/astana/banket'), 'priority' => '0.8', 'changefreq' => 'weekly'],

            // Услуги
            ['url' => url('/uslugi'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            
            // Кофе брейк
            ['url' => url('/uslugi/coffee-break'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/coffee-break/menu'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/uslugi/coffee-break/almaty'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/coffee-break/astana'), 'priority' => '0.8', 'changefreq' => 'weekly'],

            // Фуршет
            ['url' => url('/uslugi/furshet'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/furshet/menu'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/uslugi/furshet/almaty'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/furshet/astana'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/furshet/nedorogo'), 'priority' => '0.7', 'changefreq' => 'weekly'],

            // Банкет
            ['url' => url('/uslugi/banket'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/banket/menu'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/uslugi/banket/almaty'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/banket/astana'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/uslugi/banket/nedorogo'), 'priority' => '0.7', 'changefreq' => 'weekly'],

            // Аренда оборудования
            ['url' => url('/uslugi/arenda-oborudovaniya'), 'priority' => '0.7', 'changefreq' => 'monthly'],

            // Меню
            ['url' => url('/menu'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/menu/coffee-break'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/menu/furshet'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/menu/banket'), 'priority' => '0.7', 'changefreq' => 'monthly'],

            // Цены
            ['url' => url('/ceny'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/ceny/almaty'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => url('/ceny/astana'), 'priority' => '0.8', 'changefreq' => 'weekly'],

            // О компании
            ['url' => url('/o-kompanii'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => url('/portfolio'), 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => url('/blog'), 'priority' => '0.8', 'changefreq' => 'daily'],
            ['url' => url('/kontakty'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ];
    }

    private function getBlogUrls(): array
    {
        $urls = [];

        $articles = News::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->get();

        foreach ($articles as $article) {
            $urls[] = [
                'url' => url('/blog/' . $article->slug),
                'priority' => '0.6',
                'changefreq' => 'monthly',
                'lastmod' => $article->updated_at->toW3cString(),
            ];
        }

        return $urls;
    }

    private function getPortfolioUrls(): array
    {
        $urls = [];

        $categories = PortfolioCategory::orderBy('sort_order')
            ->get();

        foreach ($categories as $category) {
            $urls[] = [
                'url' => url('/portfolio/' . $category->slug),
                'priority' => '0.6',
                'changefreq' => 'monthly',
                'lastmod' => $category->updated_at->toW3cString(),
            ];
        }

        return $urls;
    }
}