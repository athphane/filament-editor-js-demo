<?php

namespace App\Models;

use Athphane\FilamentEditorjs\Traits\ModelHasEditorJsComponent;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    use ModelHasEditorJsComponent;

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->registerEditorJsMediaCollections();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->registerEditorJsMediaConversions($media);
    }
}
