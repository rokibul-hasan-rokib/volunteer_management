<?php

namespace App\Manager;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

class ImageUploadManager
{
    public const DEFAULT_IMAGE = 'dashboard/img/default-image.jpg';

    public UploadedFile|string $file = '';
    public string $name = '';
    public string $path = '';
    public int $width = 0;
    public int $height = 0;
    public string $extension = 'webp';
    public int $quality = 80;


    /**
     * @return string
     */
    final public function upload(): string
    {
        $image_file_name = $this->name . '.' . $this->extension;
        $this->createDirectory();
        $manager = new ImageManager(new Driver());
        $image = $manager->read($this->file)->cover($this->width, $this->height);
        $image->save(Storage::path($this->path) . $image_file_name, $this->quality, $this->extension);
        return $this->path . $image_file_name;
    }


    /**
     * @return void
     */
    final public function createDirectory(): void
    {
        $path = Storage::path(trim($this->path));
        if (!Storage::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
    }

    /**
     * @param UploadedFile|string $file
     * @return $this
     */
    final public function file(UploadedFile|string $file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */

    final public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $path
     * @return $this
     */
    final public function path(string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @param int $width
     * @return $this
     */
    final public function width(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int $height
     * @return $this
     */
    final public function height(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param int $quality
     * @return $this
     */
    final public function quality(int $quality): self
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * @param string $extension
     * @return $this
     */
    final public function extension(string $extension): self
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    final public function auto_size(): self
    {
        $manager = new ImageManager(new Driver());
        $this->height = $manager->read($this->file)->height();
        $this->width = $manager->read($this->file)->width();
        return $this;
    }

    /**
     * @return $this
     */
    final public function original_extension(): self
    {
        $this->extension = $this->file->getClientOriginalExtension();
        return $this;
    }

    /**
     * @param string|null $path
     * @return string
     */
    final public static function get_image(string|null $path): string
    {
        if (!empty($path) && File::exists(Storage::path($path))) {
            return url(Storage::url($path));
        }
        return url(self::DEFAULT_IMAGE);
    }

    /**
     * @param string $image
     * @return void
     */
    final public function delete(string $image): void
    {
        if (File::exists(Storage::path($image))) {
            File::delete(Storage::path($image));
        }
    }

}
