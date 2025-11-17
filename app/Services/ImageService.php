<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Обработка и сохранение изображения портфолио
     */
    public function processPortfolioImage($uploadedFile, $categoryId)
    {
        $filename = time() . '_' . uniqid();
        
        // Создаем изображение из загруженного файла
        $sourceImage = $this->createImageFromFile($uploadedFile->getRealPath());
        
        if (!$sourceImage) {
            throw new \Exception('Не удалось загрузить изображение');
        }
        
        // Оригинал в WebP
        $originalPath = "portfolio/{$categoryId}/original/{$filename}.webp";
        $this->saveAsWebP($sourceImage, $originalPath, 90);
        
        // Большое изображение 630x810
        $largeImage = $this->resizeAndCrop($sourceImage, 630, 810);
        $largePath = "portfolio/{$categoryId}/large/{$filename}.webp";
        $this->saveAsWebP($largeImage, $largePath, 85);
        imagedestroy($largeImage);
        
        // Среднее изображение 630x395
        $mediumImage = $this->resizeAndCrop($sourceImage, 630, 395);
        $mediumPath = "portfolio/{$categoryId}/medium/{$filename}.webp";
        $this->saveAsWebP($mediumImage, $mediumPath, 85);
        imagedestroy($mediumImage);
        
        imagedestroy($sourceImage);
        
        return [
            'original_path' => $originalPath,
            'large_path' => $largePath,
            'medium_path' => $mediumPath,
        ];
    }
    
    /**
     * Создание изображения из файла
     */
    private function createImageFromFile($path)
    {
        $imageInfo = getimagesize($path);
        
        if (!$imageInfo) {
            return false;
        }
        
        switch ($imageInfo['mime']) {
            case 'image/jpeg':
                return imagecreatefromjpeg($path);
            case 'image/png':
                return imagecreatefrompng($path);
            case 'image/gif':
                return imagecreatefromgif($path);
            case 'image/webp':
                return imagecreatefromwebp($path);
            default:
                return false;
        }
    }
    
    /**
     * Изменение размера и обрезка по центру
     */
    private function resizeAndCrop($sourceImage, $targetWidth, $targetHeight)
    {
        $sourceWidth = imagesx($sourceImage);
        $sourceHeight = imagesy($sourceImage);
        
        $sourceRatio = $sourceWidth / $sourceHeight;
        $targetRatio = $targetWidth / $targetHeight;
        
        if ($sourceRatio > $targetRatio) {
            // Изображение шире
            $newHeight = $targetHeight;
            $newWidth = (int)($targetHeight * $sourceRatio);
        } else {
            // Изображение выше
            $newWidth = $targetWidth;
            $newHeight = (int)($targetWidth / $sourceRatio);
        }
        
        $tempImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($tempImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $sourceWidth, $sourceHeight);
        
        // Обрезка по центру
        $targetImage = imagecreatetruecolor($targetWidth, $targetHeight);
        $cropX = ($newWidth - $targetWidth) / 2;
        $cropY = ($newHeight - $targetHeight) / 2;
        
        imagecopy($targetImage, $tempImage, 0, 0, (int)$cropX, (int)$cropY, $targetWidth, $targetHeight);
        imagedestroy($tempImage);
        
        return $targetImage;
    }
    
    /**
     * Сохранение изображения в WebP
     */
    private function saveAsWebP($image, $path, $quality)
    {
        // Сохраняем в storage/app/public
        $storagePath = storage_path('app/public/' . $path);
        $storageDirectory = dirname($storagePath);
        
        if (!file_exists($storageDirectory)) {
            mkdir($storageDirectory, 0755, true);
        }
        
        imagewebp($image, $storagePath, $quality);
        
        // ДОПОЛНИТЕЛЬНО: Копируем в public/storage для хостингов без симлинков
        $publicPath = public_path('storage/' . $path);
        $publicDirectory = dirname($publicPath);
        
        if (!file_exists($publicDirectory)) {
            mkdir($publicDirectory, 0755, true);
        }
        
        // Копируем файл
        if (file_exists($storagePath)) {
            copy($storagePath, $publicPath);
            chmod($publicPath, 0644);
        }
    }
}